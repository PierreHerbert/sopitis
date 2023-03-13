<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'fichier',
        'alt',
    ];

    public function image(){
    
        return $this->belongsToMany(
            Image::class,
            'collections-images', // Table Pivot
            'image_id', // Clé étrangere de la table images
            'collection_id'); // Clé étrangère 2nd table ( collections )
    }
}
