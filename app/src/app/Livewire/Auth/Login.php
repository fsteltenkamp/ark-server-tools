<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;
    public $error;

    public function login()
    {
        // Validate Email
        $emailValidateResult = filter_var($this->email, FILTER_VALIDATE_EMAIL);
        if (!$emailValidateResult) {
            $this->error = 'Invalid email';
            return;
        }

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            Log::debug('Login failed', ['email' => $this->email]);
            $this->error = 'unknown email or wrong password';
            return;
        } else {
            return redirect(route('frontend.dashboard'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
