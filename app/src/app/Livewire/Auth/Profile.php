<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    public $user;

    public $username;
    public $newUsername;
    public $displayName_condition_free = false;

    public $email;
    public $newEmail;
    public $email_condition_valid = false;

    public $newPassword;
    public $password_condition_length = false;
    public $password_condition_lowercase = false;
    public $password_condition_uppercase = false;
    public $password_condition_number = false;
    public $password_condition_special = false;

    public $newPassword_repeat;
    public $password_repeat_condition_same = false;

    public $currentPasswordConfirmation = false;
    public $currentPassword;
    public $currentPassword_condition_correct = false;
    private $_passwordVerified = false;

    public $editUsername = false;
    public $editEmail = false;
    public $editPassword = false;

    public function boot()
    {
        $this->user = auth()->user();
        $this->username = $this->user->name;
        $this->email = $this->user->email;
    }

    public function checkUsername()
    {
        if (!empty($this->newUsername)) {
            if ($this->newUsername == $this->username) {
                $this->displayName_condition_free = true;
            } else {
                $this->displayName_condition_free = true;
                $user = User::where('name', $this->newUsername)->first();
                if ($user) {
                    $this->displayName_condition_free = false;
                }   
            }
        }
    }

    public function checkEmail()
    {
        if (filter_var($this->newEmail, FILTER_VALIDATE_EMAIL)) {
            $this->email_condition_valid = true;
        } else {
            $this->email_condition_valid = false;
        }
    }

    public function checkPassword()
    {
        if (strlen($this->newPassword) >= 6) {
            $this->password_condition_length = true;
        } else {
            $this->password_condition_length = false;
        }
        if (preg_match('/[a-z]/', $this->newPassword)) {
            $this->password_condition_lowercase = true;
        } else {
            $this->password_condition_lowercase = false;
        }
        if (preg_match('/[A-Z]/', $this->newPassword)) {
            $this->password_condition_uppercase = true;
        } else {
            $this->password_condition_uppercase = false;
        }
        if (preg_match('/[0-9]/', $this->newPassword)) {
            $this->password_condition_number = true;
        } else {
            $this->password_condition_number = false;
        }
        if (preg_match('/[^a-zA-Z0-9]/', $this->newPassword)) {
            $this->password_condition_special = true;
        } else {
            $this->password_condition_special = false;
        }
    }

    public function checkPasswordRepeat()
    {
        if ($this->newPassword == $this->newPassword_repeat) {
            $this->password_repeat_condition_same = true;
        } else {
            $this->password_repeat_condition_same = false;
        }
    }

    public function checkCurrentPassword()
    {
        if (empty($this->currentPassword)) {
            $this->currentPassword_condition_correct = false;
        } else {
            if (Hash::check($this->currentPassword, $this->user->password)) {
                $this->currentPassword_condition_correct = true;
                $this->_passwordVerified = true;
            } else {
                $this->currentPassword_condition_correct = false;
                $this->_passwordVerified = false;
            }
        }
    }

    public function switchEditUsername()
    {
        $this->editUsername = !$this->editUsername;
    }

    public function switchEditEmail()
    {
        $this->editEmail = !$this->editEmail;
    }

    public function switchEditPassword()
    {
        $this->editPassword = !$this->editPassword;
    }

    public function saveChanges()
    {
        $this->checkUsername();
        $this->checkEmail();
        $this->checkPassword();
        $this->checkPasswordRepeat();
        $this->checkCurrentPassword();

        // Only Save if the current password is verified:
        if (!$this->verifyCurrentPassword()) {
            Log::debug('Current password not verified. Not saving changes.');
            return;
        }

        Log::debug('Saving changes to user: ' . $this->user->id);

        if (!empty($this->newUsername) && $this->newUsername != $this->username && $this->displayName_condition_free) {
            $this->user->name = $this->newUsername;
            $this->editUsername = false;
            Log::debug('Changing Username to: ' . $this->newUsername);
        } else {
            Log::debug('Username is not valid or already taken:', [
                'newUsername' => $this->newUsername,
                'currentUsername' => $this->user->name,
                'condition' => $this->displayName_condition_free
            ]);
        }

        if (!empty($this->newEmail) && $this->newEmail != $this->email && $this->email_condition_valid) {
            $this->user->email = $this->newEmail;
            $this->editEmail = false;
            Log::debug('Changing Email to: ' . $this->newEmail);
        } else {
            Log::debug('Email is not valid:', [
                'newEmail' => $this->newEmail,
                'currentEmail' => $this->user->email,
                'condition' => $this->email_condition_valid
            ]);
        }

        if (!empty($this->newPassword) && (Hash::make($this->newPassword) !== $this->user->password) && $this->password_condition_length && $this->password_condition_lowercase && $this->password_condition_uppercase && $this->password_condition_number && $this->password_condition_special && $this->password_repeat_condition_same) {
            $this->user->password = Hash::make($this->newPassword);
            $this->editPassword = false;
            Log::debug('Changing Password.');
        } else {
            Log::debug('Password is not valid:', [
                'newPassword' => $this->newPassword,
                'currentPassword' => $this->user->password,
                'conditions' => [
                    'length' => $this->password_condition_length,
                    'lowercase' => $this->password_condition_lowercase,
                    'uppercase' => $this->password_condition_uppercase,
                    'number' => $this->password_condition_number,
                    'special' => $this->password_condition_special,
                    'repeat' => $this->password_repeat_condition_same
                ]
            ]);
        }

        if (!$this->user->save()) {
            Log::error('Failed to save user changes.');
            return;
        }
    }

    public function verifyCurrentPassword()
    {
        if ($this->_passwordVerified) {
            return true;
        }
        
        // Hide all editors:
        $this->editUsername = false;
        $this->editEmail = false;
        $this->editPassword = false;
        $this->currentPasswordConfirmation = true;

        return false;
    }

    public function deleteAccount()
    {
        // Only delete the account if the current password is verified:
        if (!$this->verifyCurrentPassword()) {
            return;
        }

        $this->user->delete();
        auth()->logout();
        return redirect()->route('home');
    }

    public function render()
    {
        $this->checkUsername();
        $this->checkEmail();
        $this->checkPassword();
        $this->checkPasswordRepeat();
        $this->checkCurrentPassword();

        return view('livewire.auth.profile');
    }
}
