<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AseCluster extends Model
{
    public function servers()
    {
        return $this->hasMany(AseServer::class);
    }
}
