<?php

namespace App\Http\Controllers\Api\Ase\LiveConfig;

use App\Models\AseDynamicConfig;
use App\Http\Controllers\Controller;

class DynamicConfigController extends Controller
{
    public function getIni($id)
    {
        $config = AseDynamicConfig::find($id);
        $ini = $config->generateIni();

        return response($ini, 200)
            ->header('Content-Type', 'text/ini');
    }
}