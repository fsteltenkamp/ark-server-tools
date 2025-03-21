<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $email;
    public $email_condition_valid = false;
    public $password;
    public $password_condition_length = false;
    public $password_condition_lowercase = false;
    public $password_condition_uppercase = false;
    public $password_condition_number = false;
    public $password_condition_special = false;
    public $password_repeat;
    public $password_repeat_condition_same = false;

    public function register()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_repeat' => 'required|same:password',
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('frontend.dashboard');
    }

    public function checkEmail()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->email_condition_valid = true;
        } else {
            $this->email_condition_valid = false;
        }
    }

    public function checkPassword()
    {
        if (strlen($this->password) >= 6) {
            $this->password_condition_length = true;
        } else {
            $this->password_condition_length = false;
        }
        if (preg_match('/[a-z]/', $this->password)) {
            $this->password_condition_lowercase = true;
        } else {
            $this->password_condition_lowercase = false;
        }
        if (preg_match('/[A-Z]/', $this->password)) {
            $this->password_condition_uppercase = true;
        } else {
            $this->password_condition_uppercase = false;
        }
        if (preg_match('/[0-9]/', $this->password)) {
            $this->password_condition_number = true;
        } else {
            $this->password_condition_number = false;
        }
        if (preg_match('/[^a-zA-Z0-9]/', $this->password)) {
            $this->password_condition_special = true;
        } else {
            $this->password_condition_special = false;
        }
    }

    public function checkPasswordRepeat()
    {
        if ($this->password == $this->password_repeat) {
            $this->password_repeat_condition_same = true;
        } else {
            $this->password_repeat_condition_same = false;
        }
    }

    public function render()
    {
        $this->checkEmail();
        $this->checkPassword();
        $this->checkPasswordRepeat();
        return view('livewire.auth.register');
    }
}
