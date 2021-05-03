
@extends('layouts.User.asset')
@section('custom_css')
    <link rel="stylesheet" href="{{asset('frontend/piczoom')}}/css/example.css" />
	<link rel="stylesheet" href="{{asset('frontend/piczoom')}}/css/pygments.css" />
	<link rel="stylesheet" href="{{asset('frontend/piczoom')}}/css/easyzoom.css" />
@endsection
@section('user_content')

<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Product detail</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="index-2.html">Home</a></li>
    <li>Pages</li>
    <li class="active">Product detail</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="scrapcar-main-content">

    <div class="scrapcar-main-section">
    <div class="container">
    <div class="row">

    <aside class="col-md-3">
    <div class="scrapcar-sidebar-colr">



    <div class="widget widget_recent_links">
    <h2 class="widget-heading">Cetagories</h2>
    <ul>

        @foreach ($categories as $category)
        @php
        $total = App\Models\Product::where('category_id',$category->id)->count()
        @endphp
        <li><a href="{{url('categories-product/'.$category->id)}}">{{$category->category_name}}</a> {{$total}} </li>
        @endforeach

    </ul>
    </div>


    <div class="widget widget_recent_post">
    <h2 class="widget-heading">Recent Posts</h2>
    <ul>
        @foreach ($products as $product)
        <li>
            @php
                $image = json_decode($product->featured_image);
            @endphp
            <figure><a href="{{url('product-detail/'.$product->slug)}}"><img src="{{asset($image[0])}}" alt=""></a></figure>
            <div class="widget-recent2-text">
            <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
            <h2><a href="{{url('product-detail/'.$product->slug)}}">{{$product->title}}</a></h2>
            @if($product->discount_type==0)
            <span>{{$product->sell_price}} Tk</span>
            @else
            <span>{{$product->sell_price}} TK<del>{{$product->discount_amount}}Tk</del></span>
            @endif

            </div>
            </li>
        @endforeach
    </ul>
    </div>




    </div>
    </aside>

    <div class="col-md-9">
    <div class="scrapcar-shop-wrap">
    <div class="row">
    <div class="col-md-7">

    <div class="scrapcar-shop-thumb">
    <span><img src="{{asset('frontend')}}/extra-images/shop-Thumb.html" alt=""></span>
    <span><img src="{{asset('frontend')}}/extra-images/shop-Thumb.html" alt=""></span>
    <span><img src="{{asset('frontend')}}/extra-images/shop-Thumb.html" alt=""></span>
    <span><img src="{{asset('frontend')}}/extra-images/shop-Thumb.html" alt=""></span>
    </div>
    <div class="scrapcar-shop-thumb-list ">

            @php
                $images = json_decode($product->featured_image);
            @endphp
    <ul class="thumbnails">
        <li>
            <a href="">
                @foreach ($images as $image)
                <span ><img style="height:100px; width:100% " src="{{asset($image)}}" alt=""></span>
                @endforeach
            </a>
        </li>
    </ul>



    </div>
    <br>
    @php
    $image = json_decode($product->featured_image);
    @endphp
    <div  class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
            <a href="">
            <img  src="{{asset($image[0])}}" alt="">
            </a>
    </div>
    </div>
    <div class="col-md-5">
    <a href="404.html" class="scrapcar-back-btn"><i class="fa fa-caret-left"></i> Back</a>
    <ul class="scrapcar-shop-post">
    <li><a href="404.html" class="fa fa-caret-left"></a></li>
    <li><a href="404.html" class="fa fa-caret-right"></a></li>
    </ul>
    <div class="scrapcar-shop-detail-text">
    <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
    <h2>{{$product->title}}</h2>
    <h5>
        @if($product->discount_type==0)
            <span>{{$product->sell_price}} Tk</span>
            @else
            <span>{{$product->sell_price}}<del>{{$product->discount_amount}} Tk</del></span>
            @endif
    </h5>
    <span>Available: <small>In Stock</small></span>
    <p>{!!$product->description!!}.</p>
    <div class="scrapcar-number-select">

    <a href="{{url('add-to-cart/'.$product->id)}}" class="scrapcar-simple-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a>

    </div>
    <ul class="scrapcar-shop-category">
    <li class="active"><a href="404.html">Category:</a> </li>
    <li><a href="404.html">Cars,</a></li>
    <li><a href="404.html">Motors,</a></li>
    <li><a href="404.html">Automotive</a></li>
    </ul>
    <ul class="scrapcar-shop-social">
    <li><span>Share:</span></li>
    <li class="facebook-border"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
    <li class="twitter-border"><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
    <li class="google-border"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
    <li class="google-border"><a href="https://www.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="scrapcar-shop-tabs">



    <div class="tab-content">
    <h2 class="scrapcar-section-heading">Related Product</h2><hr>
    <div class="scrapcar-shop scrapcar-shop-grid scrapcar-shop-related">
    <ul class="row">
        @foreach (App\Models\Product::inRandomOrder()->where('category_id',$product->category_id)->where('status',1)->take(3)->get(); as $product)
        <li class="col-md-4">
            @php
                $image = json_decode($product->featured_image);
            @endphp
            <figure>
            <a href="{{url('product-detail/'.$product->slug)}}"><img src="{{asset($image[0])}}" alt=""></a>
            <figcaption><a href="{{url('product-detail/'.$product->slug)}}"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
            </figure>
            <div class="scrapcar-shop-grid-text">
            <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
            <h2><a href="{{url('product-detail/'.$product->slug)}}">{{$product->title}}</a></h2>
            @if($product->discount_type==0)
            <span>{{$product->sell_price}} Tk</span>
            @else
            <span>{{$product->sell_price}}<del>{{$product->discount_amount}} Tk</del></span>
            @endif

            <a href="{{url('add-to-cart/'.$product->id)}}" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
            </div>
            </li>
        @endforeach



    </ul>
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



@section('custom_script')



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{asset('frontend/piczoom')}}/dist/easyzoom.js"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>

@endsection
