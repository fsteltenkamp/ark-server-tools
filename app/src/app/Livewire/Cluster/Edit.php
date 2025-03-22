<?php

namespace App\Livewire\Cluster;

use Livewire\Component;
use Illuminate\Support\Arr;

class Edit extends Component
{
    public $cluster;
    public $dotCluster;

    public function render()
    {
        $this->cluster->pluck('id', 'user_id', 'created_at', 'updated_at');
        $this->dotCluster = Arr::dot($this->cluster->toArray());
        return view('livewire.cluster.edit');
    }

    public function save()
    {
        $this->cluster->fill(Arr::undot($this->dotCluster));
        $this->cluster->save();
    }
}
