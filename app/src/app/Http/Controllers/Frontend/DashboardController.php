<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Server;
use App\Models\Cluster;
class DashboardController
{
    public function index()
    {
        $user = auth()->user();
        $ownedClusters = $user->clusters();
        $ownedServers = $user->servers();
        $ownedClustersCount = $ownedClusters->count();
        $ownedServersCount = $ownedServers->count();
        return view('frontend.dashboard', [
            'ownedClustersCount' => $ownedClustersCount,
            'ownedServersCount' => $ownedServersCount
        ]);
    }
}