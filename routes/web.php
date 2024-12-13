<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('Apropos', [HomeController::class, 'about'])->name('about');
Route::get('Contact', [HomeController::class, 'contact'])->name('contact');
Route::get('Services', [HomeController::class, 'service'])->name('service');
Route::get('Blog', [HomeController::class, 'blog'])->name('blog');
Route::get('Associations', [HomeController::class, 'association'])->name('user.association');
Route::get('Tontines', [HomeController::class, 'tontines'])->name('user.tontines');
Route::get('Catalogue', [HomeController::class, 'catalogue'])->name('catalogue');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('SuperAdmin/Agences', [AdminController::class, 'dashboard_agence'])->name('agences');
    Route::get('SuperAdmin/Associations/Liste', [AdminController::class, 'dashboard_association'])->name('association.associations');
    Route::get('Association/Creer', [AdminController::class, 'association_creer_association'])->name('association.creer.association');
    Route::get('Association/Details/{id}', [AdminController::class, 'association_details'])->name('association.details');
    Route::post('SuperAdmin/Associations', [AdminController::class, 'add_association'])->name('add.associations');
    Route::get('Association/Creer/Gerant', [AdminController::class, 'association_creer_president_association'])->name('association.creer.president_association');
    Route::post('Association/Gerant', [AdminController::class, 'admin_ajouter_gerant'])->name('admin.ajouter_gerant');
    Route::get('Agences/{id}', [AdminController::class, 'agence_detail'])->name('detail');
    Route::get('Agences/Modifier/Agence/{id}', [AdminController::class, 'edit_admin_agence'])->name('edit.admin_agence');
    Route::post('Agence/{id}/Modifiee', [AdminController::class, 'edit_edit_agence'])->name('edit.edit_agence');
    Route::get('Agences/Creer/Nouvelle_agence', [AdminController::class, 'creer_agence'])->name('creer.agence');
    Route::post('Ajouter/Agence', [AdminController::class, 'add_agence'])->name('add.agence');
    Route::post('Supprimer/Agence/{id}', [AdminController::class, 'delete_admin_agence'])->name('delete.admin_agence');
    Route::get('Agences/Zones/Liste', [AdminController::class, 'zone'])->name('zones');
    Route::get('Agences/Creer/Zone', [AdminController::class, 'creer_zone'])->name('creer.zone');
    Route::post('Agences/Ajouter_zone', [AdminController::class, 'ajouter_zone'])->name('ajouter.zone'); #fgfdgdfgdfgf
    Route::get('Agences/Tontine/Creer', [AdminController::class, 'creer_tontine'])->name('creer.tontine');
    Route::post('Agence/Ajouter_tontine', [AdminController::class, 'add_tontine'])->name('ajouter.tontine');
    Route::get('Agences/User/Liste', [AdminController::class, 'chef_agence'])->name('chef_agence');
    Route::get('User/Creer', [AdminController::class, 'creer_chef_agence'])->name('creer.chef_agence');
    Route::post('User/Ajouter', [AdminController::class, 'add_User'])->name('ajouter.User');
    Route::get('Agences/Commerciaux/Liste', [AdminController::class, 'commercial'])->name('admin.commercial');
    Route::get('Agences/Creer/Commerciaux', [AdminController::class, 'creer_commercial'])->name('creer.commercial');
    Route::post('Agences/Commercial/Delete/{id}', [AdminController::class, 'delete_admin_agence_commercial'])->name('delete.admin_agence_commercial');
    Route::post('Agences/Commercial', [AdminController::class, 'ajouter_commercial'])->name('ajouter.commercial'); #fgfdgfdgdf
    Route::get('Admin/Depot/Membres/{id}', [AdminController::class, 'admin_depot_client'])->name('admin.depot');
    Route::post('Admin/Depot/{id}', [AdminController::class, 'depot_admin_client'])->name('depot.admin');
    Route::get('Admin/Retrait/Membres/{id}', [AdminController::class, 'admin_retrait_client'])->name('admin.retrait');
    Route::post('Admin/Retrait/{id}', [AdminController::class, 'retrait_admin_client'])->name('retrait.admin');
    Route::get('Agence/Transactions', [AdminController::class, 'agences_transaction'])->name('transaction');
    Route::get('Agence/Versements', [AdminController::class, 'agences_versement'])->name('versement');
    Route::get('Agence/Reglages', [AdminController::class, 'agences_reglage'])->name('reglage');
    Route::get('Agence/Membres', [AdminController::class, 'agences_membre'])->name('admin.membres');
    Route::get('Agence/Creer/Membres', [AdminController::class, 'admin_creer_membre'])->name('admin.creer_membres');
    Route::post('Agence/Ajouter/Membres', [AdminController::class, 'admin_ajouter_membre'])->name('admin.ajouter_membres');
    Route::get('Agence/Tontine', [AdminController::class, 'agences_tontine'])->name('admin.tontine');
    Route::get('Admin/Produit', [AdminController::class, 'admin_produit'])->name('admin.produit');
    Route::get('Admin/Ajouter/Produit', [AdminController::class, 'admin_ajouter_produit'])->name('ajouter.produit');
    Route::post('Admin/Creer/Produit', [AdminController::class, 'admin_creer_produit'])->name('creer.produit');
});

