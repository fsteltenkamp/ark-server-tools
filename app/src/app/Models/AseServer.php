<?php

namespace App\Models;

use App\Models\User;
use App\Models\AseCluster;
use Illuminate\Database\Eloquent\Model;

class AseServer extends Model
{
    protected $fillable = [
        'name',
        'description',
        'ase_cluster_id',
    ];
    
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function cluster()
    {
        return $this->belongsTo(AseCluster::class);
    }
}
