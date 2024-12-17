<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;


use App\Models\Membre;
use App\Models\Pret;
use App\Models\Role;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\TontineChoisie;
use App\Models\Transaction;
use App\Models\Transfert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

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
        // $transaction = Transaction::where('solde_id', $solde[0]->id)->get();
        // return $solde;
        return view('users.user.user', compact('tontine',  'membre', 'tontin', 'solde', 'client'));

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

    // public function admin_depot_client($id)
    // {
    //     $roles = Role::all();
    //     $tontine = Tontine::all();
    //     $membres = User::find($id);
    //     $t = Tontine::where('id', $membres->mem_tontine_id)->get();

    //     return view('admin.admin.transactions.depot', compact('tontine', 'roles', 'membres', 't'));
    // }

    // public function depot_admin_client(Request $request, $id)
    // {
    //     $roles = Role::all();
    //     $tontine = Tontine::all();
    //     $membres = User::find($id);
    //     $user = User::find(auth()->user()->id);
    //     $sold = Solde::where('user_id', $membres->id)->first();
    //     $t = Tontine::where('id', $membres->mem_tontine_id)->first();
    //     $solde = Solde::where('user_id', $membres->id)->first();

    //     $transaction = Transaction::create([
    //         'type' => 'depot',
    //         'solde_id' => $sold->id,
    //         'tontine_id' => $t->id,
    //         'commercial_id' => $user->id,
    //         'montant' => $request->montant,
    //     ]);

    //     $sold->update([
    //         'user_id' => $membres->id,
    //         'solde' => $solde->solde + $transaction->montant,
    //     ]);
    //     return back();
    // }

    // public function admin_retrait_client($id)
    // {
    //     $roles = Role::all();
    //     $tontine = Tontine::all();
    //     $membres = User::find($id);
    //     $t = Tontine::where('id', $membres->mem_tontine_id)->get();
    //     // return $t;
    //     return view('admin.admin.transactions.retrait', compact('tontine', 'roles', 'membres', 't'));
    // }

    // public function retrait_admin_client(Request $request, $id)
    // {

    //     $roles = Role::all();
    //     $tontine = Tontine::all();
    //     $membres = User::find($id);
    //     $user = User::find(auth()->user()->id);
    //     $sold = Solde::where('user_id', $membres->id)->first();
    //     $t = Tontine::where('id', $membres->mem_tontine_id)->first();
    //     $solde = Solde::where('user_id', $membres->id)->first();

    //     $transaction = Transaction::create([
    //         'type' => 'retrait',
    //         'solde_id' => $sold->id,
    //         'tontine_id' => $t->id,
    //         'commercial_id' => $user->id,
    //         'montant' => $request->montant,
    //     ]);

    //     $sold->update([
    //         'user_id' => $membres->id,
    //         'solde' => $solde->solde - $transaction->montant,
    //     ]);
    //     // $soldes=$sold->solde;
    //     // return $sold->solde;
    //     return back();
    //     // return view('commercial.transaction.retrait', compact('tontine', 'roles', 'membres', 't', 'sold'));
    // }

    public function depot()
    {
        $tontine = Tontine::where('id', auth()->user()->mem_tontine_id)->get();
        // $membre = User::find(auth()->user()->id);
        // $t = Tontine::where('id', $membre->mem_tontine_id)->get();
        // return $tontine

        return view('users.user.depot',  compact('tontine'));
    }

    public function depot_user(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $sold = Solde::where('user_id', $user->id)->first();
        $t = Tontine::where('id', $user->mem_tontine_id)->first();
        $solde = Solde::where('user_id', $user->id)->first();

        $transaction = Transaction::create([
            'type' => 'depot',
            'solde_id' => $sold->id,
            'tontine_id' => $t->id,
            'commercial_id' => $user->id,
            'montant' => $request->montant,
        ]);

        $sold->update([
            'user_id' => $user->id,
            'solde' => $solde->solde + $transaction->montant,
        ]);
        return back();
    }

    public function retrait()
    {
        $tontine = Tontine::where('id', auth()->user()->mem_tontine_id)->get();

        return view('users.user.retrait', compact('tontine'));
    }

    public function retrait_user(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $sold = Solde::where('user_id', $user->id)->first();
        $t = Tontine::where('id', $user->mem_tontine_id)->first();
        $solde = Solde::where('user_id', $user->id)->first();
        $error = 'Mot de passe incorrect ... <a href="{{route(\'user.retrait\')}}">Essayer a nouveau</a>';
        $password = Hash::make($request->input('password'));
        // if ($user->password === $password) {
        # code...
        $transaction = Transaction::create([
            'type' => 'depot',
            'solde_id' => $sold->id,
            'tontine_id' => $t->id,
            'commercial_id' => $user->id,
            'montant' => $request->montant,
        ]);

        $sold->update([
            'user_id' => $user->id,
            'solde' => $solde->solde - $transaction->montant,
        ]);

        // return $user->password;
        // return back();
        // } else {
        //     // return $user->password;
        //     return view('users.user.error');
        // }


        return back();
    }

    public function transfert()
    {
        $user = User::find(auth()->user()->id);
        $membre = User::where('role_id', 4)->where('association_id', auth()->user()->association_id)->get();
        // $solde = Solde::where('user_id', $user->id)->first(); #represente le solde initial de l'emetteur avant la transaction
        // $sold = Solde::where('user_id', $user->id)->first(); #solde de l'emetteur apres la transaction
        // $solde_membre = Solde::where('user_id', $membre[0]->id)->get(); #solde du recepteur apres la transaction


        // return $user;
        // return $membre;
        // return $solde;
        // return $sold;
        // return $solde_membre;

        return view('users.user.transfert', compact('membre', 'user'));
    }

    public function transfert_user(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $membre = User::where('role_id', 4)->where('association_id', auth()->user()->association_id)->get();
        // $solde = Solde::where('user_id', $user->id)->first(); #represente le solde initial de l'emetteur avant la transaction
        $sold = Solde::where('user_id', $user->id)->first(); #solde de l'emetteur apres la transaction
        // $solde_membre = Solde::where('user_id', $membre[0]->id)->get(); #solde du recepteur apres la transaction

        // $transaction = Transaction::create([
        //     'type' => 'transfert',
        //     'solde_id' => $sold->id,
        //     'tontine_id' => $t->id,
        //     'commercial_id' => $user->id,
        //     'montant' => $request->montant,
        // ]);

        $transfert = Transfert::create([
            'id_emeteur' => $user->id,
            'id_recepteur' => $request->membre,
            'montant' => $request->montant,
        ]);

        $sold->update([
            'user_id' => $user->id,
            'solde' => $sold->solde - $transfert->montant,
        ]);

        $recepteur = $request->Input('membre');
        $a = User::where('id', $recepteur)->first();
        $solde_membre = Solde::where('user_id', $a->id)->first();

        $solde_membre->update([
            'user_id' => $a->id,
            'solde' => $solde_membre->solde + $transfert->montant,
        ]);
        // return $solde_membre;
        return back();
    }

    public function pret()
    {
        return view('users.user.pret');
    }

    public function pret_user(Request $request)
    {
        $user = User::find(auth()->user()->id);

        Pret::create([
            'objet' => $request->objet,
            'montant' => $request->montant,
            'demandeur' => $user->id,
            'agence_mere' => $user->mem_agence_id,
        ]);

        return view('users.user.succes');
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
