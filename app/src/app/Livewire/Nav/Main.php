<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class Main extends Component
{
    public $activeMenuItemRoute = 'frontend.dashboard';
    public $menuStructure = [
        'Cluster Management' => [
            'Dashboard' => [
                'link' => 'frontend.clusterManagement.dashboard',
                'icon' => 'lightning',
            ],
            'Clusters' => [],
        ],
        'Live Configs' => [
            'Dynamic Configs' => [],
            'Live Tuning' => []
        ],
        'Config Generation' => [
            'GameUserSettings.ini' => [],
            'Game.ini' => [],
            'Startup Command' => []
        ]
    ];

    public function render()
    {
        return view('livewire.nav.main');
    }
}
