<?php

namespace App\Http\Controllers\Frontend\Server;

use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function list($clusterId = null)
    {
        $user = auth()->user();
        return view('frontend.server.list', [
            'clusterId' => $clusterId,
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();
        return view('frontend.server.edit', [
            'serverId' => $id,
        ]);
    }
}