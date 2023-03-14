<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function options() {
        return $this->belongsTo(OptionFilter::class, 'id', 'filter_id');
    }
}
