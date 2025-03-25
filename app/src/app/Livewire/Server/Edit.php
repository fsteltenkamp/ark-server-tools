<?php

namespace App\Livewire\Server;

use Livewire\Component;
use Illuminate\Support\Arr;

class Edit extends Component
{
    public $server;
    public $dotServer;
    public $clusters;

    public function mount($serverId)
    {
        $this->server = auth()->user()->servers->find($serverId);
    }

    public function render()
    {
        $this->server->pluck('id', 'user_id', 'created_at', 'updated_at');
        $this->dotServer = Arr::dot($this->server->toArray());
        $this->clusters = auth()->user()->clusters;
        return view('livewire.server.edit');
    }

    public function save()
    {
        $this->server->fill(Arr::undot($this->dotServer));
        $this->server->save();
    }
}
