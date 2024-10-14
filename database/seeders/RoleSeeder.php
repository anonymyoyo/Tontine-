<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            'name'=>'Admin',
            'description'=>'Administrateur general de la plateforme',
            'permission'=>'Gestion des tontines et/ou associations sur la plateforme, gestion des utilisateurs et des differentes transactions'
        ]);

        Role::create([
            'name'=>'Agence',
            'description'=>'Administrateur de lagence',
            'permission'=>'Gestion des membres , voir historique',
        ]);

        Role::create([
            'name'=>'Commercial',
            'description'=>'Membre de la tontine et/ou de lassociation',
            'permission'=>'Effectuer les versements, voir historique'
        ]);

        Role::create([
            'name'=>'User',
            'description'=>'Visiteur du site',
            'permission'=>'Visite les pages sans pouvoir integrer une tontine ou une association'
        ]);

        Role::create([
            'name'=>'Association',
            'description'=>'Administrateur de lassociation',
            'permission'=>'Gestion de sa tontine et/ou son association, gesion des membres associers, voir historique',
        ]);
    }
}
