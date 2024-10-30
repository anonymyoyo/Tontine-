<?php

namespace Database\Seeders;

use App\Models\Association;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Association::create([
            "name"=> "Association",
            "email"=> "bitinza@association.com",
            "description"=> "fdgffgdfg",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "reglement"=> "dfgdfgd",
            "user_id"=> 2,
            "image"=> "images/xbQm5lFBaRSo7RbevOOf3N1vwmR9Xa5BYxLTrNXM.png",
        ]);

        Association::create([
            "name"=> "BBP",
            "email"=> "bbp@gmail.com",
            "description"=> "sdfsdfdsf",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "reglement"=> "sfsfsfsfsdf",
            "user_id"=> 3,
            "image"=> "images/4Ky2OIfpwBonvhHtgyWd6QmHIkxVseVM9rWlV2pU.png",
        ]);
    }
}
