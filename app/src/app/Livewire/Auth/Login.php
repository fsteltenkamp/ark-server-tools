<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid email or password');
            return;
        }

        return route('web.frontend.dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
