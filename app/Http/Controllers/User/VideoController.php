<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::where('status',1)->get();
        return view('User.video.videos',compact('videos'));
    }
}
