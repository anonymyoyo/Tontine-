<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Membre;
use App\Models\Tontine;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    //
    public function gerant(){
        return view('gerant.gerant');
    }


}
