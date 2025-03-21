<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\AseServer;
use App\Models\AseCluster;
use App\Models\AseLiveTuning;
use App\Models\AseDynamicConfig;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function aseClusters()
    {
        return $this->hasMany(AseCluster::class);
    }

    public function aseServers()
    {
        return $this->hasMany(AseServer::class);
    }

    public function aseDynamicConfigs()
    {
        return $this->hasMany(AseDynamicConfig::class);
    }

    public function aseLiveTunings()
    {
        return $this->hasMany(AseLiveTuning::class);
    }
}
