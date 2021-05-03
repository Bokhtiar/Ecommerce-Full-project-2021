<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArtistCategory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'artist_category_id', 'tegs', 'image', 'short_des', 'body', 'posted_by', 'status',
    ];


    public function ArtistCategory(){
        return $this->belongsTo(ArtistCategory::class);
    }
}
