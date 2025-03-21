<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index()
    {
        return response()->json([
            'App' => config('app.name'),
            'Version' => config('app.version'),
        ]);
    }

    public function ingest()
    {
        Log::debug('Ingesting data...');
        Log::debug(request()->all());
        return response()->json([
            'success' => true,
        ]);
    }
}