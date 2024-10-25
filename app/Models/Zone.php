<?php

namespace App\Models;

use App\Http\Middleware\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'agence_id',
        'commercial_id',
        'association_id',
        'image',
    ];

    public function user():HasMany{
        return $this->hasMany(User::class);
    }
}
