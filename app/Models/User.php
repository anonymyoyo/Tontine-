<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'image',
        'association_id',
        'com_agence_id',
        'com_association_id',
        'mem_agence_id',
        'mem_com_id',
        'mem_tontine_id',
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

    public function associations(): HasMany{
        return $this->hasMany(Association::class);
    }

    public function agences(): HasMany{
        return $this->hasMany(Agence::class);
    }

    public function roles(): BelongsTo{
        return $this->belongsTo(Role::class);
    }

    public function tontines(): HasMany{
        return $this->hasMany(Tontine::class);
    }

    public function solde(): BelongsTo{
        return $this->belongsTo(Solde::class);
    }
}
