<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solde extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        // 'transaction_id',
        'solde',
    ];

    public function user():HasMany{
        return $this->hasMany(User::class);
    }
    public function transactions():HasMany{
        return $this->hasMany(Transaction::class);
    }
}
