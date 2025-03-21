<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LiveConfigs\LiveTuningController;

Route::prefix('/frontend/liveConfigs/liveTuning')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [LiveTuningController::class, 'list'])->name('frontend.liveConfigs.liveTuning.list');
    });
});