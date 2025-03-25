<?php

namespace App\Livewire\LiveConfigs\DynamicConfigs;

use Livewire\Component;
use App\Models\DynamicConfig;

class Dashboard extends Component
{
    public $configs;

    public function createConfig()
    {
        $config = new DynamicConfig();
        $config->name = 'New Config';
        $config->description = 'A new configuration';
        $config->user_id = auth()->id();
        $config->save();
        $this->configs->push($config);
    }

    public function deleteConfig($configId)
    {
        $config = DynamicConfig::find($configId);
        $config->delete();
        $this->configs = $this->configs->filter(function ($c) use ($configId) {
            return $c->id !== $configId;
        });
    }

    public function render()
    {
        return view('livewire.live-configs.dynamic-configs.dashboard');
    }
}
