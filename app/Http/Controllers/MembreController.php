<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    //
    public function membre(){
        return view('membre.membre');
    }
}
