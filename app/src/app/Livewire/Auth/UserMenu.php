<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class UserMenu extends Component
{
    public $user;

    public function boot()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.auth.user-menu');
    }
}
