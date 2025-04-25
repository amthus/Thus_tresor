<?php
namespace Database\Seeders;

use App\Models\Oeuvre;
use App\Models\Artiste;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class OeuvreSeeder extends Seeder
{
    public function run()
    {
        $categorieRoyale = Categorie::where('nomCategorie', 'Trésors royaux')->first();
        $categorieContemporaine = Categorie::where('nomCategorie', 'Arts contemporains')->first();
        $artistePede = Artiste::where('nom', 'PEDE')->first();
        
        Oeuvre::create([
            'nom' => 'Trône d\'apparat du Roi GHEZO',
            'description' => 'Trône royal provenant du palais d\'Abomey',
            'annee' => null,
            'idArtiste' => null,
            'idCategorie' => $categorieRoyale->idCategorie
        ]);
        
        Oeuvre::create([
            'nom' => 'Ekelodjouti',
            'description' => 'Œuvre contemporaine',
            'annee' => 2018,
            'idArtiste' => $artistePede->idArtiste,
            'idCategorie' => $categorieContemporaine->idCategorie
        ]);
    }
}