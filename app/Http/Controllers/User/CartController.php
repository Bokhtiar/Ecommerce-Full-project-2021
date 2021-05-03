<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart($id)
    {

        if(cart::where('product_id',$id)->where('order_id',null)->where('user_id',Auth::id())->where('ip_address',request()->ip())->first()){
            $update = cart::where('product_id',$id)->where('order_id',null)->where('ip_address',request()->ip())->first();
            $update['quantity']=$update->quantity+1;
            $update->save();
            return back();
        }else{
            cart::create([
                'user_id'=> Auth::id(),
                'product_id'=> $id,
                'ip_address'=> request()->ip(),
            ]);
            Session::flash('cart',' Insert Sucessfully...');
            return back();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart_details()
    {
        $carts = cart::item_cart();
        return view('User.cart.cart_detail',compact('carts'));
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
    public function quantity_update(Request $request ,$id)
    {
        $quantity = cart::find($id);
        $quantity['quantity']=$request->quantity;
        $quantity->save();
        Session::flash('update',' Insert Sucessfully...');
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
    public function update(Request $request, $id)
    {
        //
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
        return redirect('/');
    }
}
