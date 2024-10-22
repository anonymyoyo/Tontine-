<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\store;
use App\Models\Agence;
use App\Models\Association;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use App\Models\Gerant;
use App\Models\Membre;
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
        $tontine=Tontine::all();
        $agences=Agence::all();
        $gerant=Chef_d_agence::all();
        return view('admin.admin.agences.agence', compact('agences', 'tontine', 'gerant'));
    }

    public function agence_detail($id){
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        $gerant=Chef_d_agence::all();
        return view('admin.admin.agences.detail', compact('agence', 'tontine', 'gerant'));
    }

    public function edit_admin_agence($id){
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        $gerant=Chef_d_agence::all();
        return view('admin.admin.agences.edit', compact('tontine', 'agence', 'gerant'));
    }

    public function edit_edit_agence(Request $request, $id){
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
            'chef_d_agence_id'=>$request->chef_d_agence_id,
            'pays'=>$request->pays,
            'association_id'=>$request->association_id,
            'budget'=>$request->budget,
            'identification'=>$path2,
            'image'=>$path,
        ]);

        return view('admin.admin.agences.agence', compact('agence', 'tontine', 'association'));
    }

    public function creer_agence(){
        $tontine=Tontine::all();
        $gerant=Chef_d_agence::all();
        $association=Association::all();
        return view('admin.admin.agences.creer', compact('tontine', 'gerant', 'association'));
    }

    public function add_agence(Request $request){

        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $agences=Agence::all();
        $association=Association::all();

        Agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'chef_d_agence_id'=>$request->chef_d_agence_id,
            'association_id'=>$request->association_id,
            'pays'=>$request->pays,
            'budget'=>$request->budget,
            'identification'=>$path2,
            'image'=>$path,
            ]);


        return view('admin.admin.agences.agence', compact('agences', 'tontine', 'association'));

        //     return to_route('agence.tontine');
    }

    public function delete_admin_agence($id){
        $agences=Agence::find($id);
        $tontine=Tontine::all();
        $agences->delete();

        return view('admin.admin.agences.agence', compact('agences', 'tontine'));
    }

    public function dashboard_association(){
        $tontine=Tontine::all();
        $association=Association::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.association', compact('tontine', 'association', 'gerant'));
    }

    public function dashboard_association_gerant(){
        $tontine=Tontine::all();
        $associations=Association::all();
        $roles=Role::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.gerant', compact('tontine', 'gerant', 'associations', 'roles'));
    }

    public function association_creer_association(){
        $tontine=Tontine::all();
        $association=Association::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.creer', compact('tontine', 'gerant', 'association'));
    }

    public function add_association(Request $request){
        $tontine=Tontine::all();
        $association=Association::all();
        $gerant=Gerant::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        Association::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'reglement'=>$request->reglement,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'gerant_id'=>$request->gerant_id,
            'image'=>$path,
        ]);
        return view('admin.admin.association.association', compact('tontine', 'association', 'gerant'));
    }

    public function association_creer_president_association(){
        $tontine=Tontine::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.creer_gerant', compact('tontine', 'gerant'));
    }

    public function admin_ajouter_gerant(Request $request){
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $gerant=Gerant::all();
        $association=Association::all();
        Gerant::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$path2,
            'role_id'=>'5',
            'association_id'=>$request->association_id,
            'image'=>$path,
            'password'=>Hash::make($request->password),
        ]);

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

        return view('admin.admin.association.creer', compact('tontine', 'gerant', 'association'));
    }

    public function association_details($id){
        $tontine=Tontine::all();
        $association=Association::find($id);
        $commercial=Commercial::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.details', compact('tontine', 'gerant', 'association', 'commercial'));
    }

    public function zone(){
        $tontine=Tontine::all();
        $zones=Zone::all();
        $commerciaux=Commercial::all();
        $agences=Agence::all();
        return view('admin.admin.zones.zone', compact('tontine', 'zones', 'commerciaux', 'agences'));
    }

    public function creer_zone(){
        $commercial=Commercial::all();
        $agences=Agence::all();
        $zones=Zone::all();
        $tontine=Tontine::all();
        return view('admin.admin.zones.creer', compact('tontine', 'commercial', 'agences', 'zones'));
    }

    public function ajouter_zone(Request $request){
        $tontine=Tontine::all();
        $image=$request->file('image');
        $commercial=Commercial::all();
        $association=Association::all();
        $agences=Agence::all();
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'association_id'=>$request->association_id,
            'image'=>$image,
        ]);

        return view('admin.admin.zones.creer', compact('commercial', 'agences', 'tontine', 'association'));
    }

    public function creer_tontine(){
        $tontine=Tontine::all();
        return view('admin.admin.tontines.creer', compact('tontine'));

    }


    public function add_tontine(Request $request){

        $image=$request->file('image');
        $tontine=Tontine::all();
        // $image=store('images','public');
        Tontine::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'montant_total'=>$request->montant_total,
            'reglement'=>$request->reglement,
            'nbre_membre'=>$request->nbre_membre,
            'prix'=>$request->prix,
            'image'=>$image,
            ]);

            return view('admin.admin.tontines.creer', compact('tontine'));
