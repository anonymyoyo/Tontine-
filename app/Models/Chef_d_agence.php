<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chef_d_agence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'role_id',
        // 'user_id',
        'pays',
        'image',
        'identification',
        'association_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function agence(): HasMany{
        return $this->hasMany(Agence::class);
    }

    public function associations():HasOne{
        return $this->hasOne(Association::class);
    }

    public function commerciaux():HasMany{
        return $this->hasMany(Agence::class);
    }

    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }

    public function user():HasMany{
        return $this->hasMany(User::class);
    }
}
