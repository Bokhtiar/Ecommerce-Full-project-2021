<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name', 'category_image', 'status',
    ];


}
