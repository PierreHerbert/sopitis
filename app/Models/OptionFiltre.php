<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionFiltre extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
    ];

    public function optionsfiltres(){
        
        return $this->belongsToMany(
            OptionFiltre::class,
            'voyages-options-filtres', // Table Pivot
            'option-filtre_id', // Clé étrangere de la table options-filtres
            'voyage_id'); // Clé étrangère 2nd table ( voyages )
    }
}
