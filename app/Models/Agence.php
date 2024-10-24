<?php

namespace App\Models;

use App\Models\Association;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'user_id',
        'association_id',
        'pays',
        'budget',
        'image',
        'identification',
    ];

    public function chefagence(): HasOne{
        return $this->hasOne(Chef_d_agence::class);
    }

    public function association(): HasOne{
        return $this->hasOne(Association::class);
    }

    public function commercial():HasMany{
        return $this->hasMany(Commercial::class);
    }

    public function membre():HasMany{
        return $this->hasMany(Membre::class);
    }

    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }
}
