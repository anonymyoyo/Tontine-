<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Tontine;
use App\Models\User;
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
        $agences=Agence::all();
        $gerant=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('commercial.agence.agences', compact('tontine', 'agences', 'gerant', 'roles'));
    }

    public function commercial_agence_detail($id){
        $roles=Role::all();
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        return view('commercial.agence.details', compact('tontine', 'agence', 'roles'));
    }

    public function commercial_agence_zone(){
        $roles=Role::all();
        $zones=Zone::all();
        $commerciaux=Commercial::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('commercial.zone.zone', compact('tontine', 'commerciaux', 'agences', 'zones', 'roles'));
    }

    public function commercial_chef_agence(){
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('commercial.chef_agence.chef_agence', compact('responsables','agences','roles', 'tontine'));
    }

    public function commercial_commercial(){
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $zones=Zone::all();
        $agences=Agence::all();
        $commercial=Commercial::all();
        $tontine=Tontine::all();
        return view('commercial.commercial.commercial', compact('responsables','agences','roles', 'tontine', 'commercial', 'zones'));
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

    public function commercial_agences_reglage(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('commercial.commercial.commercial', compact('tontine', 'roles'));
    }

    public function commercial_agences_membre(){
        $tontine=Tontine::all();
        $membres=Membre::all();
        $roles=Role::all();
        return view('commercial.membre.membre', compact('tontine', 'membres', 'roles'));
    }

    public function commercial_creer_membre(){
        $tontine=Tontine::all();
        $membres=Membre::all();
        $roles=Role::all();
        return view('commercial.membre.creer', compact('tontine', 'membres', 'roles'));
    }

    public function commercial_ajouter_membre(Request $request){
        $tontine=Tontine::all();
        $membres=Membre::all();
        $roles=Role::all();
        $identification=$request->file('image');
        $image=$request->file('image');
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$identification,
            'image'=>$image,
            'role_id'=>'4',
            'password'=>Hash::make($request->password),
        ]);
foreach($request->tontine_id as $tontineId){


        Membre::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$identification,
            'image'=>$image,
            'role_id'=>'4',
            'tontine_id'=>$tontineId,
            'password'=>Hash::make($request->password),
        ]);
}
        return view('commercial.membre.membre', compact('tontine', 'membres', 'roles'));
    }

    public function commercial_agences_tontine($id){
        $roles=Role::all();
        $tontine=Tontine::find($id);
        return view('commercial.tontine.tontine', compact('tontine', 'roles'));
    }


}
