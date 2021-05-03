<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\SubCategory;
use Session;

class SubCategoryController extends Controller
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
        $subcategories = SubCategory::all();
        $categories = category::where('status',1)->get();
        return view('Admin.Category.all_subcategory',compact('categories','subcategories'));
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
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:sub_categories|max:255',
            'subcategory_image' => 'required',
        ]);
        //profile iamge part 
        $subcategory_image = array();
        if ($req->hasFile('subcategory_image')) {
            foreach ($req->subcategory_image as $key => $photo) {
                $path = $photo->store('uploads/subcategory/photos');
                array_push($subcategory_image, $path);
            }
            
        }
        
        SubCategory::create([
            'category_id'=>$req->category_id,
            'subcategory_name'=>$req->subcategory_name,
            'subcategory_image'=>json_encode($subcategory_image),
        ]);
        Session::flash('insert',' Update Sucessfully...');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $active = SubCategory::find($id);
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
        $inactive = SubCategory::find($id);
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
        $validated = $req->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required|max:255',
        ]);
        $sub_update = SubCategory::find($id);
            $sub_update['category_id']=$req->category_id;
            $sub_update['subcategory_name']=$req->subcategory_name;
            $subcategory_image = array();
            if ($req->hasFile('subcategory_image')) {
                foreach ($req->subcategory_image as $key => $photo) {
                    $path = $photo->store('uploads/subcategory/photos');
                    array_push($subcategory_image, $path);
                }
                $sub_update['subcategory_image']=json_encode($subcategory_image);
            }
            $sub_update->save();
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
        $delete = SubCategory::find($id);
        $delete->delete();
        Session::flash('delete',' Update Sucessfully...');
        return back();
    }
}
