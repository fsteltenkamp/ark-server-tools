<?php

namespace App\Http\Controllers\Frontend\ClusterManagement;

use App\Http\Controllers\Controller;

class ClusterController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $ownedAseClusters = $user->aseClusters();
        $ownedAseClustersCount = $ownedAseClusters->count();
        return view('frontend.clusterManagement.dashboard', [
            'ownedAseClusters' => $ownedAseClusters,
            'ownedAseClustersCount' => $ownedAseClustersCount,
        ]);
    }
}