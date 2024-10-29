<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Historique extends Model
{
    use HasFactory;
    protected $fillable = [
        'contribution_id',
        'user_id',
        'date_action',
        'description',
    ];

    public function user():HasMany{
        return $this->hasMany(User::class);
    }
}
