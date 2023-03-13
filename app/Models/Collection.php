<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function collection(){
    
        return $this->belongsToMany(
            Collection::class,
            'collections-images', // Table Pivot
            'collection_id', // Clé étrangere de la table collections
            'image_id'); // Clé étrangère 2nd table ( images )
    }
}