Route::middleware(['auth', 'association'])->group(function () {
    Route::get('association/Admin', [AssociationController::class, 'association'])->name('association');
    Route::get('Association/Agences', [AssociationController::class, 'association_agence'])->name('association.agences');
    Route::get('Association/Agences/{id}', [AssociationController::class, 'association_agence_detail'])->name('association.detail');
    Route::get('Association/Agences/Modifier/Agence/{id}', [AssociationController::class, 'edit_association_agence'])->name('edit.association_agence');
    Route::post('Association/Agence/{id}/Modifiee', [AssociationController::class, 'edit_associaiton_agence'])->name('edit.association_agence');
    Route::get('Association/Agences/Creer/Nouvelle_agence', [AssociationController::class, 'association_creer_agence'])->name('association.creer.agence');
    Route::post('Association/Ajouter/Agence', [AssociationController::class, 'association_add_agence'])->name('association.add.agence');
    Route::post('Association/Supprimer/Agence/{id}', [AssociationController::class, 'delete_association_agence'])->name('delete.association_agence');
    Route::get('Association/Agences/Zones/Liste', [AssociationController::class, 'association_zone'])->name('association.zones');
    Route::get('Association/Agences/Creer/Zone', [AssociationController::class, 'association_creer_zone'])->name('association.creer.zone');
    Route::post('Association/Agences/Ajouter_zone', [AssociationController::class, 'association_ajouter_zone'])->name('association.ajouter.zone'); #fgfdgdfgdfgf
    Route::get('Association/Agences/Tontine/Creer', [AssociationController::class, 'association_creer_tontine'])->name('association.creer.tontine');
    Route::post('Association/Agence/Ajouter_tontine', [AssociationController::class, 'association_add_tontine'])->name('association.ajouter.tontine');
    Route::get('Association/Agences/User/Liste', [AssociationController::class, 'association_chef_agence'])->name('association.chef_agence');
    // Route::get('Association/Chef')
    Route::get('Association/User/Creer', [AssociationController::class, 'association_creer_chef_agence'])->name('association.creer.chef_agence');
    Route::post('Association/User/Ajouter', [AssociationController::class, 'association_add_User'])->name('association.ajouter.User');
    Route::get('Association/Agences/Commerciaux/Liste', [AssociationController::class, 'association_commercial'])->name('association.commercial');
    Route::get('Association/Agences/Creer/Commerciaux', [AssociationController::class, 'association_creer_commercial'])->name('association.creer.commercial');
    Route::post('Association/Agences/Commercial', [AssociationController::class, 'association_ajouter_commercial'])->name('association.ajouter.commercial'); #fgfdgfdgdf
    Route::get('Association/Agence/Transactions', [AssociationController::class, 'association_agences_transaction'])->name('association.transaction');
    Route::get('Association/Agence/Versements', [AssociationController::class, 'association_agences_versement'])->name('association.versement');
    Route::get('Association/Agence/Reglages', [AssociationController::class, 'association_agences_reglage'])->name('association.reglage');
    Route::get('Association/Agence/Membres', [AssociationController::class, 'association_agences_membre'])->name('association.membres');
    Route::get('Association/Agence/Creer/Membres', [AssociationController::class, 'association_agences_creer_membre'])->name('association.creer_membres');
    Route::post('Association/Agence/Ajouter/Mambres', [AssociationController::class, 'association_agences_ajouter_membre'])->name('association.ajouter_membres');
    Route::get('Association/Agence/Tontine/{id}', [AssociationController::class, 'association_agences_tontine'])->name('association.tontine');
});

