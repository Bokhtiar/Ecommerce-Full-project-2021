<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->hasMnay(User::class);
      }
}
