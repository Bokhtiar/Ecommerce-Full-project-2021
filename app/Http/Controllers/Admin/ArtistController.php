<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\ArtistCategory;
use Session;
use Illuminate\Support\Str;
use Auth;

class ArtistController extends Controller
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
    {   $artist_categories = ArtistCategory::where('status',1)->get();
        $artists = Artist::all();
        return view('admin.Artist.all_blog_artist',compact('artists','artist_categories'));
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
            'title' => 'required|max:255',
            'artist_category_id' => 'required',
            'tegs' => 'required',
            'image' => 'required',
            'short_des' => 'required',
            'body' => 'required',
        ]);
        //profile iamge part 
        $image = array();
        if ($req->hasFile('image')) {
            foreach ($req->image as $key => $photo) {
                $path = $photo->store('uploads/artist/photos');
                array_push($image, $path);
            }
            
        }
        
        Artist::create([
            'title' => $req->title,
            'slug' => Str::slug($req->title),
            'artist_category_id' => $req->artist_category_id,
            'tegs' => $req->tegs,
            'image' => json_encode($image),
            'short_des' => $req->short_des,
            'body' => $req->body,
            'posted_by' => Auth::id(),
        ]);
        Session::flash('insert',' Update Sucessfully...');
        return back();
    }



    public function active($id)
    {
        $active = Artist::find($id);
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
        $inactive = Artist::find($id);
        $inactive['status']=0;
        $inactive->save();
        Session::flash('inactive',' Update Sucessfully...');
        return back();
    }
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
            'title' => 'required|max:255',
            'artist_category_id' => 'required',
            'tegs' => 'required',
            'short_des' => 'required',
            'body' => 'required',
        ]);
      
        
        
        $update = Artist::find($id);
            $update['title'] = $req->title;
            $update['slug'] = Str::slug($req->title);
            $update['artist_category_id'] = $req->artist_category_id;
            $update['tegs'] = $req->tegs;
            $image = array();
            if ($req->hasFile('image')) {
                foreach ($req->image as $key => $photo) {
                    $path = $photo->store('uploads/artist/photos');
                    array_push($image, $path);
                } 
                $update['image'] = json_encode($image);
            }
            $update['short_des'] = $req->short_des;
            $update['body'] = $req->body;
            $update['posted_by'] = Auth::id();
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
        $delete = Artist::find($id);
        $delete->delete();
        Session::flash('delete',' Update Sucessfully...');
        return back();
    }
}
