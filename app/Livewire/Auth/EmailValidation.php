<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use App\Livewire\Actions\Logout;
use App\Mail\OTPMail;
use App\Notifications\EmailValidationNotification;
use App\Traits\HasSmsValidation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Twilio\Rest\Client;

class EmailValidation extends Component
{
    public $user;
    public $end;
    public $otp;
    public $code1;
    public $code2;
    public $code3;
    public $code4;
    public $code5;
    public $code6;
    // use HasSmsValidation;


    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    #[Layout('layouts.guest')]
    public function mount()
    {
        $user = auth()->user();
        $this->user = $user;
        $this->end = $user->verificationCode->expire_at ?? Carbon::now();

    }

    public function render()
    {
        return view('livewire.auth.email-validation');
    }

    public function sendEmailNotification()
    {
        try{
            $user = $this->user;
            $phone = $user->phone;
            $this->generateOtp($phone);

            $otp = $user->verificationCode->otp;

            $this->end = $user->verificationCode->expire_at;

            $user->notify(new EmailValidationNotification($otp));

            // Mail::to($user->email)->send(new OTPMail($mailData, $user));

            session()->flash('status', 'Kode OTP Baru telah dikirim ke ' . $user->email);

            return redirect('/user/email-validation');

        } catch (\Exception $e){
            return redirect('/user/email-validation')->with(['error' => $e->getMessage()]);
        }
    }

    public function generateOtp($phone)
    {
        $user = auth()->user();

        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return VerificationCode::updateOrCreate([
            'user_id' => $user->id,
        ],[
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(5)
        ]);



    }

    public function updatedCode6()
    {
        $this->otp = $this->code1 . $this->code2 . $this->code3 . $this->code4 . $this->code5 . $this->code6;
        $this->loginWithOtp();
    }

    public function loginWithOtp()
    {
        $this->validate([
            'otp'           =>  ['required']
        ]);

        $user = auth()->user();

        #Validation Logic
        $verificationCode   = VerificationCode::where('user_id', $user->id)->where('otp', $this->otp)->first();

        $now = Carbon::now();

        if ($verificationCode === null) {
            $this->reset();
            $this->user = $user;
            return session()->flash('error', 'Kode OTP anda salah');

        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return session()->flash('error', 'Kode OTP anda sudah kadaluarsa');
        }


            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now(),
                'status'    => 1,
            ]);


            $user = User::find($user->id);
            $user->update([
                'email_verified'    => 1,
            ]);
            if($user->sms_verified == 0){
                $this->sendSmsNotification();
                return redirect('/user/sms-validation');
            }

            // Auth::login($user);

            return redirect('/dashboard');

    }


}
