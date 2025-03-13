<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'App' => config('app.name'),
        'Version' => config('app.version'),
    ]);
})->name('api.welcome');