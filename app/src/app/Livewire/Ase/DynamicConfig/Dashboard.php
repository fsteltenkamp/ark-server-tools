<?php

namespace App\Livewire\Ase\DynamicConfig;

use Livewire\Component;
use App\Models\AseDynamicConfig;

class Dashboard extends Component
{
    public $configs;

    public function createConfig()
    {
        $config = new AseDynamicConfig();
        $config->name = 'New Config';
        $config->description = 'A new configuration';
        $config->user_id = auth()->id();
        $config->save();
        $this->configs->push($config);
    }

    public function deleteConfig($configId)
    {
        $config = AseDynamicConfig::find($configId);
        $config->delete();
        $this->configs = $this->configs->filter(function ($c) use ($configId) {
            return $c->id !== $configId;
        });
    }

    public function render()
    {
        return view('livewire.ase.dynamic-config.dashboard');
    }
}
