<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'sub_category_id', 'title', 'slug', 'code',
        'sell_price', 'discount_type', 'discount_amount',
        'stock_amount', 'description', 'featured_image',
         'status',
    ];



    public function category(){
        return $this->belongsTo(category::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

}
