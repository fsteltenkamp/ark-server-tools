<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Ase\LiveConfig\DynamicConfigController;

Route::prefix('/ase/liveConfig/dynamicConfig')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        //
    });
    Route::get('/{id}/ini', [DynamicConfigController::class, 'getIni'])->name('api.ase.liveConfig.dynamicConfig.getIni');
});