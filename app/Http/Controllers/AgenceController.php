<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Association;
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

        // return $commercial;
        return view('agence.commercial.commercial', compact('roles', 'tontine', 'commercial', 'zones', 'agence'));
    }

    public function dashboard_creer_commercial(){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $commercial=User::where('role_id', 3)->where('com_association_id', $agence[0]->association_id)->get();
        $tontine=Tontine::all();
        $a=Association::where('id', $user->association_id)->get();
        $zones=Zone::where('agence_id', $agence[0]->id)->get();

        // return $a;
        return view('agence.commercial.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine', 'a'));
    }

    public function dashboard_ajouter_commercial(Request $request){
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $associations=Association::where('id', $user->association_id)->get();
        $agence=$user->agences;
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $zones=Zone::where('agence_id', $agence[0]->id)->get();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'com_agence_id'=>$agence[0]->id,
            'com_association_id'=>$associations[0]->id,
            'role_id'=>'3',
            'image'=>$path,
            'password'=>Hash::make($request->password)
        ]);
        return view('agence.commercial.creer', compact('tontine', 'agence', 'zones', 'user', 'roles'));
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
        $roles=Role::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        $tontine=Tontine::all();
        $roles=Role::all();
        $membre=User::where('role_id', 4)->where('association_id', $user->association_id)->where('mem_agence_id', $agence[0]->id)->get();
        if(!empty($membre[0]))
        {
            $t=Tontine::where('id', $membre[0]->mem_tontine_id)->get();

            $roles=Role::all();

        // return $membre;
        return view('agence.membre.membre', compact('tontine', 'membre', 'roles', 't'));
        }
        else{
            $roles=Role::all();

            // return $membre;
            return view('agence.membre.membre', compact('tontine', 'membre', 'roles'));
        }
    }

    public function dashboard_agences_tontine($id){
        $user=User::all();
        $roles=Role::all();
        $a=User::all();
        $tontine=Tontine::find($id);
        return view('agence.tontine.tontine', compact('tontine', 'user', 'a', 'roles'));
    }

}
