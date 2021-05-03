<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone', 'address1', 'address2', 'city', 'user_id', 'comment', 'is_complete', 'is_incomplete',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
