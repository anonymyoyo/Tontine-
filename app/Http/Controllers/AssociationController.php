<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Association;
use App\Models\ChefAgence;
use App\Models\User;
use App\Models\Commercial;
use App\Models\Gerant;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Tontine;
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
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $tontine=Tontine::all();
        $agence=Agence::where('association_id', $association[0]->id)->get();
        // return $association[0]->id;
        return view('association.agence.agences', compact('agence', 'tontine', 'roles', 'user', 'association'));
    }

    public function association_agence_detail($id){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        return view('association.agence.details', compact('agence', 'tontine', 'roles', 'association'));
    }

    public function edit_association_agence($id){
        $roles=Role::all();
        $association=Association::all();
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        return view('association.agences.edit', compact('tontine', 'agence', 'roles', 'association'));
    }

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
        // $association=Association::all();
        $agence=Agence::where('user_id', auth()->user()->id)->get();

        // return $request->user_id;
        // return $agence;
        // return $association;
        return view('association.agence.creer', compact('tontine','roles', 'association'));
    }

    public function association_add_agence(Request $request){
        $roles=Role::all();
        $association=Association::where('user_id', auth()->user()->id)->get();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $tontine=Tontine::all();
        $agences=Agence::all();
        $user=User::all();

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

        return view('association.agence.agences', compact('agences', 'tontine', 'roles', 'association', 'user'));

        //     return to_route('agence.tontine');
    }

    public function delete_association_agence($id){
        $roles=Role::all();
        $association=Association::all();
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
        $association=Association::all();
        $tontine=Tontine::all();
        $zones=Zone::where('association_id', auth()->user()->id)->get();
        $commerciaux=User::where('association_id', auth()->user()->id)->get();
        $agences=Agence::where('association_id',auth()->user()->id)->get();

        // return $zones;

        return view('association.zone.zonne', compact('tontine', 'zones', 'commerciaux', 'agences', 'roles', 'association'));
    }

    public function association_creer_zone(){
        $roles=Role::all();
        $association=Association::where('user_id', auth()->user()->id)->get();
        $commercial=User::where('association_id', auth()->user()->id)->get();
        $agences=Agence::where('association_id',auth()->user()->id)->get();

        // return $agences;
        $zones=Zone::where('association_id', auth()->user()->id)->get();
        $tontine=Tontine::all();
        // return $zones;
        return view('association.zone.creer', compact('tontine', 'commercial', 'agences', 'zones', 'roles', 'association'));
    }

    public function association_ajouter_zone(Request $request){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $commercial=User::all();
        $agences=Agence::all();
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'association_id'=>$request->commercial_id,
            'image'=>$path,
        ]);

        return view('association.zone.creer', compact('commercial', 'agences', 'tontine', 'roles', 'association'));
    }


    public function association_chef_agence(){
        $tontine=Tontine::all();
        $associations=Association::where('user_id', auth()->user()->id)->get();
        // $user=User::find(auth()->user()->id);
        // $gerant=$user->gerants;fin
        // $user=User::find(auth()->user()->id);
        // $responsables=$user->chefdagen
        // $agences=Agence::where('association_id', auth()->user()->id);
        $responsables=ChefAgence::where('association_id', $associations->id)->get();
        // $agences=Agence::where('user_id', $responsables->agence_id);
        // $image=store::files('public/images');
        // $responsables->associations;
        $roles=Role::all();
        $agences=Agence::all();

        // return $responsables;
        // return $gerant;
        // return $agences;
        return view('association.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine', 'associations'));
    }

    public function association_creer_chef_agence(){
        $roles=Role::all();
        $association=Association::where('user_id', auth()->user()->id)->get();
        $tontine=Tontine::all();

        // return $association;
        return view('association.chef_agence.creer', compact('tontine', 'roles', 'association'));
    }

    public function association_add_User(Request $request){
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $tontine=Tontine::all();
        $association=Association::all();

        ChefAgence::create([
            'name'=>$request->name,
            'association_id'=>$request->association_id,
            'image'=>$path,
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'role_id'=>'2',
            'image'=>$path,
            'password'=>Hash::make($request->password),
        ]);
        return view('association.chef_agence.chef_dagence', compact('tontine', 'association', 'roles'));
    }

    public function association_commercial(){
            $tontine=Tontine::all();
            $association=Association::where('user_id', auth()->user()->id)->get();
            // $image=store::files('public/images');
            $roles=Role::all();
            $zones=Zone::all();
            $agences=Agence::where('association_id', auth()->user()->id)->get();
            // $user=User::find(auth()->user()->id);
            // $commercial=$user->commerciaux;
            // return $agences;
            // return $commercial;
            return view('association.commercial.commercial', compact('agences','roles', 'tontine', 'zones', 'association'));
    }

    public function association_creer_commercial(){
        $tontine=Tontine::all();
        $association=Association::where('user_id', auth()->user()->id)->get();
        $zones=Zone::where('association_id', auth()->user()->id)->get();
        $roles=Role::all();
        $agence=Agence::where('association_id', auth()->user()->id)->get();

        // return $association;
        return view('association.commercial.creer', compact('zones', 'roles', 'agence', 'tontine', 'association'));
    }

    public function association_ajouter_commercial(Request $request){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $agence=Agence::all();
        $zones=Zone::all();


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
        return view('association.commercial.creer', compact('tontine', 'agence', 'zones', 'roles', 'association'));
    }

    public function association_agences_transaction(){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('association.transaction.transaction', compact('tontine', 'roles', 'association'));
    }

    public function association_agences_versement(){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('association.versement.versement', compact('tontine', 'roles', 'association'));
    }

    public function association_agences_membre(){
        $tontine=Tontine::all();
        $association=Association::all();
        $roles=Role::all();
        $users=User::all();
        return view('association.membre.membre', compact('tontine', 'roles', 'users', 'roles', 'association'));
    }

    public function association_agences_tontine($id){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::find($id);
        return view('association.tontine.tontine', compact('tontine', 'id', 'roles', 'association'));
    }

}
