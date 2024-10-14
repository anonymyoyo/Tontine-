<?php

namespace App\Http\Controllers;

use App\Models\Tontine;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('users.home');
    }

    public function about(){
        return view('users.about');
    }

    public function association(){
        return view('users.association');
    }

    public function contact(){
        return view('users.contact');
    }

    public function service(){
        return view('users.service');
    }

    public function blog(){
        return view('users.blog');
    }

    public function tontines(){
        $tontine=Tontine::all();
        return view('users.tontine', compact('tontine'));
    }
}
