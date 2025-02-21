<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'superadmin@icloud.com',
            'phone' => '694865872',
            'ville' => 'Douala',
            'pays' => 'Cameroun',
            'image' => 'images/yoyo.png',
            'role_id' => '1',
            'password' => 'superadmin'
        ]);

        User::create([
            "name" => "BITINZA",
            "email" => "bitinza@tca.com",
            "phone" => "694865812",
            "ville" => "Douala",
            "pays" => "Cameroon",
            "image" => "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php8AFE.tmp",
            "role_id" => 5,
            "association_id" => "1",
            'password' => 'bitinza'
        ]);

        User::create([
            "name" => "Moussi Teng Pierre Dilan",
            "email" => "moussidilan@gmail.com",
            "phone" => "694865822",
            "ville" => "Kribi",
            "pays" => "Cameroon",
            "image" => "C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp",
            "role_id" => 5,
            "association_id" => "2",
            'password' => 'moussidilan'
        ]);

        User::create([
            "name" => "BITINZA",
            "email" => "superadmin@gmail.com",
            "phone" => "694865832",
            "ville" => "Douala",
            "pays" => "Cameroon",
            "image" => "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php33BF.tmp",
            "association_id" => null,
            "com_association_id" => null,
            "com_agence_id" => null,
            "role_id" => 5,
            "association_id" => "3",
            'password' => 'admin123'
        ]);

        User::create([
            "name" => "Emmanuel",
            "email" => "emmanuel@tca.com",
            "phone" => "694865842",
            "ville" => "Douala",
            "pays" => "Cameroon",
            "image" => "images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png",
            "association_id" => "3",
            "agence_id" => "1",
            "com_association_id" => null,
            "com_agence_id" => null,
            "role_id" => 2,
            'password' => 'marole'
        ]);

        User::create([
            "name" => "joseph",
            "email" => "joseph@tca.com",
            "phone" => "1111",
            "ville" => "Bertoua",
            "pays" => "Cameroon",
            "image" => "images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png",
            "association_id" => "3",
            "agence_id" => "2",
            "com_association_id" => null,
            "com_agence_id" => null,
            "role_id" => 2,
            'password' => 'joseph'
        ]);

        User::create([
            "name" => "Emauel",
            "email" => "superadmi1@gmail.com",
            "phone" => "694865852",
            "ville" => "Douala",
            "pays" => "Cameroon",
            "image" => "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php1A3B.tmp",
            "association_id" => null,
            "com_association_id" => "3",
            "com_agence_id" => null,
            "role_id" => 3,
            'password' => 'emauel'
        ]);

        User::create([
            "name" => "Serges",
            "email" => "serges@commercial.com",
            "phone" => "694865862",
            "ville" => "Douala",
            "pays" => null,
            "image" => "images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png",
            "association_id" => null,
            "com_association_id" => "3",
            "com_agence_id" => "1",
            "role_id" => 3,
            'password' => 'serges'
        ]);

        User::create([
            "name" => "bafang",
            "email" => "badang@gmail.com",
            "phone" => "694865882",
            "ville" => "Douala",
            "pays" => null,
            "image" => "images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png",
            "association_id" => 3,
            "com_association_id" => "3",
            "mem_agence_id" => "1",
            "mem_com_id" => "7",
            "mem_tontine_id" => "1",
            "role_id" => 4,
            'password' => 'badang',
        ]);

        User::create([
            "name" => "Martin",
            "email" => "martin@membre.com",
            "phone" => "694865892",
            "ville" => "Douala",
            "pays" => null,
            "image" => "images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png",
            "association_id" => 3,
            "com_association_id" => "3",
            "mem_agence_id" => "1",
            "mem_com_id" => "7",
            "mem_tontine_id" => "1",
            "role_id" => 4,
            'password' => 'martin',
        ]);
    }
}
