<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function product_details($slug){
        $product = Product::where('slug',$slug)->where('status',1)->get();
        $products = Product::inRandomOrder()->where('status',1)->take(5)->get();
        $releted_products = Product::inRandomOrder()->where('status',1)->take(3)->get();
        $categories = Category::where('status',1)->get();
        return view('User.product.detail',compact('product','categories','products','releted_products'));
    }


    public function categories_product($id){
        $categories_product = Product::where('category_id',$id)->where('status',1)->get();
        return view('User.product.categories_product',compact('categories_product'));
    }
}
