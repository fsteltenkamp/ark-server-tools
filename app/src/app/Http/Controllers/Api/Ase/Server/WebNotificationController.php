<?php

namespace App\Http\Controllers\Api\Ase\Server;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class WebNotificationController extends Controller
{
    public function ingest()
    {
        $fields = request()->all();
        Log::debug('WebNotificationController@ingest', [$fields]);
    }
}