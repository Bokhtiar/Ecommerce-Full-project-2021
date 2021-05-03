<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogCategory;
use Session;

class BlogCategoryController extends Controller
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
        $blogcategories = blogCategory::all();
        return view('Admin.Blogs.BlogCategory',compact('blogcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validated = $req->validate([
            'category_name' => 'required|unique:blog_categories|max:255',
            'category_image' => 'required',
        ]);

        //profile iamge part
        $category_image = array();
        if ($req->hasFile('category_image')) {
            foreach ($req->category_image as $key => $photo) {
                $path = $photo->store('uploads/blogcategory/photos');
                array_push($category_image, $path);
            }
        }

        blogCategory::create([
            'category_name'=>$req->category_name,
            'category_image'=>json_encode($category_image),
        ]);
        Session::flash('insert',' Update Sucessfully...');
        return back();
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $active = blogCategory::find($id);
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
        $inactive = blogCategory::find($id);
        $inactive['status']=0;
        $inactive->save();
        Session::flash('inactive',' Update Sucessfully...');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $validated = $req->validate([
            'category_name' => 'required|max:255',

        ]);


        $update = blogCategory::find($id);

            $update['category_name']=$req->category_name;
            $category_image = array();
        if ($req->hasFile('category_image')) {
            foreach ($req->category_image as $key => $photo) {
                $path = $photo->store('uploads/category/photos');
                array_push($category_image, $path);
            }
            $update['category_image']=json_encode($category_image);
        }
        $update->save();
        Session::flash('update',' Update Sucessfully...');
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
        $delete = BlogCategory::find($id);
        $delete->delete();
        Session::flash('delete',' Delete Sucessfully...');
        return back();
    }
}
