<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Models\Gerant;
use App\Models\Membre;
use App\Models\Tontine;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function user(Request $request){
        // $membre=Membre::where('user_id', auth()->user()->id)->get();

        $tontine=Tontine::all();

        $tontin=Membre::where('tontine_id', auth()->user()->id);
        // $CountMembre=Membre::where('tontine_id', $tontine->$request->id)->get()->Count();
        $membre=Membre::all();
        $membres=Membre::count('tontine_id');
//         $user=Auth::user();
//         if(!$user){
//             redirect()->back()->with('error', 'Vous devez etre connecter pour rejoindre la tontine');
//         }
// $tontine=Tontine::where('user_id', auth()->user()->id)->get();
//         // verifier si il est deja membre de la tontine
//         // $token=$request->id;
//         $membre=Membre::where('tontine_id',$tontine=$request->input('id'))
//                                 ->where('user_id',$user->id)
//                                 ->first();

        // $tontines=Tontine::all();
        // $lien=route('invite',[$id, Str::random(40)]);, 'CountMembre'
        // $token=$lien;'id', 'token',
        // $tontines=Tontine::find($id);
        return view('users.user.user', compact('tontine',  'membre', 'tontin', 'membres'));

        // return $membre.$tontine;
    }


    public function contacts(){
        return view('users.contact');
    }

    public function association_index($id){
        $tontine=Tontine::find($id);
        $lien_invitation=route('tontine', [$id, Str::uuid()]);

        return view('users.association.tontine', compact('id', 'tontine', 'lien_invitation'));
    }

    public function depot(){
        return view('users.user.depot');
    }

    public function tontines(){
        $membres=Membre::all();
        $tontine=Tontine::all();
        return view('users.tontine', compact('membres','tontine'));
    }

    public function integrer_tontine(Request $request){
        // $tontine=Tontine::all();
        $tontineId=$request->input('tontine_id');
        $membre_id=$request->input('id');
        $membres=Membre::find($membre_id);
        $membres->update([
            'tontine_id'=>$tontineId,
        ]);

        return view('users.tontine', compact('membres'));
    }

}
