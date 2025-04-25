<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idCategorie';
    protected $fillable = ['nomCategorie'];
    
    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class, 'idCategorie', 'idCategorie');
    }
}