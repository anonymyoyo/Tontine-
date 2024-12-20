<?php

namespace App\Models;

use App\Models\Solde;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'solde_id',
        'agence_id',
        'association',
        'tontine_id',
        'commercial_id',
        'montant',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function solde(): BelongsTo
    {
        return $this->belongsTo(Solde::class);
    }
}
