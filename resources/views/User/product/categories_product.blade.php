@extends('layouts.User.asset')
@section('user_content')

<div class="scrapcar-main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="scrapcar-shop scrapcar-shop-grid">
                            <ul class="row">
                                @foreach ($categories_product as $product)
                                <li class="col-md-3">
                                    <figure>
                                        @php
                                            $image = json_decode($product->featured_image);
                                        @endphp
                                        <a href="shop-detail.html"><img src="{{asset($image[0])}}"
                                                                        alt=""></a>
                                        <figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a>
                                        </figcaption>
                                    </figure>
                                    <div class="scrapcar-shop-grid-text">
                                        <div class="star-rating"><span class="star-rating-box"
                                                                       style="width:100%"></span></div>
                                        <a href="404.html" class="fa fa-heart-o"></a>

                                        <h2><a href="{{url('product-detail/'.$product->slug)}}">{{$product->title}}</a></h2>
                                        @if($product->discount_type==1)
                                        <span>Tk{{$product->discount_amount}}<del> Tk{{ $product->sell_price}} </del></span>
                                        @else
                                        <span>Tk{{$product->sell_price}}</span>
                                        @endif
                                        <a href="{{url('add-to-cart/'.$product->id)}}" class="scrapcar-cart-btn"><i
                                                class="fa fa-cart-plus"></i>Add to instrumentt</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="scrapcar-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i
                                        class="fa fa-angle-left"></i></span></a></li>
                                <li><span class="page-numbers current">01</span></li>
                                <li><a class="page-numbers" href="404.html">02</a></li>
                                <li><a class="page-numbers" href="404.html">03</a></li>
                                <li><a class="page-numbers" href="404.html">04</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i
                                        class="fa fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
