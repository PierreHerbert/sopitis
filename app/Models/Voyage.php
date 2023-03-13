<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

   


    protected $fillable = [
        'nom',
        'slug',
        'metaTitre',
        'metaDescription',
        'prix',
        'duree',
        'descriptionCourte',
        'description',
    ];

    public function voyage(){
    
        return $this->belongsToMany(
            Voyage::class,
            'voyages-options-filtres', // Table Pivot
            'voyage_id', // Clé étrangere de la table voyages
            'option-filtre_id'); // Clé étrangère 2nd table ( options-filtres )
    }
}
