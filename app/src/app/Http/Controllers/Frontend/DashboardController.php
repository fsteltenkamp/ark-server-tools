<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AseServer;
use App\Models\AseCluster;
class DashboardController
{
    public function index()
    {
        $user = auth()->user();
        $ownedAseClusters = $user->aseClusters();
        $ownedAseServers = $user->aseServers();
        $ownedAseClustersCount = $ownedAseClusters->count();
        $ownedAseServersCount = $ownedAseServers->count();
        return view('frontend.dashboard', [
            'ownedAseClustersCount' => $ownedAseClustersCount,
            'ownedAseServersCount' => $ownedAseServersCount
        ]);
    }
}