<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dealer;
use Illuminate\Support\Str;
use Session;

class DealerController extends Controller
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
        $dealers = Dealer::all();
        return view('Admin.Dealer.all_dealer',compact('dealers'));
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
            'dealer_name' => 'required|max:255',
            'dealer_location' => 'required',
            'dealer_image' => 'required',
            'Comment' => 'required',
        ]);

        $dealer = new Dealer;
            $dealer['dealer_name'] = $req->dealer_name;
            $dealer['slug'] = Str::slug($req->dealer_name);
            $dealer['dealer_location'] = $req->dealer_location;
            
            //profile iamge part 
        $dealer_image = array();
        if ($req->hasFile('dealer_image')) {
            foreach ($req->dealer_image as $key => $photo) {
                $path = $photo->store('uploads/dealer/photos');
                array_push($dealer_image, $path);
            }
            $dealer['dealer_image'] = json_encode($dealer_image);
        }
            $dealer['Comment'] = $req->Comment;
            
        $dealer->save();
        Session::flash('insert',' insert Sucessfully...');
        return back();
    }

    /**
     * Display the specified resource.
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
    public function active($id)
    {
        $dealer = Dealer::find($id);
        $dealer['status']=1;
        $dealer->save();
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
        $dealer = Dealer::find($id);
        $dealer['status']=0;
        $dealer->save();
        Session::flash('inactive',' Update Sucessfully...');
        return back();
    }

    /**
     * Remove the specified resource from storage.
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
            'dealer_name' => 'required|max:255',
            'dealer_location' => 'required',
            'Comment' => 'required',
        ]);

        $dealer_update = Dealer::find($id);
            $dealer_update['dealer_name'] = $req->dealer_name;
            $dealer_update['slug'] = Str::slug($req->dealer_name);
            $dealer_update['dealer_location'] = $req->dealer_location;
            
            //profile iamge part 
        $dealer_image = array();
        if ($req->hasFile('dealer_image')) {
            foreach ($req->dealer_image as $key => $photo) {
                $path = $photo->store('uploads/dealer/photos');
                array_push($dealer_image, $path);
            }
            $dealer_update['dealer_image'] = json_encode($dealer_image);
        }
            $dealer_update['Comment'] = $req->Comment;
            
        $dealer_update->save();
        Session::flash('update',' insert Sucessfully...');
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
        $delete = Dealer::find($id);
        $delete->delete();
        Session::flash('delete',' Update Sucessfully...');
        return back();
    }
}
