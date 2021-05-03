<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'dealer_name', 'slug', 'dealer_location', 'dealer_image', 'Comment', 'status'
    ];
}
