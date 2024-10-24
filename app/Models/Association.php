<?php

namespace App\Models;

use App\Models\Agence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Association extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
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

    public function membres():HasMany{
        return $this->hasMany(Membre::class);
    }

    public function chefagence():HasMany{
        return $this->hasMany(Chef_d_agence::class);
    }

    public function commercial():HasMany{
        return $this->hasMany(Commercial::class);
    }

    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }
}
