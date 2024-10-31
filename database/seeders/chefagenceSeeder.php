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
            "association_id"=> 2,
            "image"=> "images/NLPtCJvBjUhHKXTfKK5zU8eqR8okQFavc0ZQ1xdr.png",
        ]);


        ChefAgence::create([
            "name"=> "Jacques",
            "association_id"=> 1,
            "image"=> "images/oqh4DkGgkqALv2JRRfq0hJLXhDAkzPkcHJGfjrAL.png",
        ]);
    }
}
