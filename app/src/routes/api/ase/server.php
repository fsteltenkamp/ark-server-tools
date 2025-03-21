<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Ase\Server\WebNotificationController;

Route::prefix('/ase/server')->group(function () {
    Route::post('{serverId}/webNotification', [WebNotificationController::class, 'ingest'])->name('api.ase.server.webNotification');
});