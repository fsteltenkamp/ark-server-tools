<?php

namespace App\Livewire\Cluster;

use Livewire\Component;
use App\Models\AseCluster;

class Table extends Component
{
    public $clusters;

    public function boot()
    {
        $this->clusters = auth()->user()->aseClusters;
    }

    public function render()
    {
        return view('livewire.cluster.table');
    }

    public function createCluster()
    {
        $cluster = new AseCluster();
        $cluster->name = 'New Cluster';
        $cluster->description = 'A new cluster';
        $cluster->user_id = auth()->id();
        $cluster->save();
        $this->clusters->push($cluster);
    }
}
