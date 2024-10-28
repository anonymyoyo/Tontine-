<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gerant extends Model
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
        'user_id',
        'image',
        'password',
    ];

    public function user():HasMany{
        return $this->hasMany(User::class);
    }

}
