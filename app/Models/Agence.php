<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'chef_d_agence_id',
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
}
