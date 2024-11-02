<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\store;
use App\Models\Agence;
use App\Models\Association;
use App\Models\ChefAgence;
use App\Models\Commercial;
use App\Models\Role;
use App\Models\Tontine;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Versement;
use App\Models\Zone;
use Illuminate\Contracts\Cache\Store as CacheStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $roles=Role::all();
        $user=User::count();
        $transaction=Transaction::count();
        // $versement=Versement::count();
        $adherant=User::count();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('admin.dashboard', compact('tontine', 'roles', 'user', 'transaction', 'adherant', 'association'));
    }

    public function dashboard_agence(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $agences=Agence::all();
        $gerant=User::all();
        $association=Association::all();
        // $a=Tontine::all();
        // return $a;
        return view('admin.admin.agences.agence', compact('agences', 'tontine', 'association', 'roles', 'gerant'));
    }

    public function agence_detail($id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        return view('admin.admin.agences.detail', compact('agence', 'tontine', 'roles'));
    }

    public function edit_admin_agence($id){
        $roles=Role::all();
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        $gerant=User::all();
        return view('admin.admin.agences.edit', compact('tontine', 'agence', 'gerant', 'roles'));
    }

    public function edit_edit_agence(Request $request, $id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $association=Association::all();

        $agence->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'user_id'=>$request->user_id,
            'pays'=>$request->pays,
            'association_id'=>$request->association_id,
            'image'=>$path,
        ]);

        return view('admin.admin.agences.agence', compact('agence', 'tontine', 'association', 'roles'));
    }

    public function creer_agence(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $gerant=User::all();
        $association=Association::all();
        return view('admin.admin.agences.creer', compact('tontine', 'gerant', 'association', 'roles'));
    }

    public function add_agence(Request $request){
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $gerant=User::all();
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $agences=Agence::all();
        $association=Association::all();

        // ChefAgence::create([
        //     'name'=>$request->name,
        //     'association_id'=>$request->association_id,
        //     'image'=>$path,
        //     'user_id'=>$request->user_id,
        // ]);

        Agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'user_id'=>$request->user_id,
            'association_id'=>$request->association_id,
            'pays'=>$request->pays,
            'budget'=>$request->budget,
            'identification'=>$path2,
            'image'=>$path,
            ]);


        return view('admin.admin.agences.agence', compact('agences', 'tontine', 'association', 'gerant', 'roles'));

        //     return to_route('agence.tontine');
    }

    public function delete_admin_agence($id){
        $roles=Role::all();
        $agences=Agence::find($id);
        $tontine=Tontine::all();
        $agences->delete();

        return view('admin.admin.agences.agence', compact('agences', 'tontine', 'roles'));
    }

    public function dashboard_association(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $association=Association::all();
        // $user=User::all();
        $gerant=User::where('role_id', 5)->get();

        // return $association;
        // return $gerant;
        return view('admin.admin.association.association', compact('tontine', 'association', 'gerant', 'roles'));
    }

    public function dashboard_association_gerant(){
        $tontine=Tontine::all();
        $associations=Association::all();
        $roles=Role::all();
        $user=User::all();
        $gerant=User::all();
        return view('admin.admin.association.gerant', compact('tontine', 'gerant', 'associations', 'roles', 'user'));
    }

    public function association_creer_association(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $association=Association::all();
        $user=User::all();
        $gerant=User::all();
        return view('admin.admin.association.creer', compact('tontine', 'user', 'association', 'roles', 'gerant'));
    }

    public function add_association(Request $request){
        $roles=Role::all();
        $tontine=Tontine::all();
        $association=Association::all();
        $user=User::all();
        $gerant=User::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        Association::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'reglement'=>$request->reglement,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'user_id'=>$request->user_id,
            'image'=>$path,
        ]);
        return view('admin.admin.association.association', compact('tontine', 'association', 'user', 'roles', 'gerant'));
    }

    public function association_creer_president_association(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $gerant=User::all();
        return view('admin.admin.association.creer_gerant', compact('tontine', 'gerant', 'roles'));
    }

    public function admin_ajouter_gerant(Request $request){
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $gerant=User::all();
        $association=Association::all();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$identification,
            'role_id'=>'5',
            'image'=>$image,
            'password'=>Hash::make($request->password),
        ]);

        return view('admin.admin.association.creer', compact('tontine', 'gerant', 'association', 'roles'));
    }

    public function association_details($id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $association=Association::find($id);
        $commercial=User::all();
        $gerant=User::all();
        $agences=Agence::all();
        return view('admin.admin.association.details', compact('tontine', 'gerant', 'association', 'commercial', 'roles', 'agences'));
    }

    public function zone(){
        $roles=Role::all();
        $tontine=Tontine::all();
        $zones=Zone::all();
        $commerciaux=User::all();
        $association=Association::all();
        $agences=Agence::all();
        return view('admin.admin.zones.zone', compact('tontine', 'zones', 'commerciaux', 'agences', 'roles', 'association'));
    }

    public function creer_zone(){
        $roles=Role::all();
        $commercial=User::all();
        $agences=Agence::all();
        $zones=Zone::all();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('admin.admin.zones.creer', compact('tontine', 'commercial', 'agences', 'zones', 'roles', 'association'));
    }

    public function ajouter_zone(Request $request){
        $roles=Role::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $commercial=User::all();
        $association=Association::all();
        $agences=Agence::all();
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'association_id'=>$request->association_id,
            'image'=>$image,
        ]);

        return view('admin.admin.zones.creer', compact('commercial', 'agences', 'tontine', 'association', 'roles'));
    }

    public function creer_tontine(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('admin.admin.tontines.creer', compact('tontine', 'roles'));

    }


    public function add_tontine(Request $request){
        $roles=Role::all();

        $image=$request->file('image');
        $tontine=Tontine::all();
        // $image=store('images','public');
        Tontine::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'reglement'=>$request->reglement,
            'prix'=>$request->prix,
            'image'=>$image,
            ]);

            return view('admin.admin.tontines.creer', compact('tontine', 'roles'));
