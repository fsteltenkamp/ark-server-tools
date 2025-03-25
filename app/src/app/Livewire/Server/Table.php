<?php

namespace App\Livewire\Server;

use Livewire\Component;
use App\Models\Server;

class Table extends Component
{
    public $servers = [];
    public $clusterId;

    public function mount($clusterId = null)
    {
        $this->clusterId = $clusterId;
    }

    public function render()
    {
        if (!is_null($this->clusterId)) {
            $this->servers = auth()->user()->servers->where('cluster_id', $this->clusterId);
        } else {
            $this->servers = auth()->user()->servers;
        }
        
        return view('livewire.server.table');
    }

    public function createServer()
    {
        $clusters = auth()->user()->clusters;
        if ($clusters->isEmpty()) {
            session()->flash('error', 'You must create a cluster before you can create a server.');
            return;
        }
        $server = new Server();
        $server->name = 'New Server';
        $server->description = 'A new server';
        $server->user_id = auth()->id();
        $server->cluster_id = $clusters->first()->id;
        $server->save();
        $this->servers->push($server);
    }

    public function deleteServer($id)
    {
        $server = Server::find($id);
        $server->delete();
        $this->servers = $this->servers->filter(function ($server) use ($id) {
            return $server->id != $id;
        });
    }
}
