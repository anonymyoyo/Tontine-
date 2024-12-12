<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $tontine = Tontine::all();
        // $membre = Solde::all();

        // return $membre;
        return view('users.home', compact('tontine'));
    }

    public function about()
    {
        return view('users.about');
    }

    public function association()
    {
        return view('users.association');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function service()
    {
        return view('users.service');
    }

    public function blog()
    {
        return view('users.blog');
    }

    public function tontines()
    {
        $tontine = Tontine::all();
        return view('users.tontine', compact('tontine'));
    }

    public function catalogue()
    {
        // $membre = User::where('role_id', 4)->get();
        $tontine = Tontine::all();
        // return $membre;
        return view('users.catalogue');
    }
}
