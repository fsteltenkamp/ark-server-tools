<?php

namespace App\Livewire\Cluster;

use Livewire\Component;
use App\Models\Cluster;

class Table extends Component
{
    public $clusters = [];

    public function render()
    {
        $this->clusters = auth()->user()->clusters;
        return view('livewire.cluster.table');
    }

    public function createCluster()
    {
        $cluster = new Cluster();
        $cluster->name = 'New Cluster';
        $cluster->description = 'A new cluster';
        $cluster->user_id = auth()->id();
        $cluster->save();
        $this->clusters->push($cluster);
    }

    public function deleteCluster($id)
    {
        $cluster = Cluster::find($id);
        $cluster->delete();
        $this->clusters = $this->clusters->filter(function ($cluster) use ($id) {
            return $cluster->id != $id;
        });
    }
}
