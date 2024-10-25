<?php

namespace App\Models;

use App\Models\Agence;
use App\Models\Association;
use App\Models\Membre;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Commercial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'pays',
        'identification',
        'role_id',
        'image',
        'agence_id',
        'association_id',
        'password',
    ];

    public function agences():HasOne{
        return $this->hasOne(Agence::class);
    }

    public function associations():HasOne{
        return $this->hasOne(Association::class);
    }

    public function user():HasMany{
        return $this->hasMany(User::class);
    }

    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }
}
