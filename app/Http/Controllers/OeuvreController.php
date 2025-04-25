<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Artiste;
use App\Models\Categorie;

use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    public function index()
    {
        $oeuvres = Oeuvre::with(['categorie', 'artiste'])->get();
        return view('oeuvres.index', compact('oeuvres'));
    }
    
    public function create()
    {
        $categories = Categorie::all();
        $artistes = Artiste::all();
        return view('oeuvres.create', compact('categories', 'artistes'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'annee' => 'nullable|integer',
            'idArtiste' => 'nullable|exists:artistes,idArtiste',
            'idCategorie' => 'required|exists:categories,idCategorie',
        ]);
        
        Oeuvre::create($validatedData);
        
        return redirect()->route('oeuvres.index')->with('success', 'Œuvre ajoutée avec succès');
    }
    
    public function edit(Oeuvre $oeuvre)
    {
        $categories = Categorie::all();
        $artistes = Artiste::all();
        return view('oeuvres.edit', compact('oeuvre', 'categories', 'artistes'));
    }
    
    public function update(Request $request, Oeuvre $oeuvre)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'annee' => 'nullable|integer',
            'idArtiste' => 'nullable|exists:artistes,idArtiste',
            'idCategorie' => 'required|exists:categories,idCategorie',
        ]);
        
        $oeuvre->update($validatedData);
        
        return redirect()->route('oeuvres.index')->with('success', 'Œuvre mise à jour avec succès');
    }
    
    public function destroy(Oeuvre $oeuvre)
    {
        $oeuvre->delete();
        return redirect()->route('oeuvres.index')->with('success', 'Œuvre supprimée avec succès');
    }
}
