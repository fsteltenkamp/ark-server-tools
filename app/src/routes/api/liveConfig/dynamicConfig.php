<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LiveConfig\DynamicConfigController;

Route::prefix('/liveConfig/dynamicConfig')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        //
    });
    Route::get('/{id}/ini', [DynamicConfigController::class, 'getIni'])->name('api.liveConfig.dynamicConfig.getIni');
});