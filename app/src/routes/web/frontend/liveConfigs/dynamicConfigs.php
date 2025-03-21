<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LiveConfigs\DynamicConfigsController;

Route::prefix('/frontend/liveConfigs/dynamicConfigs')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [DynamicConfigsController::class, 'list'])->name('frontend.liveConfigs.dynamicConfigs.list');
        Route::get('/{id}/edit', [DynamicConfigsController::class, 'edit'])->name('frontend.liveConfigs.dynamicConfigs.edit');
    });
});