<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_emeteur',
        'id_recepteur',
        'montant',
    ];
}
