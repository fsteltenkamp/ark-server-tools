<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.dashboard');
    })->name('web.frontend.dashboard');
});