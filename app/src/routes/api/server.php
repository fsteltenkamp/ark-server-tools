<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Server\WebNotificationController;

Route::prefix('/server')->group(function () {
    Route::post('{serverId}/webNotification', [WebNotificationController::class, 'ingest'])->name('api.server.webNotification');
});