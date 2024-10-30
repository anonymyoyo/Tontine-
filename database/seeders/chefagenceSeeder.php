<?php

namespace Database\Seeders;

use App\Models\ChefAgence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chefagenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ChefAgence::create([
            "name"=> "Romeo Badang",
            "email"=> "romeobadang@tca.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "images/NLPtCJvBjUhHKXTfKK5zU8eqR8okQFavc0ZQ1xdr.png",
            "role_id"=> 2,
        ]);


        ChefAgence::create([
            "name"=> "Jacques",
            "email"=> "jacques@association.com",
            "phone"=> "694865872",
            "ville"=> "Douala",
            "pays"=> "Cameroon",
            "image"=> "images/oqh4DkGgkqALv2JRRfq0hJLXhDAkzPkcHJGfjrAL.png",
            "role_id"=> 2,
        ]);
    }
}
