<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Association;
use App\Models\User;
use App\Models\Role;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\Transaction;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class CommercialController extends Controller
{
    public function commercial()
    {

        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $transactions = Transaction::where('commercial_id', $user->id)->get();
        $soldes = Solde::all();
        $total = Transaction::sum('montant');
        $membres = User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        $versement = Transaction::where('type', 'depot')->get();
        $totalcompte = $membres->count();
        $totalversement = $versement->sum('montant');
        $utilisateur = User::where('role_id', 4)->whereBetween('created_at', [now()->subDays(1), now()])->get();
        $d = $utilisateur->count();
        // $membres=User::all();
        $t = Tontine::all();

        // $memb=User::where('id', $soldes[0]->user_id)->get();

        // $solde=Solde::where('user_id', $membres[0]->id)->get();

        // $totalsolde=$solde->sum('solde');

        // return $totalsolde;
        // return $solde;
        return view('commercial.commercial', compact('tontine', 'roles', 'transactions', 'membres', 'soldes', 't', 'total', 'totalcompte', 'd', 'totalversement'));
    }

    public function commercial_agence()
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        $agences = Agence::where('id', $user->com_agence_id)->get();
        $gerant = User::where('association_id', $user->com_association_id)->get();
        return view('commercial.agence.agences', compact('tontine', 'agences', 'roles', 'gerant'));
    }

    // public function commercial_agence_detail($id){
    //     $roles=Role::all();
    //     $agence=Agence::find($id);
    //     $tontine=Tontine::all();
    //     return view('commercial.agence.details', compact('tontine', 'agence', 'roles'));
    // }

    public function commercial_agence_zone()
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        $zones = Zone::where('agence_id', $user->com_agence_id)->get();
        $agences = Agence::where('id', $zones[0]->agence_id)->get();
        $commerciaux = User::where('role_id', 3)->where('com_agence_id', $user->com_agence_id)->get();

        // return $zones;
        return view('commercial.zone.zone', compact('tontine', 'commerciaux', 'agences', 'zones', 'roles'));
    }

    public function commercial_chef_agence()
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        $responsables = User::where('role_id', 2)->where('association_id', $user->com_association_id)->get();
        $agences = Agence::where('association_id', $responsables[0]->association_id)->get();
        $tontine = Tontine::all();
        return view('commercial.chef_agence.chef_agence', compact('responsables', 'agences', 'roles', 'tontine'));
    }

    public function commercial_commercial()
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;


        $zones = Zone::all();
        $commercial = User::where('role_id', 3)->where('com_agence_id', $user->com_agence_id)->get();
        $agences = Agence::where('id', $user->com_agence_id)->get();
        return view('commercial.commercial.commercial', compact('agences', 'roles', 'tontine', 'commercial', 'zones'));
    }

    public function commercial_agences_transaction()
    {

        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $transactions = Transaction::where('commercial_id', $user->id)->get();
        $soldes = Solde::all();
        $total = Transaction::sum('montant');
        $membres = User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        $versement = Transaction::where('type', 'depot')->get();
        $totalcompte = $membres->count();
        $totalversement = $versement->sum('montant');
        $utilisateur = User::where('role_id', 4)->whereBetween('created_at', [now()->subDays(1), now()])->get();
        $d = $utilisateur->count();

        $totalcompte = $membres->count();
        $memb = User::where('id', $soldes[0]->user_id)->get();

        $solde = Solde::where('user_id', $memb[0]->id)->get();



        $membres = User::all();
        $t = Tontine::all();
        // return $memb;
        return view('commercial.transaction.transaction', compact('tontine', 'roles', 'transactions', 'membres', 'soldes', 't', 'total', 'totalcompte', 'd', 'totalversement'));
    }

    public function commercial_agences_versement()
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        return view('commercial.versement.versement', compact('tontine', 'roles'));
    }

    public function commercial_depot_client($id)
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $membres = User::find($id);
        $t = Tontine::where('id', $membres->mem_tontine_id)->get();

        return view('commercial.transaction.depot', compact('tontine', 'roles', 'membres', 't'));
    }

    public function depot_commercial_client(Request $request, $id)
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $membres = User::find($id);
        $user = User::find(auth()->user()->id);
        $sold = Solde::where('user_id', $membres->id)->first();
        $t = Tontine::where('id', $membres->mem_tontine_id)->first();
        $solde = Solde::where('user_id', $membres->id)->first();

        $transaction = Transaction::create([
            'type' => 'depot',
            'solde_id' => $sold->id,
            'tontine_id' => $t->id,
            'commercial_id' => $user->id,
            'montant' => $request->montant,
        ]);

        $sold->update([
            'user_id' => $membres->id,
            'solde' => $solde->solde + $transaction->montant,
        ]);
        return back();
    }

    public function commercial_retrait_client($id)
    {
        $roles = Role::all();
        $tontine = Tontine::all();
        $membres = User::find($id);
        $t = Tontine::where('id', $membres->mem_tontine_id)->get();
        // return $t;
        return view('commercial.transaction.retrait', compact('tontine', 'roles', 'membres', 't'));
    }

    public function retrait_commercial_client(Request $request, $id)
    {

        $roles = Role::all();
        $tontine = Tontine::all();
        $membres = User::find($id);
        $user = User::find(auth()->user()->id);
        $sold = Solde::where('user_id', $membres->id)->first();
        $t = Tontine::where('id', $membres->mem_tontine_id)->first();
        $solde = Solde::where('user_id', $membres->id)->first();

        $transaction = Transaction::create([
            'type' => 'retrait',
            'solde_id' => $sold->id,
            'tontine_id' => $t->id,
            'commercial_id' => $user->id,
            'montant' => $request->montant,
        ]);

        $sold->update([
            'user_id' => $membres->id,
            'solde' => $solde->solde - $transaction->montant,
        ]);
        // $soldes=$sold->solde;
        // return $sold->solde;
        return back();
        // return view('commercial.transaction.retrait', compact('tontine', 'roles', 'membres', 't', 'sold'));
    }

    public function commercial_agences_membre()
    {
        $tontine = Tontine::all();
        $roles = Role::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        // $sold=Solde::where('user_id', $membres->id)->first();
        $soldes = Solde::all();




        $membres = User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        // $t=Tontine::where('id', $membres[0]->mem_tontine_id)->first();
        $t = Tontine::all();
        // $sold=Solde::sum('solde');
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->where('mem_tontine_id', $tontine[0]->id)->get();
        if (!empty($membres[0])) {
            $roles = Role::all();
            // $sold = Solde::where('user_id', $membres->id)->first();
            // return $sold;
            return view('commercial.membre.membre', compact('tontine', 'membres', 'roles', 't', 'soldes'));
        } else {
            $roles = Role::all();

            // return $membres;
            return view('commercial.membre.membre', compact('tontine', 'membres', 'roles', 'soldes'));
        }
        // return view('commercial.membre.membre', compact('tontine', 'membres', 'roles', 't'));

    }

    public function commercial_creer_membre()
    {
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        $commercial = User::where('id', $user->id)->first();
        $associations = Association::where('id', $user->com_association_id)->get();
        $agences = Agence::where('id', $user->com_agence_id)->get();
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        $t = Tontine::all();
        $roles = Role::all();

        // return $associations;
        // return $t;
        return view('commercial.membre.creer', compact('tontine', 'roles', 'associations', 'commercial', 'agences', 't'));
    }

    public function commercial_ajouter_membre(Request $request)
    {
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $association = $user->associations;
        $agence = $user->agences;
        $commercial = User::where('id', $user->id)->get();
        $associations = Association::where('id', $user->com_association_id)->get();
        $agences = Agence::where('id', $user->com_agence_id)->get();
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->where('mem_com_id', $user->mem_com_id)->get();
        // *!}W[8th4b
        $t = Tontine::all();
        $roles = Role::all();
        $image = $request->file('image');
        $path = $image->store('images', 'public');
        $membres = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'mem_tontine_id' => $request->mem_tontine_id,
            'association_id' => $associations[0]->id,
            'mem_com_id' => $user->id,
            'mem_agence_id' => $agences[0]->id,
            'image' => $path,
            'role_id' => '4',
            'password' => Hash::make($request->password),
        ]);

        if ($membres) {
            # code...
            Solde::create([
                'user_id' => $membres->id,
                'solde' => 1000,
            ]);
        }

        return view('commercial.membre.creer', compact('tontine', 'roles', 'associations', 'commercial', 'agences', 't'));
    }



    // return view('commercial.membre.membre', compact('tontine', 'membres', 'roles'));


    public function commercial_agences_tontine($id)
    {
        $roles = Role::all();
        $tontine = Tontine::find($id);
        return view('commercial.tontine.tontine', compact('tontine', 'roles'));
    }
}
