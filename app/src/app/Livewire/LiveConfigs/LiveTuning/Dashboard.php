<?php

namespace App\Livewire\LiveConfigs\LiveTuning;

use Livewire\Component;
use App\Models\LiveTuning;

class Dashboard extends Component
{
    public $configs;

    public function createConfig()
    {
        $config = new LiveTuning();
        $config->name = 'New Config';
        $config->description = 'New Description';
        $config->user_id = auth()->id();
        $config->save();
        $this->configs->push($config);
    }

    public function deleteConfig($configId)
    {
        $config = LiveTuning::find($configId);
        $config->delete();
        $this->configs = $this->configs->filter(function ($c) use ($configId) {
            return $c->id !== $configId;
        });
    }

    public function render()
    {
        return view('livewire.live-configs.live-tuning.dashboard');
    }
}
