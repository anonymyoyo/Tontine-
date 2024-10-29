<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'pays',
        'identification',
        'image',
        'role_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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

    public function membre(): HasOne{
        return $this->hasOne(Membre::class);
    }

    public function associations(): HasMany{
        return $this->hasMany(Association::class);
    }

    public function agences(): HasMany{
        return $this->hasMany(Agence::class);
    }

    public function gerants(): HasOne{
        return $this->hasOne(Gerant::class);
    }
    public function commerciaux(): HasOne{
        return $this->hasOne(Commercial::class);
    }
    public function chefdagence(): HasOne{
        return $this->hasOne(Chef_d_agence::class);
    }
}
