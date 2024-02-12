<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:70','regex:/^[a-zA-Z ]*$/'],
            'phone' => ['required', 'min_digits:7', 'max_digits:15','numeric','unique:users,phone,except,id'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:30', 'unique:'.User::class],
        ],[
            'name.regex'    => 'nama tidak boleh dengan tanda baca',
            'name.max'    => 'nama tidak boleh lebih dari 70 huruf',
            'phone.unique' => 'telpon sudah terdaftar!',
            'phone.min_digits' => 'telpon tidak boleh kurang dari 7 angka!',
            'phone.max_digits' => 'telpon tidak boleh lebih dari 15 angka!',
            'phone.numeric' => 'telpon hanya berisi angka!',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
