<?php

namespace App\Http\Controllers\Frontend;

class AuthController
{
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('frontend.dashboard');
        }
        return view('auth.login');
    }

    public function register()
    {
        if (auth()->check()) {
            return redirect()->route('frontend.dashboard');
        }
        return view('auth.register');
    }

    public function forgotPassword()
    {
        if (auth()->check()) {
            return redirect()->route('frontend.dashboard');
        }
        return view('auth.forgot-password');
    }
}