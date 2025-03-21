<?php

namespace App\Livewire\Ase\LiveConfigs\LiveTuning;

use Livewire\Component;
use App\Models\AseLiveTuning;

class Dashboard extends Component
{
    public $configs;

    public function createConfig()
    {
        $config = new AseLiveTuning();
        $config->name = 'New Config';
        $config->description = 'New Description';
        $config->user_id = auth()->id();
        $config->save();
        $this->configs->push($config);
    }

    public function deleteConfig($configId)
    {
        $config = AseLiveTuning::find($configId);
        $config->delete();
        $this->configs = $this->configs->filter(function ($c) use ($configId) {
            return $c->id !== $configId;
        });
    }

    public function render()
    {
        return view('livewire.ase.live-configs.live-tuning.dashboard');
    }
}
