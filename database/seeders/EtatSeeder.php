<?php

namespace Database\Seeders;

use App\Models\Etat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Etat::create([
            'etat'=>'Actif',
        ]);

        Etat::create([
            'etat'=>'Inactif',
        ]);

        Etat::create([
            'etat'=>'Active',
        ]);

        Etat::create([
            'etat'=>'Inactive',
        ]);

        Etat::create([
            'etat'=>'Valide',
        ]);

        Etat::create([
            'etat'=>'Non valide',
        ]);
    }
}
