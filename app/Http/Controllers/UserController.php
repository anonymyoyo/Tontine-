<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;


use App\Models\Solde;
use App\Models\Tontine;
use App\Models\TontineChoisie;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function user(Request $request)
    {
        // $membre=Membre::where('user_id', auth()->user()->id)->get();

        $tontine = Tontine::all();
        // $t=Tontine::where('id', $membres[0]->mem_tontine_id)->get();

        $tontin = Tontine::where('id', auth()->user()->mem_tontine_id)->get();
        $user = User::find(auth()->user()->id);
        // $CountMembre=Membre::where('tontine_id', $tontine->$request->id)->get()->Count();
        $membre = User::where('role_id', 4)->where('id', $user->id)->get();
        $client = User::where('role_id', 4)->where('association_id', $user->association_id)->get();
        // $membres=Membre::count('tontine_id');

        $solde = Solde::where('user_id', $user->id)->get();
        $transaction = Transaction::where('solde_id', $solde[0]->id)->get();
        // return $solde;
        return view('users.user.user', compact('tontine',  'membre', 'tontin', 'transaction', 'solde', 'client'));

        // return $membre.$tontine;
    }


    public function contacts()
    {
        return view('users.contact');
    }

    public function association_index($id)
    {
        $tontine = Tontine::find($id);
        $lien_invitation = route('tontine', [$id, Str::uuid()]);

        return view('users.association.tontine', compact('id', 'tontine', 'lien_invitation'));
    }

    public function depot()
    {
        $tontine = Tontine::where('id', auth()->user()->mem_tontine_id)->get();


        return view('users.user.depot',  compact('tontine'));
    }

    public function retrait()
    {
        $tontine = Tontine::where('id', auth()->user()->mem_tontine_id)->get();

        return view('users.user.retrait', compact('tontine'));
    }

    public function transfert()
    {
        $membre = User::where('role_id', 4)->where('association_id', auth()->user()->association_id)->get();

        return view('users.user.transfert', compact('membre'));
    }

    public function pret()
    {
        return view('users.user.pret');
    }

    public function tontines()
    {
        $tontin = User::where('mem_tontine_id', auth()->user()->id);
        $user = User::find(auth()->user()->id);
        $membres = User::where('role_id', 4)->where('id', $user->id)->get();
        $tontine = Tontine::all();
        return view('users.tontine', compact('membres', 'tontine'));
    }

    public function integrer_tontine(Request $request, $id)
    {
        // $tontine=Tontine::all();
        // $tontineId=$request->input('tontine_id');
        // $membre_id=$request->input('id');
        $tontine = Tontine::find($id);
        $user = User::find(auth()->user()->id);
        $membres = User::where('role_id', 4)->where('id', $user->id)->get();
        TontineChoisie::create([
            'user_id' => $membres[0]->id,
            'tontine_id' => $tontine->id,
        ]);

        return view('users.user.user', compact('membres', 'tontine'));
    }
}
