<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Association;
use App\Models\Chef_d_agence;
use App\Models\Commercial;
use App\Models\Gerant;
use App\Models\Membre;
use App\Models\Role;
use App\Models\Tontine;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AssociationController extends Controller
{

    public function association(){
        $tontine=Tontine::all();
        return view('association.association', compact('tontine'));
    }




    public function association_agence(){
        $tontine=Tontine::all();
        $agences=Agence::all();
        $gerant=Chef_d_agence::all();
        return view('association.agence.agences', compact('agences', 'tontine', 'gerant'));
    }

    public function association_agence_detail($id){
        $tontine=Tontine::all();
        $agence=Agence::find($id);
        $gerant=Chef_d_agence::all();
        return view('association.agence.details', compact('agence', 'tontine', 'gerant'));
    }

    public function edit_association_agence($id){
        $agence=Agence::find($id);
        $tontine=Tontine::all();
        $gerant=Chef_d_agence::all();
        return view('association.agences.edit', compact('tontine', 'agence', 'gerant'));
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
    //         'chef_d_agence_id'=>$request->chef_d_agence_id,
    //         'pays'=>$request->pays,
    //         'budget'=>$request->budget,
    //         'identification'=>$identification,
    //         'image'=>$image,
    //     ]);

    //     return view('association.agences.agence', compact('agence', 'tontine'));
    // }

    public function association_creer_agence(){
        $tontine=Tontine::all();
        $gerant=Chef_d_agence::all();
        return view('association.agence.creer', compact('tontine', 'gerant'));
    }

    public function association_add_agence(Request $request){

        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path=$identification->store('images','public');
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
            'identification'=>$path,
            'image'=>$path,
            ]);


        return view('association.agence.agences', compact('agences', 'tontine'));

        //     return to_route('agence.tontine');
    }

    public function delete_association_agence($id){
        $agences=Agence::find($id);
        $tontine=Tontine::all();
        $agences->delete();

        return view('association.agence.agences', compact('agences', 'tontine'));
    }

    // public function dashboard_association(){
    //     $tontine=Tontine::all();
    //     $association=Association::all();
    //     $gerant=Gerant::all();
    //     return view('association.association.association', compact('tontine', 'association', 'gerant'));
    // }

    public function association_zone(){
        $tontine=Tontine::all();
        $zones=Zone::all();
        $commerciaux=Commercial::all();
        $agences=Agence::all();
        return view('association.zone.zonne', compact('tontine', 'zones', 'commerciaux', 'agences'));
    }

    public function association_creer_zone(){
        $commercial=Commercial::all();
        $agences=Agence::all();
        $zones=Zone::all();
        $tontine=Tontine::all();
        return view('association.zone.creer', compact('tontine', 'commercial', 'agences', 'zones'));
    }

    public function association_ajouter_zone(Request $request){
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $commercial=Commercial::all();
        $agences=Agence::all();
        Zone::create([
            'name'=>$request->name,
            'agence_id'=>$request->agence_id,
            'commercial_id'=>$request->commercial_id,
            'image'=>$path,
        ]);

        return view('association.zone.creer', compact('commercial', 'agences', 'tontine'));
    }

    public function association_creer_tontine(){
        $tontine=Tontine::all();
        return view('association.tontine.creer', compact('tontine'));

    }


    public function association_add_tontine(Request $request){

        $image=$request->file('image');
        $path=$image->store('images','public');
        $tontine=Tontine::all();
        // $image=store('images','public');
        Tontine::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'montant_total'=>$request->montant_total,
            'reglement'=>$request->reglement,
            'nbre_membre'=>$request->nbre_membre,
            'prix'=>$request->prix,
            'image'=>$path,
            ]);

            return view('association.tontine.creer', compact('tontine'));
// $image=Storage::files('public/images');
            // return $tontine;
            // return to_route('agence.tontine', $tontine->id);
            // return view('association.tontines.tontine', compact('image'));
    }

    public function association_chef_agence(){
        $tontine=Tontine::all();
        $responsables=Chef_d_agence::all();
        // $image=store::files('public/images');
        $roles=Role::all();
        $agences=Agence::all();
        return view('association.chef_agence.chef_dagence', compact('responsables','agences','roles', 'tontine'));
    }

    public function association_creer_chef_agence(){
        $tontine=Tontine::all();
        return view('association.chef_agence.creer', compact('tontine'));
    }

    public function association_add_chef_d_agence(Request $request){
        $image=$request->file('image');
        $image->store('images','public');
        $identification=$request->file('image');
        $identification->store('images','public');
        $tontine=Tontine::all();
        Chef_d_agence::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'identification'=>$identification,
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
            'identification'=>$identification,
            'role_id'=>'2',
            'image'=>$image,
            'password'=>Hash::make($request->password),
        ]);
        return view('association.chef_agence.creer', compact('tontine'));
    }

    public function association_commercial(){
            $tontine=Tontine::all();
            $responsables=Chef_d_agence::all();
            // $image=store::files('public/images');
            $roles=Role::all();
            $zones=Zone::all();
            $agences=Agence::all();
            $commercial=Commercial::all();
            return view('association.commercial.commercial', compact('responsables','agences','roles', 'tontine', 'commercial', 'zones'));
    }

    public function association_creer_commercial(){
        $tontine=Tontine::all();
        $commercial=Commercial::all();
        $zones=Zone::all();
        $roles=Role::all();
        $agence=Agence::all();
        return view('association.commercial.creer', compact('commercial', 'zones', 'roles', 'agence', 'tontine'));
    }

    public function association_ajouter_commercial(Request $request){
        $tontine=Tontine::all();
        $image=$request->file('image');
        $path=$image->store('images','public');
        $identification=$request->file('image');
        $path=$identification->store('images','public');
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
        return view('association.commercial.creer', compact('tontine', 'agence', 'zones'));
    }

    public function association_agences_transaction(){
        $tontine=Tontine::all();
        return view('association.transaction.transaction', compact('tontine'));
    }

    public function association_agences_versement(){
        $tontine=Tontine::all();
        return view('association.versement.versement', compact('tontine'));
    }

    public function association_agences_membre(){
        $tontine=Tontine::all();
        $membres=Membre::all();
        $roles=Role::all();
        $users=User::all();
        return view('association.membre.membre', compact('tontine', 'membres', 'roles', 'users'));
    }

    public function association_agences_tontine($id){
        $tontine=Tontine::find($id);
        return view('association.tontine.tontine', compact('tontine', 'id'));
    }

}
