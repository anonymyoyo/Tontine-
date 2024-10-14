<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'tontine_id',
        'user_id',
        'type',
        'montant',
        'description',
        'association_id',
    ];
}
