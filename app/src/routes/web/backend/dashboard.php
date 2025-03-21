<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/backend/dashboard')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('backend.dashboard');
        })->name('backend.dashboard');
    });
});