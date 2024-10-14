<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tontine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'montant_total',
        'reglement',
        'association_id',
        'nbre_membre',
        'prix',
        'image',
    ];
// public function getLienInvitationAttribute(){
//     return route('invite',[$this->id, str_random(40)]);
// }



}



