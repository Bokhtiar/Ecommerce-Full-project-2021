<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'artist_cat_name', 'slug', 'image', 'status',
    ];
    
}
