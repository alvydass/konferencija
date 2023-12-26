<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController
{

    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $hashedPassword = Hash::make($password); // Hash the password

        //dd($hashedPassword);
        //dd($email);

        $credentials = [
            'email' => $email,
            'password' => $password, // Use the hashed password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('main');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }
}
