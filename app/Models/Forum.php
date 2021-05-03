<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'des', 'status', 'user_id', 'slug',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
