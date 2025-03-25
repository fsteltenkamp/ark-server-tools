<?php

namespace App\Models;

use App\Models\User;
use App\Models\Server;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function servers()
    {
        return $this->hasMany(Server::class);
    }
}
