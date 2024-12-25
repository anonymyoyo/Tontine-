<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Category::create([
            "name" => "Telephones Et Tablettes",
        ]);

        Category::create([
            "name" => "Apple",
        ]);

        Category::create([
            "name" => "Informatique",
        ]);

        Category::create([
            "name" => "Gaming Et Jeux Videos",
        ]);

        Category::create([
            "name" => "Gros Electromenager",
        ]);

        Category::create([
            "name" => "Electronique",
        ]);

        Category::create([
            "name" => "Reseau Et Telecom",
        ]);

        Category::create([
            "name" => "Securite Electronique",
        ]);

        Category::create([
            "name" => "Bureau & Maison",
        ]);

        Category::create([
            "name" => "Petit Electromenager",
        ]);

        Category::create([
            "name" => "Outillage Et EPI",
        ]);

        Category::create([
            "name" => "Equipement Reseaux",
        ]);

        Category::create([
            "name" => "Supermarche & Fashion",
        ]);

        Category::create([
            "name" => "La Cave",
        ]);

        Category::create([
            "name" => "TCA Seconde Main",
        ]);

        Category::create([
            "name" => "Beaute Et Bien Etre",
        ]);

        Category::create([
            "name" => "Cinematographie",
        ]);

        Category::create([
            "name" => "Enfants Et Maternite",
        ]);
    }
}
