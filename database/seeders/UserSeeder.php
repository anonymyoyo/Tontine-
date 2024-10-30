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
            "name"=> "Romeo Badang",
            "email"=> "romeobadang@tca.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "images/NLPtCJvBjUhHKXTfKK5zU8eqR8okQFavc0ZQ1xdr.png",
            "role_id"=> 2,
            'password'=>'romeobadang'
        ]);


        User::create([
            "name"=> "Jacques",
            "email"=> "jacques@association.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "images/oqh4DkGgkqALv2JRRfq0hJLXhDAkzPkcHJGfjrAL.png",
            "role_id"=> 2,
            'password'=>'jacques'
        ]);
    }
}
