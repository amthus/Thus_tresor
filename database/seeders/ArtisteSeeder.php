<?php

namespace Database\Seeders;

use App\Models\Artiste;
use Illuminate\Database\Seeder;

class ArtisteSeeder extends Seeder
{
    public function run()
    {
        Artiste::create([
            'nom' => 'TOKOUDAGBA',
            'prenom' => 'Cyprien',
            'telephone' => +22965563933
        ]);
        
        Artiste::create([
            'nom' => 'PEDE',
            'prenom' => 'Apollinaire',
            'telephone' => 333965565
        ]);
    }
}