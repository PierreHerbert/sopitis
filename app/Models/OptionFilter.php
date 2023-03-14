<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionFilter extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
    ];

    public function travels(){
        
        return $this->belongsToMany(
            OptionFilter::class,
            'travels-options-filters', // Table Pivot
            'option-filter_id', // Clé étrangere de la table options-filtres
            'travel_id'); // Clé étrangère 2nd table ( voyages )
    }

    public function filter() {
        return $this->hasMany(Filter::class, 'id', 'filter_id');
    }
}
