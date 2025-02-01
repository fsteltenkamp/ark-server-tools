<?php

namespace App\Http\Controllers\Frontend;

class AuthController
{
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }
}