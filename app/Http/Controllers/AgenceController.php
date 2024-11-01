<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
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
        $a=User::all();
        $tontine=Tontine::all();
        return view('agence.agence', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agence(){
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $roles=Role::all();
        $gerant=User::where('role_id', 2);
        $agencies=Agence::where('association_id', auth()->user()->association_id)->get();
        $tontine=Tontine::all();

        // return $agences;
        return view('agence.agence.agences', compact('tontine', 'agencies', 'gerant', 'roles'));
    }

    public function dashboard_agence_detail($id){
        $user=User::all();
        $roles=Role::all();
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        return view('agence.agence.details', compact('tontine', 'agence', 'user', 'roles'));
    }

    public function dashboard_agence_zone(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $zones=Zone::where('agence_id', $agence[0]->id)->get();
        $commerciaux=User::where('role_id', 3)->where('com_association_id', $agence[0]->association_id)->get();
        $tontine=Tontine::all();

        // return $commerciaux;
        return view('agence.zone.zonne', compact('tontine', 'commerciaux', 'agence', 'zones', 'roles'));
    }

    public function dashboard_agence_creer_zone(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $zones=Zone::where('agence_id', $agence[0]->id)->get();
        $commerciaux=User::where('role_id', 3)->where('com_association_id', $agence[0]->association_id)->get();
        $tontine=Tontine::all();
        return view('agence.zone.creer', compact('tontine', 'commerciaux', 'agence', 'zones', 'roles'));
    }

    public function dashboard_agence_ajouter_zone(Request $request){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $zones=Zone::where('agence_id', $agence[0]->id)->get();
        $commerciaux=User::where('role_id', 3)->where('com_association_id', $agence[0]->association_id)->get();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'user_id'=>$request->user_id,
            'commercial_id'=>$request->commercial_id,
            'image'=>$path,
        ]);
        return view('agence.zone.creer', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_chef_agence(){
        $user=User::all();
        $a=User::all();
        $responsables=User::all();
        $roles=Role::all();
        $agences=Agence::all();
        $tontine=Tontine::all();
        return view('agence.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine', 'user', 'a'));
    }

    public function dashboard_commercial(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $commercial=User::where('role_id', 3)->where('com_association_id', $agence[0]->association_id)->get();
        $tontine=Tontine::all();
        $zones=Zone::where('agence_id', $agence[0]->id)->get();

        // return $agence;
        return view('agence.commercial.commercial', compact('roles', 'tontine', 'commercial', 'zones', 'agence'));
    }

    public function dashboard_creer_commercial(){
        $user=User::all();
        $a=User::all();
        $commercial=User::all();
        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        $tontine=Tontine::all();
        return view('agence.commercial.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine', 'user', 'a'));
    }

    public function dashboard_ajouter_commercial(Request $request){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::all();$image=$request->file('image');
        $path=$image->store('images','public');
        $agence=Agence::all();
        $zones=Zone::all();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'role_id'=>'3',
            'image'=>$path,
            'password'=>Hash::make($request->password)
        ]);
        return view('agence.commercial.creer', compact('tontine', 'agence', 'zones', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_transaction(){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::all();
        return view('agence.transaction.transaction', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_versement(){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::all();
        return view('agence.versement.versement', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_reglage(){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::all();
        return view('agence.agence.agences', compact('tontine', 'user', 'a', 'roles'));
    }

    public function dashboard_agences_membre(){
        $user=User::all();
        $a=User::all();
        $tontine=Tontine::all();
        $users=User::all();
        $roles=Role::all();
        return view('agence.membre.membre', compact('tontine', 'users', 'roles', 'user', 'a'));
    }

    public function dashboard_agences_tontine($id){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::find($id);
        return view('agence.tontine.tontine', compact('tontine', 'user', 'a', 'roles'));
    }

}
