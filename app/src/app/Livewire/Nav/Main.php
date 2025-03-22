<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class Main extends Component
{
    public $activeMenuItemRoute = 'frontend.dashboard';
    public $menuStructure = [
        'Cluster Management' => [
            'Clusters' => [
                'link' => 'frontend.cluster.list',
                'activeRoutes' => [
                    'frontend.cluster.list',
                    'frontend.cluster.edit'
                ],
                'icon' => 'network',
            ],
            'Servers' => [
                'activeRoutes' => [],
                'icon' => 'computer-tower',
            ],
        ],
        'Live Configs' => [
            'Dynamic Configs' => [
                'link' => 'frontend.liveConfigs.dynamicConfigs.list',
                'activeRoutes' => [
                    'frontend.liveConfigs.dynamicConfigs.list',
                    'frontend.liveConfigs.dynamicConfigs.edit'
                ],
                'icon' => 'planet',
            ],
            'Live Tuning' => [
                'link' => 'frontend.liveConfigs.liveTuning.list',
                'activeRoutes' => [
                    'frontend.liveConfigs.liveTuning.list',
                    'frontend.liveConfigs.liveTuning.edit'
                ],
                'icon' => 'person-simple-run',
            ]
        ],
        'Config Generation' => [
            'GameUserSettings.ini' => [
                'icon' => 'file-ini',
            ],
            'Game.ini' => [
                'icon' => 'file-ini',
            ],
            'Startup Commands' => [
                'icon' => 'terminal',
            ]
        ]
    ];

    public function render()
    {
        $this->activeMenuItemRoute = request()->route()->getName();
        return view('livewire.nav.main');
    }
}
