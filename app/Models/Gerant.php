<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'image',
        'password',
    ];

    

}
