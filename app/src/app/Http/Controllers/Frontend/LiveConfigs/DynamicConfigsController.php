<?php

namespace App\Http\Controllers\Frontend\LiveConfigs;

use App\Http\Controllers\Controller;
class DynamicConfigsController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $configs = $user->aseDynamicConfigs;
        return view('frontend.liveConfigs.dynamicConfigs.list', [
            'configs' => $configs,
        ]);
    }
}