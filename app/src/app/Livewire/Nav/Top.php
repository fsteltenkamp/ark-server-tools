<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class Top extends Component
{
    public $title = 'Top Nav';
    public $subtitle = '';
    
    public function render()
    {
        return view('livewire.nav.top');
    }
}
