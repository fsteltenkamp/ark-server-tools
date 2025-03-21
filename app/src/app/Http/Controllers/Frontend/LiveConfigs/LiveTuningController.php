<?php

namespace App\Http\Controllers\Frontend\LiveConfigs;

use App\Http\Controllers\Controller;

class LiveTuningController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $configs = $user->aseLiveTunings;
        return view('frontend.liveConfigs.liveTuning.list', [
            'configs' => $configs,
        ]);
    }
}