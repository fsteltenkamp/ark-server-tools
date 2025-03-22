<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Cluster\ClusterController;

Route::prefix('/frontend/cluster')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [ClusterController::class, 'list'])->name('frontend.cluster.list');
        Route::get('/{id}/edit', [ClusterController::class, 'edit'])->name('frontend.cluster.edit');
    });
});