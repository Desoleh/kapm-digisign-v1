<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
        
    }
    
    public function callback($provider)
    {
        try {
            $providerUser = Socialite::driver($provider)->user();
            session()->put([
                'provider_id'       => $providerUser->id,
                'provider'          => $provider,
                'name'              => $providerUser->name,
                'emailProvider'             => $providerUser->email,
                'provider_token'    => $providerUser->token,
                'avatar'    => $providerUser->avatar,
            ]);
            if(!User::where('email', $providerUser->getEmail())->exists()){
                return redirect('/register');
            }
            $user = User::where([
                'provider'  =>  $provider,
                'provider_id'   =>  $providerUser->id,
            ])->first();

            if(!$user){
                $user = User::updateOrCreate(['email'=>$providerUser->email,],[
                    'provider_id'       => $providerUser->id,
                    'provider'          => $provider,
                    'email'             => $providerUser->email,
                    'provider_token'    => $providerUser->token,
                    'avatar'            => $providerUser->avatar ?? '',
                    'email_verified_at' =>  now(),
                ])->assignRole('user');
            }
        } catch (\Exception $e){
            // dd($e);
            return redirect('/login')->with(['errormail' => $e->getMessage()]);
        }

        $user = User::updateOrCreate([
            'email'             => $providerUser->email,
        ], [
            'provider_id'   => $providerUser->id,
            'provider'      => $provider,
            'avatar'              => $providerUser->avatar,
            'provider_token'    => $providerUser->token,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
