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
                <form action="{{url('porduct-quantiy/'.$cart->id)}}" method="POST">
                @csrf
                <input type="text" name="quantity" id="" value="{{$cart->quantity}}">
                <input style="" type="submit" name="btn" value="Update" id="">
                </form>
            </td>
            <td><a style="" href="{{url('cart-delete/'.$cart->id)}}">Delete</a> </td>
        </tr>
    @endforeach

</tbody>
</table>
<div class="float-right">
    <p class="btn btn-success"><strong>Total Amount</strong>: {{$total_amount}}</p>
    <p class="btn btn-danger"><strong><a href="{{url('/')}}">Countinue Shoping</a> </strong></p>
</div><br>

</div>
</div>


<!--checkout info-->

<div class="scrapcar-main-content">

    <div class="scrapcar-main-section">
    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <div class="scrapcar-contact-wrap">
    <div class="row">
        <h3 class="text-center">Shipping Address</h3><hr>
    <div class="col-md-3">
    <div class="scrapcar-contact-info">
    <ul>
    <li>
    <div class="scrapcar-contact-info-text">
    <i class="automechanic-icon automechanic-technology-12"></i>
    <h5>Call Us Now At </h5>
    <span>(012) 345 6789</span>
    <span>00 98 765 432</span>
    </div>
    </li>
    <li>
    <div class="scrapcar-contact-info-text">
    <i class="automechanic-icon automechanic-interface2"></i>
    <h5>Mail Us At</h5>
    <a href="http://webmarce.com/cdn-cgi/l/email-protection#1b62746e697f74767a72755b757a767e35787476"><span class="__cf_email__" data-cfemail="d8b1b6beb798bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</span></a>
    <a href="http://webmarce.com/cdn-cgi/l/email-protection#0d7462787f6962606c64634d636c6068236e6260"><span class="__cf_email__" data-cfemail="f6979495b68595849786959784d895999b">[email&#160;protected]</span></a>
    </div>
    </li>
    <li>
    <div class="scrapcar-contact-info-text">
    <i class="automechanic-icon automechanic-location"></i>
    <h5>Find Us At</h5>
    <span>Lorem ipsum dolor sit amet, consectetur</span>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-9">
    <div class="scrapcar-contact-form">
    <form method="POST" action="{{route('checkout.store')}}">
        @csrf
    <ul>
    <li>
    <label class="title">Phone Number:</label>
    <input type="text" value="" placeholder="Type Your Phone Number" name="phone" onblur="if(this.value == '') { this.value ='Type Your Name'; }" onfocus="if(this.value =='Type Your Name') { this.value = ''; }">
    <i class="fa fa-user"></i>
    </li>
    <li>
    <label class="title">Address 1:</label>
    <input type="text" name="address1" value="" placeholder="Type Your Address 1">
    <i class="fa fa-envelope"></i>
    </li>
    <li>
    <label class="title">Address 2:</label>
    <input type="text" value="" placeholder=" Type Your Address 2" name="address2">
    <i class="fa fa-user"></i>
    </li>
    <li>
    <label class="title">City:</label>
    <input type="text" value="" placeholder="Type Your city" name="city" >
    <i class="fa fa-globe"></i>
    </li>
    <li class="full-width">
    <label class="title">Comment
    :</label>
    <textarea placeholder="Type Your Comment"></textarea>
    <i class="fa fa-commenting"></i>
    </li>
    <li><label class="submit-btn"><input type="submit" value="Send Now"> <i class="automechanic-icon automechanic-arrows22"></i></label></li>
    </ul>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>


    <div class="scrapcar-footer-newslatter">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-newslatter-text">
    <h2>Find a branch near you</h2>
    <form>
    <input type="text" value="Type your location" onblur="if(this.value == '') { this.value ='Type your location'; }" onfocus="if(this.value =='Type your location') { this.value = ''; }">
    <label><i class="fa fa-search"></i><input type="submit" value="Find my branch"></label>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>




@endsection
