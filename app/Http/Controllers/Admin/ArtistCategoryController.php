<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArtistCategory;
use Illuminate\Support\Str;
use Session;

class ArtistCategoryController extends Controller
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
        $artisatCategory = ArtistCategory::all();
        return view('Admin.Artist.all_artist',compact('artisatCategory'));
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
            'artist_cat_name' => 'required|unique:artist_categories|max:255',
            'image' => 'required',
        ]);
        //profile iamge part 
        $image = array();
        if ($req->hasFile('image')) {
            foreach ($req->image as $key => $photo) {
                $path = $photo->store('uploads/Artist/category/photos');
                array_push($image, $path);
            }
            
        }
        ArtistCategory::create([
            'artist_cat_name'=>$req->artist_cat_name,
            'slug'=>Str::slug($req->artist_cat_name),
            'image'=>json_encode($image),
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
        $active = ArtistCategory::find($id);
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
        $inactive = ArtistCategory::find($id);
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
            'artist_cat_name' => 'required|max:255',
        ]);
        
        

        $update = ArtistCategory::find($id);
            $update['artist_cat_name']=$req->artist_cat_name;
            $update['slug']=Str::slug($req->artist_cat_name);

            $image = array();
            if ($req->hasFile('image')) {
                foreach ($req->image as $key => $photo) {
                    $path = $photo->store('uploads/Artist/category/photos');
                    array_push($image, $path);
                }
                $update['image']=json_encode($image);
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
        $delete = ArtistCategory::find($id);
        $delete->delete();
        Session::flash('delete',' Update Sucessfully...');
        return back();
    }
}
