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
        'pays',
        'image',
    ];


    public function associations(): HasOne{
        return $this->hasOne(Association::class);
    }

    public function user():HasOne{
        return $this->hasOne(User::class);
    }

    public function zones():HasMany{
        return $this->hasMany(Zone::class);
    }
}
