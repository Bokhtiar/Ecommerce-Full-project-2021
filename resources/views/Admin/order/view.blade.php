@extends('layouts.Admin.asset')
@section('admin_content')


<section class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>User Info</h4>
            <hr>
            <p>
                <strong>Name:</strong>{{$order->user->name}} <br>
                <strong>Phone:</strong>{{$order->phone}} <br>
                <strong>Email:</strong>{{$order->email}} <br>
            </p>
        </div>
        <div class="col-md-4">
            <h4>Shipping Address</h4>
        <hr>
                <strong>address1:</strong>{{$order->address1}} <br>
                <strong>address2:</strong>{{$order->address2}} <br>
                <strong>city:</strong>{{$order->city}} <br>
        </div>
        <div class="col-md-4">

            <h4>Details</h4>
            <hr>
            <strong>Comment:</strong>{{$order->comment}} <br>
        </div>
    </div>
</section>



<section class="my-5">
    <h3 class="text-center">Product Details</h3>
<hr>
<div class="scrapcar-main-section">
    <div class="container">
<table class="table container" >
<thead>
  <tr>
    <th scope="col">Sl</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Price</th>
    <th scope="col">Product Image</th>
    <th scope="col">Quantity</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    @php
        $total_amount = 0;
    @endphp
    @foreach (App\Models\cart::where('order_id',$order->id)->get() as $cart)
        <tr>
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->sell_price*$cart->quantity}}</td>
            <?php
            $total_amount +=$cart->product->sell_price*$cart->quantity;
            ?>
            <td>
                @php
                $image = json_decode($cart->product->featured_image)
                @endphp
                <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
            </td>
            <td>
                <form action="{{url('admin/order/porduct-quantiy/'.$cart->id)}}" method="POST">
                @csrf
                <input type="text" name="quantity" id="" value="{{$cart->quantity}}">
                <input style="" type="submit" name="btn" value="Update" id="">
                </form>
            </td>
            <td><a style="" href="{{url('admin/order/cart-delete/'.$cart->id)}}">Delete</a> </td>
        </tr>
    @endforeach

</tbody>
</table>
<div class="float-right">
    <p class="btn btn-success"><strong>Total Amount</strong>: {{$total_amount}}</p>
    <p class="btn btn-danger">
        <strong>
            @if ($order->is_complete==0)
            <a class="btn btn-sm btn-success" href="{{url('admin/order/complete/'.$order->id)}}">Complete</a>
            @endif
        </strong>
    </p>
</div><br>

</div>
</div>

</section>

@endsection
