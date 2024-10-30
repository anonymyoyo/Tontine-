<?php

namespace App\Models;

use App\Models\Association;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'membre_id',
        'association_id',
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
