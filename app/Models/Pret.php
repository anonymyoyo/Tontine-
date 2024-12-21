<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;
    protected $fillable = [
        'objet',
        'montant',
        'user_id',
        'agence_mere',
        'association_mere',
        'etat',
    ];
}
