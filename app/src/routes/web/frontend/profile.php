<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProfileController;

Route::prefix('/frontend/profile')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('frontend.profile');
    });
});