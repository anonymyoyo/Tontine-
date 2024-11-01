<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Zone::create([
            "id"=> 1,
            "name"=> "Marcher DAKAR",
            "association_id"=> 3,
            "agence_id"=> 1,
            "user_id"=> 7,
            "image"=> "images/qnspdmYOiaHpsaI4szHTeUpqlJR6SAJGmvTqP3d0.png",
        ]);
    }
}
