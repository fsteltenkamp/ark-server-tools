<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Server\ServerController;

Route::prefix('/frontend/server')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/{clusterId?}', [ServerController::class, 'list'])->name('frontend.server.list');
        Route::get('/{id}/edit', [ServerController::class, 'edit'])->name('frontend.server.edit');
    });
});