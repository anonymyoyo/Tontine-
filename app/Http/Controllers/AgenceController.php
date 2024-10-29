<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use App\Models\Gerant;
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
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('agence.agence', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agence(){
        $user=User::all();
        $roles=Role::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.agence.agences', compact('tontine', 'agences', 'user', 'roles'));
    }

    public function dashboard_agence_detail($id){
        $user=User::all();
        $roles=Role::all();
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        return view('agence.agence.details', compact('tontine', 'agence', 'user', 'roles'));
    }

    public function dashboard_agence_zone(){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $zones=Zone::all();
        $commerciaux=Commercial::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.zone.zonne', compact('tontine', 'commerciaux', 'agences', 'zones', 'user', 'a', 'roles'));
    }

    public function dashboard_agence_creer_zone(){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $commercial=Commercial::all();
        $agences=Agence::all();
        $zones=Zone::all();
        $tontine=Tontine::all();
        return view('agence.zone.creer', compact('tontine', 'commercial', 'agences', 'zones', 'user', 'a', 'roles'));
    }

    public function dashboard_agence_ajouter_zone(Request $request){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'image'=>$path,
        ]);
        return view('agence.zone.creer', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_chef_agence(){
        $user=User::all();
        $a=Chef_d_agence::all();
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine', 'user', 'a'));
    }

    public function dashboard_commercial(){
        $user=User::all();
        $a=Chef_d_agence::all();
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $zones=Zone::all();
        $agences=Agence::all();
        $commercial=Commercial::all();
        $tontine=Tontine::all();
        return view('agence.commercial.commercial', compact('responsables','agences','roles', 'tontine', 'commercial', 'zones', 'user', 'a'));
    }

    public function dashboard_creer_commercial(){
        $user=User::all();
        $a=Chef_d_agence::all();
        $commercial=Commercial::all();
        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        $tontine=Tontine::all();
        return view('agence.commercial.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine', 'user', 'a'));
    }

    public function dashboard_ajouter_commercial(Request $request){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
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
            'identification'=>$path2,
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
        return view('agence.commercial.creer', compact('tontine', 'agence', 'zones', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_transaction(){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('agence.transaction.transaction', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_versement(){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('agence.versement.versement', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_reglage(){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        return view('agence.agence.agences', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_membre(){
        $user=User::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::all();
        $users=User::all();
        $roles=Role::all();
        return view('agence.membre.membre', compact('tontine', 'users', 'roles', 'user', 'a'));
    }

    public function dashboard_agences_tontine($id){
        $user=User::all();
        $roles=Role::all();
        $a=Chef_d_agence::all();
        $tontine=Tontine::find($id);
        return view('agence.tontine.tontine', compact('tontine', 'user', 'a', 'roles'));
    }

}
