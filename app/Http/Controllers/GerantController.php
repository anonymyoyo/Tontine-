<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Tontine;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    //
    public function gerant(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('gerant.gerant', compact('roles', 'tontine'));
    }


}
