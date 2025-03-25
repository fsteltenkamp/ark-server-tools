<?php

namespace App\Http\Controllers\Frontend\Server;

use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $ownedAseServers = $user->aseServers();
        return view('frontend.server.list', [
            'ownedAseServers' => $ownedAseServers,
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $server = $user->aseServers()->where('id', $id)->first();
        return view('frontend.server.edit', [
            'server' => $server,
        ]);
    }
}