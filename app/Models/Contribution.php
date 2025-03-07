<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contribution extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'mode_paiement',
        'transaction_id',
    ];

    public function user():HasMany{
        return $this->hasMany(User::class);
    }
}
