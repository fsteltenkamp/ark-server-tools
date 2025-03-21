<?php

namespace App\Models;

use App\Models\User;
use App\Models\AseServer;
use Illuminate\Database\Eloquent\Model;

class AseCluster extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function servers()
    {
        return $this->hasMany(AseServer::class);
    }
}
