<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Association;
use App\Models\User;
use App\Models\Role;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\Transaction;
use App\Models\Zone;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CollectriceController extends Controller
{
    public function collectrice()
    {

        $roles = Role::all();
        $tontine = Tontine::all();
        $user = User::find(auth()->user()->id);
        $transactions = Transaction::where('collectrice_id', $user->id)->get();
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
        return view('collectrice.collectrice', compact('tontine', 'roles', 'transactions', 'membres', 'soldes', 't', 'total', 'totalcompte', 'd', 'totalversement'));
    }
}
