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
            'name'=>'Admin',
            'email'=>'superadmin@icloud.com',
            'phone'=>'694865872',
            'ville'=>'Douala',
            'pays'=>'Cameroun',
            'image'=>'images/5QHTgvFln3hvqaTuFgIwdEzTGGwzhKgLf0dlqIsE.png',
            'role_id'=>'1',
            'password'=>'superadmin'
        ]);

        User::create([
            "name"=> "BITINZA",
            "email"=> "bitinza@tca.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php8AFE.tmp",
            "role_id"=> 5,
            'password'=>'bitinza'
        ]);

        User::create([
            "name"=> "Moussi Teng Pierre Dilan",
            "email"=> "moussidilan@gmail.com",
            "phone"=> "694865872",
            "ville"=> "Kribi",
            "pays"=> "Cameroon",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp",
            "role_id"=> 5,
            'password'=>'moussidilan'
        ]);

        User::create([
            "id"=> 4,
            "name"=> "BITINZA",
            "email"=> "superadmin@gmail.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php33BF.tmp",
            "association_id"=> null,
            "com_association_id"=> null,
            "com_agence_id"=> null,
            "role_id"=> 5,
            'password'=>'admin123'
        ]);

        User::create([
            "id"=> 5,
            "name"=> "Marole",
            "email"=> "marole@tca.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png",
            "association_id"=> "3",
            "com_association_id"=> null,
            "com_agence_id"=> null,
            "role_id"=> 2,
            'password'=>'marole'
        ]);

        User::create([
            "id"=> 7,
            "name"=> "Emauel",
            "email"=> "superadmi1@gmail.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\php1A3B.tmp",
            "association_id"=> null,
            "com_association_id"=> "3",
            "com_agence_id"=> null,
            "role_id"=> 3,
            'password'=>'emauel'
        ]);
    }
}
