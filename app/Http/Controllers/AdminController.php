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
        $tontine=Tontine::all();
        return view('admin.dashboard', compact('tontine', 'roles', 'user', 'transaction', 'adherant'));
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
        $identification=$request->file('image');
        $image=$request->file('image');
        $agence->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'chef_d_agence_id'=>$request->chef_d_agence_id,
            'pays'=>$request->pays,
            'budget'=>$request->budget,
            'identification'=>$identification,
            'image'=>$image,
        ]);

        return view('admin.admin.agences.agence', compact('agence', 'tontine'));
    }

    public function creer_agence(){
        $tontine=Tontine::all();
        $gerant=Chef_d_agence::all();
        return view('admin.admin.agences.creer', compact('tontine', 'gerant'));
    }

    public function add_agence(Request $request){

        $identification=$request->file('image');
        $image=$request->file('image');
        $tontine=Tontine::all();
        $agences=Agence::all();

        Agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'chef_d_agence_id'=>$request->chef_d_agence_id,
            'pays'=>$request->pays,
            'budget'=>$request->budget,
            'identification'=>$identification,
            'image'=>$image,
            ]);


        return view('admin.admin.agences.agence', compact('agences', 'tontine'));

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

    public function association_creer_association(){
        $tontine=Tontine::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.creer', compact('tontine', 'gerant'));
    }

    public function add_association(Request $request){
        $tontine=Tontine::all();
        $association=Association::all();
        $gerant=Gerant::all();
        $image=$request->file('image');

        Association::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'reglement'=>$request->reglement,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'gerant_id'=>$request->gerant_id,
            'image'=>$image,
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
        $identification=$request->file('image');
        $tontine=Tontine::all();
        $gerant=Gerant::all();
        Gerant::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$request->identification,
            'role_id'=>'5',
            'image'=>$image,
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

        return view('admin.admin.association.creer', compact('tontine', 'gerant'));
    }

    public function association_details(){
        $tontine=Tontine::all();
        $association=Association::all();
        $gerant=Gerant::all();
        return view('admin.admin.association.details', compact('tontine', 'gerant', 'association'));
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
        $agences=Agence::all();
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'image'=>$image,
        ]);

        return view('admin.admin.zones.creer', compact('commercial', 'agences', 'tontine'));
    }

    public function creer_tontine(){
        $tontine=Tontine::all();
        return view('admin.admin.tontines.creer', compact('tontine'));

    }


    public function add_tontine(Request $request){

        $image=$request->file('image');
        $tontine=Tontine::all();
        // $image=store('public/images');
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
        // $image=store::files('public/images');
        $roles=Role::all();
        $agences=Agence::all();
        return view('admin.admin.chef_agence.chef_agence', compact('responsables','agences','roles', 'tontine'));
    }

    public function creer_chef_agence(){
        $tontine=Tontine::all();
        return view('admin.admin.chef_agence.creer', compact('tontine'));
    }

    public function add_chef_d_agence(Request $request){
        $image=$request->file('image');
        $tontine=Tontine::all();
        Chef_d_agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$request->identification,
            'role_id'=>'2',
            'image'=>$image,
            'password'=>Hash::make($request->password),
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$request->identification,
            'role_id'=>'2',
            'image'=>$image,
            'password'=>Hash::make($request->password),
        ]);
        return view('admin.admin.chef_agence.creer', compact('tontine'));
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
        $agence=Agence::all();
        $zones=Zone::all();


        Commercial::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$request->identification,
            'role_id'=>'3',
            'image'=>$image,
            'agence_id'=>$request->agence_id,
            'password'=>Hash::make($request->password)
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$request->identification,
            'role_id'=>'3',
            'image'=>$image,
            'password'=>Hash::make($request->password)
        ]);
        return view('admin.admin.commerciaux.creer', compact('tontine', 'agence', 'zones'));
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
