<?php

namespace App\Http\Controllers\Frontend\Cluster;

use App\Http\Controllers\Controller;

class ClusterController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $ownedAseClusters = $user->aseClusters();
        $ownedAseClustersCount = $ownedAseClusters->count();
        return view('frontend.cluster.list', [
            'ownedAseClusters' => $ownedAseClusters,
            'ownedAseClustersCount' => $ownedAseClustersCount,
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $cluster = $user->aseClusters()->where('id', $id)->first();
        return view('frontend.cluster.edit', [
            'cluster' => $cluster,
        ]);
    }
}