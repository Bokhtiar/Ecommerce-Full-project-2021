<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\cart;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Checkout::all();
        return view('admin.order.orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($id)
    {
        $complete = Checkout::find($id);
        $complete['is_complete']=1;
        $complete->save();
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function incomplete($id)
    {
        $incomplete = Checkout::find($id);
        $incomplete['is_complete']=0;
        $incomplete->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $order = Checkout::find($id);
        return view('admin.order.view',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quantity = cart::find($id);
        $quantity['quantity']=$request->quantity;
        $quantity->save();
        Session::flash('update',' Insert Sucessfully...');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = cart::find($id);
        $delete->delete();
        Session::flash('delete',' Insert Sucessfully...');
        return back();
    }

    public function delete($id)
    {
        $delete = Checkout::find($id);
        $delete->delete();
        Session::flash('delete',' Insert Sucessfully...');
        return back();
    }
}
