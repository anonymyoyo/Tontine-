<?php

namespace App\Models;

use App\Models\Agence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Association extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'description',
        'reglement',
        'ville',
        'pays',
        'user_id',
        'image',
    ];

    public function agences():HasMany{
        return $this->hasMany(Agence::class);
    }

    public function user():HasOne{
        return $this->hasOne(User::class);
    }
    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }
}
