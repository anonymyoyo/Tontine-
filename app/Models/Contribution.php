<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'mode_paiement',
        'etat_id',
        'tontine_id',
        'association_id',
        'membre_id',
    ];
}
