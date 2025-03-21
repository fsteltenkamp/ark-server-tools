<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AseServer extends Model
{
    public function cluster()
    {
        return $this->belongsTo(AseCluster::class);
    }
}
