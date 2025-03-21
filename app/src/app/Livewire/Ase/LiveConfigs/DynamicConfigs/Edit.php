<?php

namespace App\Livewire\Ase\LiveConfigs\DynamicConfigs;

use Livewire\Component;
use Illuminate\Support\Arr;

class Edit extends Component
{
    public $dotConfig;
    public $config;

    public function render()
    {
        $this->config->pluck('id', 'user_id', 'created_at', 'updated_at');
        $this->dotConfig = Arr::dot($this->config->toArray());
        return view('livewire.ase.live-configs.dynamic-configs.edit');
    }

    public function save()
    {
        $this->config->fill(Arr::undot($this->dotConfig));
        $this->config->save();
    }
}
