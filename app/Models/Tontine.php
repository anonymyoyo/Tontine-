<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tontine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'montant_total',
        'reglement',
        'nbre_membre',
        'prix',
        'image',
    ];
// public function getLienInvitationAttribute(){
//     return route('invite',[$this->id, str_random(40)]);
// }

public function user():HasMany{
    return $this->hasMany(User::class);
}

}



