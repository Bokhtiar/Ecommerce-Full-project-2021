<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Session;

class VideoController extends Controller
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
        $videos = Video::all();
        return view('Admin.Video.videos',compact('videos'));
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
            'artist_name' => 'required|max:255',
            'video' => 'required',
            'des' => 'required',
        ]);


        Video::create([
            'artist_name' => $req->artist_name,
            'video'=> $req->video,
            'des' => $req->des,
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $active = Video::find($id);
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
        $inactive = Video::find($id);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {

        $validated = $req->validate([
            'artist_name' => 'required|max:255',
            'video' => 'required',
            'des' => 'required',
        ]);


        $update = Video::find($id);
            $update['artist_name'] = $req->artist_name;
            $update['video'] = $req->video;
            $update['des'] = $req->des;
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
        $delete = Video::find($id);
        $delete->delete();
        Session::flash('update',' Update Sucessfully...');
        return back();

    }
}