// $image=Storage::files('public/images');
            // return $tontine;
            // return to_route('agence.tontine', $tontine->id);
            // return view('admin.admin.tontines.tontine', compact('image'));
    }

    public function chef_agence(){
        $tontine=Tontine::all();
        $responsables=User::all();
        $roles=Role::all();
        $agences=Agence::all();

        // return $responsables;
        return view('admin.admin.chef_agence.chef_agence', compact('responsables','agences','roles', 'tontine'));
    }

    public function creer_chef_agence(){
        $roles=Role::all();
        $association=Association::all();
        $tontine=Tontine::all();
        return view('admin.admin.chef_agence.creer', compact('tontine', 'association', 'roles'));
    }

    public function add_User(Request $request){
        $roles=Role::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $association=Association::all();

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
        return view('admin.admin.chef_agence.creer', compact('tontine', 'association', 'roles'));
    }

    public function commercial(){
            $tontine=Tontine::all();
            $roles=Role::all();
            // $user=User::where('role_id', 3)->get();
            $zones=Zone::all();
            $agences=Agence::all();
            $association=Association::all();
            $commercial=User::where('role_id', 3)->get();
            return view('admin.admin.commerciaux.commercial', compact('agences','roles', 'tontine', 'commercial', 'zones', 'association'));
    }

    public function creer_commercial(){
        $tontine=Tontine::all();
        $commercial=User::all();

        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        $association=Association::all();
        return view('admin.admin.commerciaux.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine', 'association'));
    }

    public function ajouter_commercial(Request $request){
        $roles=Role::all();
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $agence=Agence::all();
        $association=Association::all();
        $zones=Zone::all();

        Commercial::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'association_id'=>$request->association_id,
            'image'=>$path,
        ]);

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
        return view('admin.admin.commerciaux.creer', compact('tontine', 'agence', 'zones', 'association', 'roles'));
    }

    public function delete_admin_agence_commercial($id){
        $commercial=User::find($id);
        $commercial->delete();
        $roles=Role::all();
        $tontine=Tontine::all();

        return view('admin.admin.commerciaux.creer', compact('tontine', 'commercial', 'roles'));

    }

    public function agences_transaction(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('admin.admin.transactions.transaction', compact('tontine', 'roles'));
    }

    public function agences_versement(){
        $roles=Role::all();
        $tontine=Tontine::all();
        return view('admin.admin.versements.versement', compact('tontine', 'roles'));
    }

    public function agences_membre(){
        $tontine=Tontine::all();
        $membres=User::where('role_id', 4)->get();
        $roles=Role::all();

        // return $membres;
        return view('admin.admin.membres.membre', compact('tontine', 'membres', 'roles'));
    }

    public function admin_creer_membre(){
        $tontine=Tontine::all();
        $association=Association::all();
        $agence=Agence::all();
        $roles=Role::all();

        return view('admin.admin.membres.creer', compact('tontine', 'association', 'agence', 'roles'));
    }

    public function admin_ajouter_membre(Request $request){
        $tontine=Tontine::all();
        $association=Association::all();
        $agence=Agence::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $roles=Role::all();
        $membres=User::where('role_id', 4);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'image'=>$path,
            'association_id'=>$association[0]->id,
            'mem_tontine_id'=>$tontine[0]->id,
            'role_id'=>4,
            'password'=>Hash::make($request->password),
        ]);

        return view('admin.admin.membres.membre', compact('tontine', 'membres', 'roles'));
    }

    public function agences_tontine($id){
        $roles=Role::all();
        $tontine=Tontine::find($id);
        return view('admin.admin.tontines.tontine', compact('tontine', 'id', 'roles'));
    }
}
