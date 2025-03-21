<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

include __DIR__.'/web/auth.php';
include __DIR__.'/web/backend/dashboard.php';
include __DIR__.'/web/backend/config.php';
include __DIR__.'/web/backend/user.php';
include __DIR__.'/web/frontend/dashboard.php';
include __DIR__.'/web/frontend/profile.php';
include __DIR__.'/web/frontend/clusterManagement.php';
include __DIR__.'/web/frontend/liveConfigs/dynamicConfigs.php';
include __DIR__.'/web/frontend/liveConfigs/liveTuning.php';