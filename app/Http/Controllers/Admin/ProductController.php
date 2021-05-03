<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('Admin.product.products',compact('products', 'categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $product = new Product;
            $product['category_id'] = $req->category_id;
            $product['sub_category_id'] =$req->sub_category_id;
            $product['title']=$req->title;
            $product['slug'] = Str::slug($req->title);

            $featured_image = array();
            if ($req->hasFile('featured_image')) {
                foreach ($req->featured_image as $key => $photo) {
                    $path = $photo->store('uploads/product/photos');
                    array_push($featured_image, $path);
                }
                $product['featured_image']=json_encode($featured_image);
            }
            $product['code'] = $req->code;
            $product['sell_price'] =$req->sell_price;
            $product['discount_type'] = $req->discount_type;
            $product['discount_amount'] = $req->discount_amount;
            $product['stock_amount'] =$req->stock_amount;
            $product['description'] =$req->description;

            $product_video = array();
            if ($req->hasFile('product_video')) {
                foreach ($req->product_video as $key => $photo) {
                    $path = $photo->store('uploads/video/photos');
                    array_push($product_video, $path);
                }
                $product['video']=json_encode($product_video);
            }

      $product->save();
        Session::flash('insert',' Insert Sucessfully...');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $active = Product::find($id);
        $active['status']=1;
        $active->save();
        Session::flash('active',' Update Sucessfully...');
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inactive($id)
    {
        $inactive = Product::find($id);
        $inactive['status']=0;
        $inactive->save();
        Session::flash('inactive',' Update Sucessfully...');
        return back();
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $product = Product::find($id);
            $product['category_id'] = $req->category_id;
            $product['sub_category_id'] =$req->sub_category_id;
            $product['title']=$req->title;
            $product['slug'] = Str::slug($req->title);

            $featured_image = array();
            if ($req->hasFile('featured_image')) {
                foreach ($req->featured_image as $key => $photo) {
                    $path = $photo->store('uploads/product/photos');
                    array_push($featured_image, $path);
                }
                $product['featured_image']=json_encode($featured_image);
            }
            $product['code'] = $req->code;
            $product['sell_price'] =$req->sell_price;
            $product['discount_type'] = $req->discount_type;
            $product['discount_amount'] = $req->discount_amount;
            $product['stock_amount'] =$req->stock_amount;
            $product['description'] =$req->description;

            $product_video = array();
            if ($req->hasFile('product_video')) {
                foreach ($req->product_video as $key => $photo) {
                    $path = $photo->store('uploads/video/photos');
                    array_push($product_video, $path);
                }
                $product['video']=json_encode($product_video);
            }

      $product->save();
        Session::flash('update',' Insert Sucessfully...');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        Session::flash('delete',' Insert Sucessfully...');
        return back();
    }
}
