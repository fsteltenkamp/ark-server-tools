<?php

namespace App\Livewire\Server;

use Livewire\Component;
use App\Models\AseServer;

class Table extends Component
{
    public $servers = [];

    public function render()
    {
        $this->servers = auth()->user()->aseServers;
        return view('livewire.server.table');
    }

    public function createServer()
    {
        $clusters = auth()->user()->aseClusters;
        if ($clusters->isEmpty()) {
            session()->flash('error', 'You must create a cluster before you can create a server.');
            return;
        }
        $server = new AseServer();
        $server->name = 'New Server';
        $server->description = 'A new server';
        $server->user_id = auth()->id();
        $server->ase_cluster_id = $clusters->first()->id;
        $server->save();
        $this->servers->push($server);
    }

    public function deleteServer($id)
    {
        $server = AseServer::find($id);
        $server->delete();
        $this->servers = $this->servers->filter(function ($server) use ($id) {
            return $server->id != $id;
        });
    }
}
