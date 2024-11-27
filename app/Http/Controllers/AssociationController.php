<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssociationResource;
use App\Models\Agence;
use App\Models\Association;
use App\Models\ChefAgence;
use App\Models\Commercial;
use App\Models\Gerant;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AssociationController extends Controller
{

    public function association(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('association.association', compact('tontine', 'roles'));
    }

    public function association_agence(){
        $roles=Role::all();
        // $a=Agence::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $tontine=Tontine::all();
        $agence=Agence::where('association_id', $association[0]->id)->get();
//         $agence=Agence::join('associations', 'associations.id', 'agences.association_id')
//         ->select('association_id')
// ->where('associations.user_id', $user->id)
//                     ->get();

        // $agence=AssociationResource::collection(
        //     Association::where('user_id', auth()->user()->id)->get()
        // );
        // return $association[0]->id;
        // return $agence->data;
        //  return $agence;
        // return $a;
        // return $user->roles->name;
        return view('association.agence.agences', compact('agence', 'tontine', 'roles'));
    }

    public function association_agence_detail($id){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        return view('association.agence.details', compact('agence', 'tontine', 'roles', 'association'));
    }

    // public function edit_association_agence($id){
    //     $roles=Role::all();
    //     $association=Association::all();
    //     $agence=Agence::find($id);
    //     $tontine=Tontine::all();
    //     return view('association.agences.edit', compact('tontine', 'agence', 'roles', 'association'));
    // }

    // public function edit_edit_agence(Request $request, $id){
    //     $tontine=Tontine::all();
    //     $agence=Agence::find($id);
    //     $identification=$request->file('image');
    //     $image=$request->file('image');
    //     $agence->update([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'phone'=>$request->phone,
    //         'ville'=>$request->ville,
    //         'User_id'=>$request->User_id,
    //         'pays'=>$request->pays,
    //         'budget'=>$request->budget,
    //         'identification'=>$identification,
    //         'image'=>$image,
    //     ]);

    //     return view('association.agences.agence', compact('agence', 'tontine'));
    // }

    public function association_creer_agence(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $tontine=Tontine::all();
        $gerant=User::where('role_id', 2)->where('association_id', $association[0]->id)->get();
        // $association=Association::all();
        $agence=Agence::where('user_id', auth()->user()->id)->get();

        // return $request->user_id;
        // return $agence;
        // return $association;
        return view('association.agence.creer', compact('tontine','roles', 'association', 'gerant'));
    }

    public function association_add_agence(Request $request){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $image=$request->file('image');
        $path=$image->store('images','public');
        $tontine=Tontine::all();
        $agence=Agence::all();

        Agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'user_id'=>$request->user_id,
            'association_id'=>$request->association_id,
            'pays'=>$request->pays,
            'image'=>$path,
            ]);

            // return $request->user_id;

        return view('association.agence.agences', compact('agence', 'tontine', 'roles', 'association', 'user'));

        //     return to_route('agence.tontine');
    }

    public function delete_association_agence($id){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agences=Agence::find($id);
        $tontine=Tontine::all();
        $agences->delete();

        return view('association.agence.agences', compact('agences', 'tontine', 'roles', 'association'));
    }

    // public function dashboard_association(){
    //     $tontine=Tontine::all();
    //     $association=Association::all();
    //     $gerant=Gerant::all();
    //     return view('association.association.association', compact('tontine', 'association', 'gerant'));
    // }

    public function association_zone(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $tontine=Tontine::all();
        $zones=Zone::where('association_id', $association[0]->id)->get();
        $commerciaux=User::where('association_id', $association[0]->id)->get();
        $agences=Agence::where('association_id', $association[0]->id)->get();

        // return $zones;

        return view('association.zone.zonne', compact('tontine', 'zones', 'commerciaux', 'agences', 'roles', 'association'));
    }

    public function association_creer_zone(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $commercial=User::where('com_association_id', $association[0]->id)->get();
        $agences=Agence::where('association_id', $association[0]->id)->get();

        // return $agences;
        $zones=Zone::where('association_id', $association[0]->id)->get();
        $tontine=Tontine::all();
        // return $zones;
        return view('association.zone.creer', compact('tontine', 'commercial', 'agences', 'zones', 'roles', 'association'));
    }

    public function association_ajouter_zone(Request $request){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $agences=Agence::all();
        $commercial=User::where('com_association_id', $association[0]->id)->get();
        $agences=Agence::where('association_id', $association[0]->id)->get();

        Zone::create([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'agence_id'=>$request->agence_id,
            'association_id'=>$request->association_id,
            'image'=>$path,
        ]);

        return view('association.zone.creer', compact('commercial', 'agences', 'tontine', 'roles', 'association'));
    }


    public function association_chef_agence(){
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $responsables=User::all();
        $association=$user->associations;
        $responsables=User::where('role_id', 2)->where('association_id', $association[0]->id)->get();

        $agences=Agence::where('association_id', $association[0]->id)->get();

        // $responsables=Association::join('users', 'user_id', 'associations.user_id')
        // ->join('agences', 'agences.association_id', 'associations.id')

        // ->where('users.id', auth()->user()->id)->get();
        // $responsables=Agence::where('association_id', $agence[0]->id)->get();

        $roles=Role::all();
        // $agences=Agence::all();

        // return $responsables;
        // return $gerant;
        // return $user;
        // return $agence;
        return view('association.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine'));
    }

    public function association_creer_chef_agence(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $tontine=Tontine::all();
        $responsables=User::where('role_id', 2)->where('association_id', $association[0]->id)->get();

        // return $responsables;
        // return $association;
        return view('association.chef_agence.creer', compact('tontine', 'roles', 'association', 'responsables'));
    }

    public function association_add_User(Request $request){
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $responsables=User::where('role_id', 2)->where('association_id', $association[0]->id)->get();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'role_id'=>'2',
            'image'=>$path,
            'association_id'=>$association[0]->id,
            // 'com_agence_id'=>$request->com_agence_id,
            'password'=>Hash::make($request->password),
        ]);
        return view('association.chef_agence.chef_dagence', compact('tontine', 'association', 'roles', 'responsables'));
    }

    public function association_commercial(){
            $tontine=Tontine::all();
            $user=User::find(auth()->user()->id);
            $association=$user->associations;
            $agence=$user->agences;
            $commercial=User::where('role_id', 3)->where('com_association_id', $association[0]->id)->get();
            $roles=Role::all();
            $zones=Zone::all();
            $agences=Agence::where('association_id', $association[0]->id)->get();
            $association=Agence::where('association_id', $association[0]->id)->get();
            // return $agences;
            // return $commercial;
            return view('association.commercial.commercial', compact('agences','roles', 'tontine', 'zones', 'association', 'commercial'));
    }

    public function association_creer_commercial(){
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        // $zones=Zone::where('association_id', auth()->user()->id)->get();
        $roles=Role::all();
        $agence=Agence::where('association_id', $association[0]->id)->get();

        // return $association;
        return view('association.commercial.creer', compact( 'roles', 'agence', 'tontine', 'association'));
    }

    public function association_ajouter_commercial(Request $request){
        $roles=Role::all();
        // $association=Association::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        // $agence=Agence::all();
        $zones=Zone::all();
        $user=User::find(auth()->user()->id);
        $agence=$user->associations;
        $association=$user->associations;


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'com_association_id'=>$association[0]->id,
            'role_id'=>'3',
            'image'=>$image,
            'password'=>Hash::make($request->password)
        ]);
        return view('association.commercial.creer', compact('tontine', 'agence', 'zones', 'roles', 'association'));
    }

    public function association_agences_transaction(){

        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $soldes=Solde::all();
        $total=Transaction::sum('montant');
        $membres=User::where('role_id', 4)->where('association_id', $user->association_id)->get();
        $commercial=User::where('role_id', 3)->where('association_id', $user->association_id)->where('mem_agence_id', $user->com_agence_id)->first();
        $transactions=Transaction::all();
        $versement=Transaction::where('type', 'depot')->get();
        $totalcompte=$membres->count();
        $totalversement=$versement->sum('montant');
        $utilisateur=User::where('role_id', 4)->whereBetween('created_at', [now()->subDays(1), now()])->get();
        $d=$utilisateur->count();

        $totalcompte=$membres->count();
        $memb=User::where('id', $soldes[0]->user_id)->get();

        $solde=Solde::where('user_id', $memb[0]->id)->get();



        // $membres=User::all();
        $t=Tontine::all();
        // return $memb;


        $association=Association::all();

        // return $membres;
        return view('association.transaction.transaction', compact('tontine', 'roles', 'association', 'transactions', 't', 'commercial', 'd', 'totalversement', 'total', 'totalcompte'));
    }

    public function association_agences_versement(){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('association.versement.versement', compact('tontine', 'roles', 'association'));
    }

    public function association_agences_membre(){
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $agence=$user->associations;
        $association=$user->associations;
        // $t=Tontine::where('id', $membre[0]->mem_tontine_id)->get();
        $membre=User::where('role_id', 4)->where('association_id', $user->association_id)->get();
        if(!empty($membre[0]))
        {
            // $t=Tontine::where('id', $membre[0]->mem_tontine_id)->get();
            $t=Tontine::all();
            $roles=Role::all();
            $sold=Solde::where('user_id', $membre[0]->id)->get();

        // return $t;
        // return $membre;
        return view('association.membre.membre', compact('tontine', 'membre', 'roles', 't', 'association', 'sold'));
        }
        else{
            $roles=Role::all();

            // return $membre;
            return view('association.membre.membre', compact('tontine', 'roles', 'membre', 'association'));
        }
    }

    public function association_agences_creer_membre(){
        $tontine=Tontine::all();
        $t=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $associations=Association::where('id', $user->$association)->get();
        $roles=Role::all();

        return view('association.membre.creer', compact('tontine', 'association', 'roles', 't'));
    }

    public function association_agences_ajouter_membre(Request $request){
        $tontine=Tontine::all();
        $t=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $associations=Association::where('id', $user->$association)->get();
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        // $membre=User::where('role_id', 4);

        $membres=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'image'=>$path,
            'association_id'=>$association[0]->id,
            'mem_tontine_id'=>$request->mem_tontine_id,
            'role_id'=>4,
            'password'=>Hash::make($request->password),
        ]);

        if ($membres) {
            # code...
            Solde::create([
            'user_id'=>$membres->id,
            'solde'=>0,
        ]);
    }

        // return $t[1];

        return view('association.membre.membre', compact('tontine', 'membre', 'roles', 't'));
    }

    public function association_agences_tontine($id){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::find($id);
        return view('association.tontine.tontine', compact('tontine', 'id', 'roles', 'association'));
    }

}

