<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderSuccessfully;
use Illuminate\Support\Facades\Mail;
use Session;

class CheckoutController extends Controller
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
    {   $carts = cart::item_cart();
        return view('User.checkout.create',compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkout= new Checkout;
        $checkout['phone'] = $request->phone;
        $checkout['address1'] = $request->address1;
        $checkout['address2'] = $request->address2;
        $checkout['city'] = $request->city;
        $checkout['user_id'] = Auth::id();
        $checkout['comment'] = $request->comment;
      $checkout->save();
      foreach (cart::item_cart() as $cart) {
              $cart['order_id']=$checkout->id;
              $cart->save();
      }
      Session::flash('order',' Insert Sucessfully...');
      $email=Auth::User()->email;
      Mail::to($email)->send(new OrderSuccessfully($checkout));
    return redirect('/');
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
        //
    }
}
