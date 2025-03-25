<?php

namespace App\Models;

use App\Models\User;
use App\Models\Cluster;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cluster_id',
    ];
    
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function cluster()
    {
        return $this->belongsTo(Cluster::class);
    }
}
