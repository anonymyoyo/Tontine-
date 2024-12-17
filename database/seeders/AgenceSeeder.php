<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Agence::create([
            "name" => "TCA Douala",
            "email" => "tcadouala@tca.com",
            "phone" => "694865872",
            "ville" => "Douala",
            "pays" => "Cameroon",
            "user_id" => 5,
            "association_id" => 3,
            "image" => "images/0I66RqrbpB0GA0MWuRY8nSe1S3biOY3lRdsErjHq.png",
        ]);
    }
}
