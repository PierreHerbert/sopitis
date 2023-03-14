<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    protected $fillable = [
        'name',
        'metaTitle',
        'metaDescription',
        'price',
        'duration',
        'shortDescription',
        'description',
    ];

    protected $guarded = [
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function filters(){
    
        return $this->belongsToMany(
            Travel::class,
            'travels-options-filters', // Table Pivot
            'travel_id', // Clé étrangere de la table voyages
            'option-filter_id'); // Clé étrangère 2nd table ( options-filtres )
    }

    public function image() {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }
}