// $image=Storage::files('public/images');
            // return $tontine;
            // return to_route('agence.tontine', $tontine->id);
            // return view('admin.admin.tontines.tontine', compact('image'));
    }

    public function chef_agence(){
        $tontine=Tontine::all();
        $responsables=Chef_d_agence::all();
        $roles=Role::all();
        $agences=Agence::all();

        // return $responsables;
        return view('admin.admin.chef_agence.chef_agence', compact('responsables','agences','roles', 'tontine'));
    }

    public function creer_chef_agence(){
        $association=Association::all();
        $tontine=Tontine::all();
        return view('admin.admin.chef_agence.creer', compact('tontine', 'association'));
    }

    public function add_chef_d_agence(Request $request){
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $tontine=Tontine::all();
        $association=Association::all();
        Chef_d_agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'association_id'=>$request->association_id,
            'identification'=>$path2,
            'role_id'=>'2',
            'image'=>$path,
            'password'=>Hash::make($request->password),
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$path2,
            'role_id'=>'2',
            'image'=>$path,
            'password'=>Hash::make($request->password),
        ]);
        return view('admin.admin.chef_agence.creer', compact('tontine', 'association'));
    }

    public function commercial(){
            $tontine=Tontine::all();
            $responsables=Chef_d_agence::all();
            // $image=store::files('public/images');
            $roles=Role::all();
            $zones=Zone::all();
            $agences=Agence::all();
            $commercial=Commercial::all();
            return view('admin.admin.commerciaux.commercial', compact('responsables','agences','roles', 'tontine', 'commercial', 'zones'));
    }

    public function creer_commercial(){
        $tontine=Tontine::all();
        $commercial=Commercial::all();
        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        return view('admin.admin.commerciaux.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine'));
    }

    public function ajouter_commercial(Request $request){
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path2=$identification->store('images','public');
        $agence=Agence::all();
        $association=Association::all();
        $zones=Zone::all();


        Commercial::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$path2,
            'association_id'=>$request->association_id,
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
        return view('admin.admin.commerciaux.creer', compact('tontine', 'agence', 'zones', 'association'));
    }

    public function agences_transaction(){
        $tontine=Tontine::all();
        return view('admin.admin.transactions.transaction', compact('tontine'));
    }

    public function agences_versement(){
        $tontine=Tontine::all();
        return view('admin.admin.versements.versement', compact('tontine'));
    }

    public function agences_membre(){
        $tontine=Tontine::all();
        $membres=Membre::all();
        $roles=Role::all();
        return view('admin.admin.membres.membre', compact('tontine', 'membres', 'roles'));
    }

    public function agences_tontine($id){
        $tontine=Tontine::find($id);
        return view('admin.admin.tontines.tontine', compact('tontine', 'id'));
    }
}
