<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistCategoryController extends Controller
{
    public function all_blog($id){
        $artists = Artist::where('artist_category_id',$id)->get();
        return view('User.artist.all_blog',compact('artists'));
    }

    public function single_blog($slug){
        $artist= Artist::where('slug',$slug)->first();
        return view('User.artist.single_view',compact('artist'));
    }


    public function search(Request $req)
    {
        $search=$req->search;
        $searchs=Artist::orwhere('title','like','%'.$search.'%')
                               ->orwhere('tegs','like','%'.$search.'%')
                               ->where('status',1)
                               ->get();
        return view('User.artist.artist_searchBlog',compact('searchs'));
    }
}
