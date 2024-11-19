<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Association;
use App\Models\User;
use App\Models\Commercial;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\Transaction;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommercialController extends Controller
{
    //

    //
    public function commercial(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('commercial.commercial', compact('tontine', 'roles'));
    }

    public function commercial_agence(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $agences=Agence::where('id', $user->com_agence_id)->get();
        $gerant=User::where('association_id', $user->com_association_id)->get();
        return view('commercial.agence.agences', compact('tontine', 'agences', 'roles', 'gerant'));
    }

    // public function commercial_agence_detail($id){
    //     $roles=Role::all();
    //     $agence=Agence::find($id);
    //     $tontine=Tontine::all();
    //     return view('commercial.agence.details', compact('tontine', 'agence', 'roles'));
    // }

    public function commercial_agence_zone(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $zones=Zone::where('agence_id', $user->com_agence_id)->get();
        $agences=Agence::where('id', $zones[0]->agence_id)->get();
        $commerciaux=User::where('role_id', 3)->where('com_agence_id', $user->com_agence_id)->get();

        // return $zones;
        return view('commercial.zone.zone', compact('tontine', 'commerciaux', 'agences', 'zones', 'roles'));
    }

    public function commercial_chef_agence(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $responsables=User::where('role_id', 2)->where('association_id', $user->com_association_id)->get();
        $agences=Agence::where('association_id', $responsables[0]->association_id)->get();
        $tontine=Tontine::all();
        return view('commercial.chef_agence.chef_agence', compact('responsables','agences','roles', 'tontine'));
    }

    public function commercial_commercial(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;


        $zones=Zone::all();
        $commercial=User::where('role_id', 3)->where('com_agence_id', $user->com_agence_id)->get();
        $agences=Agence::where('id', $user->com_agence_id)->get();
        return view('commercial.commercial.commercial', compact('agences','roles', 'tontine', 'commercial', 'zones'));
    }

    public function commercial_agences_transaction(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('commercial.transaction.transaction', compact('tontine', 'roles'));
    }

    public function commercial_agences_versement(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('commercial.versement.versement', compact('tontine', 'roles'));
    }

    public function commercial_depot_client($id){
        $roles=Role::all();
        $tontine=Tontine::all();

        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        // ->where('mem_tontine_id', $tontine[0]->id)
        $t=Tontine::where('id', !is_array($membres[0]->mem_tontine_id))->get();
        return view('commercial.transaction.depot', compact('roles', 'tontine', 't', 'membres'));
    }

    public function depot_commercial_client(Request $request, $id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        // $soldes=Solde::all();
        $t=Tontine::all();
        $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        // ->where('mem_tontine_id', $t[0]->id)gffff
        $soldes=Solde::where('user_id', $membres[0]->id)->get();
        $solde=Solde::where('id', $id)->first();
        $montant=$request->montant;

        // $transaction= new Transaction();
        // $transaction->solde_id = $soldes[0]->solde; #!is_array($soldes[0]->id);
        // $transaction->type ='depot';
        // $transaction->tontine_id=$request->input('tontine_id');
        // $transaction->montant = $montant;
        // $transaction->save();
        Transaction::create([
            'solde_id'=>$soldes[0]->id,
            'type'=>'depot',
            'montant'=>$montant,
            'tontine_id'=>$request->tontine_id,
            'commercial_id'=>$user->id,
        ]);

        $solde->update([
            'solde' => $soldes->solde + $montant,
        ]);
        // $soldes[0]->solde += $montant;
        // $soldes->save();


        return view('commercial.membre.membre', compact('roles', 'tontine', 't', 'membres'));
    }


    public function commercial_retrait_client($id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $t=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();

        return view('commercial.transaction.depot', compact('roles', 'tontine', 't', 'membres'));
    }

    public function commercial_agences_reglage(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('commercial.commercial.commercial', compact('tontine', 'roles'));
    }

    public function commercial_agences_membre(){
        $tontine=Tontine::all();
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;

        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        // $t=Tontine::where('id', $membres[0]->mem_tontine_id)->get();
        // return $membres;
        $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->where('mem_tontine_id', $tontine[0]->id)->get();
        if(!empty($membres[0]))
        {
            $t=Tontine::all();
            // $t=Tontine::where('id', $membres[0]->mem_tontine_id)->get();

            $roles=Role::all();

        // return $t;
        // return $membres;
        return view('commercial.membre.membre', compact('tontine', 'membres', 'roles', 't'));
        }
        else{
            $roles=Role::all();

            // return $membres;
            return view('commercial.membre.membre', compact('tontine', 'membres', 'roles'));
        }
        // return view('commercial.membre.membre', compact('tontine', 'membres', 'roles', 't'));

    }

    public function commercial_creer_membre(){
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $commercial=User::where('id', $user->id)->first();
        $associations=Association::where('id', $user->com_association_id)->get();
        $agences=Agence::where('id', $user->com_agence_id)->get();
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->get();
        $t=Tontine::all();
        $roles=Role::all();

        // return $associations;
        // return $t;
        return view('commercial.membre.creer', compact('tontine', 'roles', 'associations', 'commercial', 'agences', 't'));
    }

    public function commercial_ajouter_membre(Request $request){
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $commercial=User::where('id', $user->id)->get();
        $associations=Association::where('id', $user->com_association_id)->get();
        $agences=Agence::where('id', $user->com_agence_id)->get();
        // $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->where('mem_com_id', $user->mem_com_id)->get();
        // *!}W[8th4b
        $t=Tontine::all();
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $membres=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'mem_tontine_id'=>$request->mem_tontine_id,
            'association_id'=>$associations[0]->id,
            'mem_com_id'=>$user->id,
            'mem_agence_id'=>$agences[0]->id,
            'image'=>$path,
            'role_id'=>'4',
            'password'=>Hash::make($request->password),
        ]);

        if ($membres) {
            # code...
            Solde::create([
            'user_id'=>$membres->id,
            'solde'=>0,
        ]);
    }

        return view('commercial.membre.creer', compact('tontine', 'roles', 'associations', 'commercial', 'agences', 't'));
    }



        // return view('commercial.membre.membre', compact('tontine', 'membres', 'roles'));


    public function commercial_agences_tontine($id){
        $roles=Role::all();
        $tontine=Tontine::find($id);
        return view('commercial.tontine.tontine', compact('tontine', 'roles'));
    }


}
