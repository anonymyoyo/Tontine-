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
            "email_verified_at"=> null,
            "created_at"=> "2024-10-29T22:46:21.000000Z",
            "updated_at"=> "2024-10-29T22:46:21.000000Z"
        ]);

        User::create([
            "name"=> "Moussi Teng Pierre Dilan",
            "email"=> "moussidilan@gmail.com",
            "phone"=> "694865872",
            "ville"=> "Kribi",
            "pays"=> "Cameroon",
            "image"=> "C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp",
            "role_id"=> 5,
            "email_verified_at"=> null,
            "created_at"=> "2024-10-29T23:02:59.000000Z",
            "updated_at"=> "2024-10-29T23:02:59.000000Z"
        ]);
    }
}
