<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ClusterManagement\ClusterController;

Route::prefix('/frontend/clusterManagement')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [ClusterController::class, 'dashboard'])->name('frontend.clusterManagement.dashboard');
    });
});