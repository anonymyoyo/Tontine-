<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use App\Models\Role;
use App\Models\Tontine;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgenceController extends Controller
{
    //
    public function agence(){
        $tontine=Tontine::all();
        return view('agence.agence', compact('tontine'));
    }

    public function dashboard_agence(){
        $agences=Agence::all();
        $gerant=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('agence.agence.agences', compact('tontine', 'agences', 'gerant'));
    }

    public function dashboard_agence_detail($id){
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        return view('agence.agence.details', compact('tontine', 'agence'));
    }

    public function dashboard_agence_zone(){
        $zones=Zone::all();
        $commerciaux=Commercial::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.zone.zonne', compact('tontine', 'commerciaux', 'agences', 'zones'));
    }

    public function dashboard_agence_creer_zone(){
        $commercial=Commercial::all();
        $agences=Agence::all();
        $zones=Zone::all();
        $tontine=Tontine::all();
        return view('agence.zone.creer', compact('tontine', 'commercial', 'agences', 'zones'));
    }

    public function dashboard_agence_ajouter_zone(Request $request){

        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'image'=>$path,
        ]);
        return view('agence.zone.creer', compact('tontine'));
    }

    public function dashboard_chef_agence(){
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine'));
    }

    public function dashboard_commercial(){
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $zones=Zone::all();
        $agences=Agence::all();
        $commercial=Commercial::all();
        $tontine=Tontine::all();
        return view('agence.commercial.commercial', compact('responsables','agences','roles', 'tontine', 'commercial', 'zones'));
    }

    public function dashboard_creer_commercial(){
        $commercial=Commercial::all();
        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        $tontine=Tontine::all();
        return view('agence.commercial.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine'));
    }

    public function dashboard_ajouter_commercial(Request $request){
        $tontine=Tontine::all();$image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $agence=Agence::all();
        $zones=Zone::all();


        Commercial::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$path,
            'role_id'=>'3',
            'image'=>$path,
            'agence_id'=>$request->agence_id,
            'password'=>Hash::make($request->password)
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$identification,
            'role_id'=>'3',
            'image'=>$image,
            'password'=>Hash::make($request->password)
        ]);
        return view('agence.commercial.creer', compact('tontine', 'agence', 'zones'));
    }

    public function dashboard_agences_transaction(){
        $tontine=Tontine::all();
        return view('agence.transaction.transaction', compact('tontine'));
    }

    public function dashboard_agences_versement(){
        $tontine=Tontine::all();
        return view('agence.versement.versement', compact('tontine'));
    }

    public function dashboard_agences_reglage(){
        $tontine=Tontine::all();
        return view('agence.agence.agences', compact('tontine'));
    }

    public function dashboard_agences_membre(){
        $tontine=Tontine::all();
        $users=User::all();
        $roles=Role::all();
        return view('agence.membre.membre', compact('tontine', 'users', 'roles'));
    }

    public function dashboard_agences_tontine($id){
        $tontine=Tontine::find($id);
        return view('agence.tontine.tontine', compact('tontine'));
    }

}
