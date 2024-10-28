<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Membre extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ville',
        'pays',
        'identification',
        'association_id',
        'role_id',
        'tontine_id',
        // 'user_id',
        'image',
        'password',
    ];

    public function user(): HasOne{
        return $this->hasOne(User::class);
    }

    public function tontines():BelongsToMany{
        return $this->belongsToMany((Tontine::class));
    }
}
