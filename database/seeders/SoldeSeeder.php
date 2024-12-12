<?php

namespace Database\Seeders;

use App\Models\Solde;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoldeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Solde::create([
            "id" => 1,
            "user_id" => 8,
            "solde" => 1000,
        ]);
    }
}
