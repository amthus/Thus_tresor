<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        Categorie::create(['nomCategorie' => 'Trésors royaux']);
        Categorie::create(['nomCategorie' => 'Arts contemporains']);
    }
}