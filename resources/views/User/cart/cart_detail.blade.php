@extends('layouts.User.asset')
@section('user_content')


<div class="scrapcar-main-section">
    <div class="container">
<table class="table container" >
<thead>
  <tr>
    <th scope="col">#Sl</th>
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
    @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->sell_price*$cart->quantity}} Tk</td>
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
                <form action="{{url('porduct-quantiy/'.$cart->id)}}" method="POST">
                @csrf
                <input type="text" name="quantity" id="" value="{{$cart->quantity}}">
                <input style="" type="submit" name="btn" value="Update" id="">
                </form>
            </td>
            <td><a class="btn btn-danger" style="" href="{{url('cart-delete/'.$cart->id)}}">Delete</a> </td>
        </tr>
    @endforeach

</tbody>
</table>
<div class="float-right">
    <p style="color:white;" class="btn btn-success text-light"><strong>Total Amount</strong>: {{$total_amount}}Tk</p>
    <p class="btn btn-danger"><strong><a href="{{route('checkout.create')}}">Checkout</a> </strong></p>
</div><br>

</div>
</div>

@endsection
