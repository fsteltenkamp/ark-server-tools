<?php

namespace App\Http\Controllers\Frontend\Server;

use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $ownedServers = $user->servers();
        return view('frontend.server.list', [
            'ownedServers' => $ownedServers,
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $server = $user->servers()->where('id', $id)->first();
        return view('frontend.server.edit', [
            'server' => $server,
        ]);
    }
}