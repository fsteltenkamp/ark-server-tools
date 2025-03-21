<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('web.auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('web.auth.register');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('web.auth.forgot-password');
Route::post('logout', [AuthController::class, 'logout'])->name('web.auth.logout');