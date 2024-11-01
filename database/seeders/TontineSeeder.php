<?php

namespace Database\Seeders;

use App\Models\Tontine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TontineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tontine::create([
            "id"=> 1,
            "name"=> "Tontine Electro-menager",
            "description"=> "fdgdfgdfg",
            "reglement"=> "dfgdfgdfgfdg",
            "prix"=> "5000",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php297F.tmp",
        ]);

        Tontine::create([
            "id"=> 2,
            "name"=> "Tontine Simple",
            "description"=> "dfsdfsdfsd",
            "reglement"=> "fdsfsdfsdf",
            "prix"=> "500",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php951.tmp",
        ]);

        Tontine::create([
            "id"=> 3,
            "name"=> "Tontine Scolaire",
            "description"=> "sdfsfsdfsdf",
            "reglement"=> "sdfsdfsdfsdf",
            "prix"=> "1000",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php75E6.tmp",
        ]);

        Tontine::create([
            "id"=> 4,
            "name"=> "Tontine speciale fin d'annee",
            "description"=> "gfdgdfgdf",
            "reglement"=> "gdfgdfgdfg",
            "prix"=> "500",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpF2E7.tmp",
        ]);
    }
}
