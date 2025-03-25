<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PublicController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('', [PublicController::class, 'index'])->name('api.welcome');
Route::post('ingest', [PublicController::class, 'ingest'])->name('api.ingest');

include __DIR__.'/api/liveConfig/dynamicConfig.php';