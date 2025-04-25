<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idArtiste';
    protected $fillable = ['nom', 'prenom', 'telephone'];
    
    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class, 'idArtiste', 'idArtiste');
    }
    
    public function nomComplet()
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
