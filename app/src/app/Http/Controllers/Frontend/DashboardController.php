<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AseServer;
use App\Models\AseCluster;
class DashboardController
{
    public function index()
    {
        $ownedAseClusters = AseCluster::where('owner_id', auth()->id())->get();
        $ownedAseServers = AseServer::where('owner_id', auth()->id())->get();
        return view('frontend.dashboard', [
            'ownedAseClusters' => $ownedAseClusters,
            'ownedAseServers' => $ownedAseServers
        ]);
    }
}