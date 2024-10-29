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
    }
}
