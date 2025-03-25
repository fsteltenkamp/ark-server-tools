<?php

namespace App\Http\Controllers\Frontend\Cluster;

use App\Http\Controllers\Controller;

class ClusterController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $ownedClusters = $user->clusters();
        $ownedClustersCount = $ownedClusters->count();
        return view('frontend.cluster.list', [
            'ownedClusters' => $ownedClusters,
            'ownedClustersCount' => $ownedClustersCount,
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $cluster = $user->clusters()->where('id', $id)->first();
        return view('frontend.cluster.edit', [
            'cluster' => $cluster,
        ]);
    }
}