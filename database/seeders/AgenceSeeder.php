<?php

namespace Database\Seeders;

use App\Models\Association;
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

        Association::create([
            "name"=> "BBP yaounde",
            "email"=> "bbp@gmail.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "user_id"=> 4,
            "association_id"=> 2,
            "image"=> "images/3C0IxgWep06kgBj9BacYFFSvYUU5jUZU3hOAJ5hR.png",
        ]);


        Association::create([
            "name"=> "Association EDEA",
            "email"=> "associationedea@association.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "user_id"=> 5,
            "association_id"=> 1,
            "image"=> "images/EPIAewOPGFX1r36Af4cFIFmEytOdIdMtjVGDjXVd.png",
        ]);
    }
}
