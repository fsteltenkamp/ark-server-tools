<?php

namespace App\Http\Controllers\Api\LiveConfig;

use App\Models\DynamicConfig;
use App\Http\Controllers\Controller;

class DynamicConfigController extends Controller
{
    public function getIni($id)
    {
        $config = DynamicConfig::find($id);
        $ini = $config->generateIni();

        return response($ini, 200)
            ->header('Content-Type', 'text/ini');
    }
}