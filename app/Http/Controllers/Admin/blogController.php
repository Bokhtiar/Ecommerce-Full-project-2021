<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogCategory;
use Illuminate\Support\Str;
use Auth;
use App\Models\Blog;
use Session;

class blogController extends Controller
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
        $blogs = Blog::all();
        return view('admin.Blogs.all_blog',compact('blogcategories','blogs'));
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
            'blog_category_id' => 'required',
            'tegs' => 'required',
            'featured_image' => 'required',
            'short_des' => 'required',
            'body' => 'required',
        ]);
        //profile iamge part
        $featured_image = array();
        if ($req->hasFile('featured_image')) {
            foreach ($req->featured_image as $key => $photo) {
                $path = $photo->store('uploads/blog/photos');
                array_push($featured_image, $path);
            }

        }

        Blog::create([
            'title' => $req->title,
            'slug' => Str::slug($req->title),
            'blog_category_id' => $req->blog_category_id,
            'tegs' => $req->tegs,
            'featured_image' => json_encode($featured_image),
            'short_des' => $req->short_des,
            'body' => $req->body,
            'posted_by' => Auth::id(),
        ]);
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




    public function active($id)
    {
        $active = Blog::find($id);
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
        $inactive = Blog::find($id);
        $inactive['status']=0;
        $inactive->save();
        Session::flash('inactive',' Update Sucessfully...');
        return back();
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
            'blog_category_id' => 'required',
            'tegs' => 'required',
            'short_des' => 'required',
            'body' => 'required',
        ]);


        $blog_update = Blog::find($id);
            $blog_update['title'] = $req->title;
            $blog_update['slug'] = Str::slug($req->title);
            $blog_update['blog_category_id'] = $req->blog_category_id;
            $blog_update['tegs'] = $req->tegs;
            //profile iamge part
        $featured_image = array();
        if ($req->hasFile('featured_image')) {
            foreach ($req->featured_image as $key => $photo) {
                $path = $photo->store('uploads/blog/photos');
                array_push($featured_image, $path);
            }
            $blog_update['featured_image'] = json_encode($featured_image);
        }

            $blog_update['short_des'] = $req->short_des;
            $blog_update['body'] = $req->body;
            $blog_update['posted_by'] = Auth::id();
        $blog_update->save();
        return redirect()->route('admin.blog.all-blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete_blog=Blog::find($id);
        $delete_blog->delete();
        return back();
    }
}