Route::middleware(['auth', 'agence'])->group(function () {
    Route::get('Pannel/User', [AgenceController::class, 'agence'])->name('agence');
    Route::get('User/Agences', [AgenceController::class, 'dashboard_agence'])->name('agence.agences');
    Route::get('User/Agences/{id}', [AgenceController::class, 'dashboard_agence_detail'])->name('agence.detail');
    Route::get('User/Zones/Liste', [AgenceController::class, 'dashboard_agence_zone'])->name('chefzones');
    Route::get('User/Creer/Zone', [AgenceController::class, 'dashboard_agence_creer_zone'])->name('agence.zone');
    Route::post('User/Ajouter_zone', [AgenceController::class, 'dashboard_ajouter_zone'])->name('agence.ajouter.zone');
    Route::get('User/User/Liste', [AgenceController::class, 'dashboard_chef_agence'])->name('agence.chef_agence');
    Route::get('User/Commerciaux/Liste', [AgenceController::class, 'dashboard_commercial'])->name('agence.commercial');
    Route::get('User/Creer/Commerciaux', [AgenceController::class, 'dashboard_creer_commercial'])->name('agence.creer.commercial');
    Route::post('User/Commercial', [AgenceController::class, 'dashboard_ajouter_commercial'])->name('agence.ajouter.commercial'); #fgfdgfdgdf
    Route::get('User/Transactions', [AgenceController::class, 'dashboard_agences_transaction'])->name('agence.transaction');
    Route::get('User/Versements', [AgenceController::class, 'dashboard_agences_versement'])->name('agence.versement');
    Route::get('User/Reglages', [AgenceController::class, 'dashboard_agences_reglage'])->name('agence.reglage');
    Route::get('User/Membres', [AgenceController::class, 'dashboard_agences_membre'])->name('agence.membres');
    Route::get('User/Creer/Membres', [AgenceController::class, 'dashboard_agences_creer_membre'])->name('agence.creer_membres');
    Route::post('User/Ajouter/Membres', [AgenceController::class, 'dashboard_agences_ajouter_membre'])->name('agence.ajouter_membres');
    Route::get('User/Tontine/{id}', [AgenceController::class, 'dashboard_agences_tontine'])->name('agence.tontine');
});

Route::middleware(['auth', 'commercial'])->group(function () {
    Route::get('Page/Commercial', [CommercialController::class, 'commercial'])->name('commercial');
    Route::get('Commercial/Agences', [CommercialController::class, 'commercial_agence'])->name('commercial.agences');
    Route::get('Commercial/Agences/{id}', [CommercialController::class, 'commercial_agence_detail'])->name('commercial_agence.detail');
    Route::get('Commercial/Zones/Liste', [CommercialController::class, 'commercial_agence_zone'])->name('commercial.zones');
    Route::get('Commercial/User/Liste', [CommercialController::class, 'commercial_chef_agence'])->name('commercial.chef_agence');
    Route::get('Commercial/Commerciaux/Liste', [CommercialController::class, 'commercial_commercial'])->name('commercial.commercial'); #fgfdgfdgdf
    Route::get('Commercial/Transactions', [CommercialController::class, 'commercial_agences_transaction'])->name('commercial.transaction');
    Route::get('Commercial/Versements', [CommercialController::class, 'commercial_agences_versement'])->name('commercial.versement');
    Route::get('Commercial/Depot/{id}', [CommercialController::class, 'commercial_depot_client'])->name('commercial.depot');
    Route::post('Commercial/Depot/{id}', [CommercialController::class, 'depot_commercial_client'])->name('depot.commercial');
    Route::get('Commercial/Retrait/{id}', [CommercialController::class, 'commercial_retrait_client'])->name('commercial.retrait');
    Route::post('Commercial/Retrait/{id}', [CommercialController::class, 'retrait_commercial_client'])->name('retrait.commercial');
    Route::get('Commercial/Reglages', [CommercialController::class, 'commercial_agences_reglage'])->name('commercial.reglage');
    Route::get('Commercial/Membres', [CommercialController::class, 'commercial_agences_membre'])->name('commercial.membres');
    Route::get('Commercial/Membre/Creer', [CommercialController::class, 'commercial_creer_membre'])->name('commercial.creer_membre');
    Route::post('Commercial/Membre/Ajouter', [CommercialController::class, 'commercial_ajouter_membre'])->name('commercial.ajouter_membre');
    Route::get('Commercial/Tontine/{id}', [CommercialController::class, 'commercial_agences_tontine'])->name('commercial.tontine');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user', [UserController::class, 'user'])->name('user');
    Route::get('User/Depot', [UserController::class, 'depot'])->name('user.depot');
    Route::get('User/Depot/Succes', [UserController::class, 'depot_user'])->name('depot.user');
    Route::get('User/Retrait', [UserController::class, 'retrait'])->name('user.retrait');
    Route::get('User/Retrait/Succes', [UserController::class, 'retrait_user'])->name('retrait.user');
    Route::get('User/Tranfert', [UserController::class, 'transfert'])->name('user.transfert');
    Route::get('User/Transfert/Succes', [UserController::class, 'transfert_user'])->name('transfert.user');
    Route::get('Tontines', [UserController::class, 'tontines'])->name('user.tontines');
    // Route::get('Integrer/Tontine/{id}', [UserController::class, 'integrer_tontine'])->name('integrer.tontine');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
