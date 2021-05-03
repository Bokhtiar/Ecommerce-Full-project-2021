@extends('layouts.User.asset')
@section('user_content')

<div class="scrapcar-banner">
    <div class="scrapcar-banner-layer">
        <div class="scrapcar-banner-tr">
            <span class="scrapcar-banner-transparent"></span>
            <span class="scrapcar-banner-image"
                  style="background: url({{asset('frontend')}}/images/banner.jpg); background-size: cover;"></span>
        </div>
        <div class="scrapcar-banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="scrapcar-banner-quota">
                            <h2>Get your <strong>free</strong> instant</h2>
                            <h3>Quotation</h3>
                            <form method="POST" action="{{route('store/valuation')}}">
                                @csrf
                                <ul>
                                    <li class="number">
                                        <label>Contact Number:</label>
                                        <i class="fa fa-phone"></i>
                                        <input type="text" name="phone" value=""
                                               onblur="if(this.value == '') { this.value =''; }"
                                               onfocus="if(this.value =='') { this.value = ''; }">
                                    </li>
                                    <li>
                                        <label>Description:</label>
                                        <textarea name="msg" id="" cols="30" rows="4" class="form-control"></textarea>
                                    </li>
                                    <li class="submit">
                                        <label><i class="automechanic-icon automechanic-tool"></i><input type="submit" value="get My Quotation Now"></label>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="scrapcar-banner-text">
                            <h1>Welcome to Beshi Joss Customs</h1>
                            <p>
                                Welcome to the official website of Beshi Joss Customs, where we help you build your dream musical instrument. Get a free quotation.
                            </p>
                            <a href="#" class="scrapcar-simple-btn"><i class="fa fa-product-hunt"></i>Visit the product section</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-banner-layer">
        <div class="scrapcar-banner-tr">
            <span class="scrapcar-banner-transparent"></span>
            <span class="scrapcar-banner-image"
                  style="background: url({{asset('frontend')}}/images/banner2.jpg); background-size: cover;"></span>
        </div>
        <div class="scrapcar-banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="scrapcar-banner-quota">
                            <h2>Get your <strong>free</strong> instant</h2>
                            <h3>Quotation</h3>
                            <form method="POST" action="{{route('store/valuation')}}">
                                @csrf
                                <ul>
                                    <li class="number">
                                        <label>Contact Number:</label>
                                        <i class="fa fa-phone"></i>
                                        <input type="text" name="phone" value=""
                                               onblur="if(this.value == '') { this.value =''; }"
                                               onfocus="if(this.value =='') { this.value = ''; }">
                                    </li>
                                    <li>
                                        <label>Description:</label>
                                        <textarea name="msg" id="" cols="30" rows="4" class="form-control"></textarea>
                                    </li>
                                    <li class="submit">
                                        <label><i class="automechanic-icon automechanic-tool"></i><input type="submit" value="get My Quotation Now"></label>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="scrapcar-banner-text">
                            <h1>Welcome to Beshi Joss Customs</h1>
                            <p>
                                Welcome to the official website of Beshi Joss Customs, where we help you build your dream musical instrument. Get a free quotation.
                            </p>
                            <a href="#" class="scrapcar-simple-btn"><i class="fa fa-product-hunt"></i>Visit the product section</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scrapcar-main-content scrapcar-content-space">

    <div class="scrapcar-main-section scrapcar-modernfull">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-fancy-title">
                        <h2>Find best instrument for you<small></small></h2>
                        <span>Best instrument in bangladesh.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrapcar-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <div class="scrapcar-shop scrapcar-shop-grid">
                                <ul class="row">
                                    @foreach ($products as $product)
                                    <li class="col-md-3">
                                        <figure>
                                            @php
                                                $image = json_decode($product->featured_image);
                                            @endphp
                                            <a href="{{url('product-detail/'.$product->slug)}}"><img src="{{asset($image[0])}}"
                                                                            alt=""></a>
                                            <figcaption><a href="{{url('product-detail/'.$product->slug)}}"><i class="fa fa-eye"></i><span>Quick View</span></a>
                                            </figcaption>
                                        </figure>
                                        <div class="scrapcar-shop-grid-text">
                                            <div class="star-rating"><span class="star-rating-box"
                                                                           style="width:100%"></span></div>


                                            <h2><a href="{{url('product-detail/'.$product->slug)}}">{{$product->title}}</a></h2>
                                            @if($product->discount_type==1)
                                            <span>Tk{{$product->discount_amount}}<del> Tk{{ $product->sell_price}} </del></span>
                                            @else
                                            <span>Tk{{$product->sell_price}}</span>
                                            @endif


                                            <a href="{{url('add-to-cart/'.$product->id)}}" class="scrapcar-cart-btn"><i
                                                    class="fa fa-cart-plus"></i>Add to instrumentt </a>

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


    <div class="scrapcar-main-section scrapcar-full-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-timeline">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Our FAQ’s</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                       data-toggle="tab">Our Phone Number</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                       data-toggle="tab">Our Email</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                                       data-toggle="tab">Call Me Back</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="tab-faq-text">
                                    <p>If you still have questions, you can find all of the answers in the following
                                        categories:</p>
                                    <ul>
                                        <li><a href="quote.html">About your quote</a></li>
                                        <li><a href="404.html">Value your instrument</a></li>
                                        <li><a href="404.html">Having your instrument collected</a></li>
                                        <li><a href="404.html">How the law affects you</a></li>
                                        <li><a href="404.html">Parts of our industry</a></li>
                                        <li><a href="404.html">Dropping your instrument off</a></li>
                                        <li><a href="404.html">How the law affects us</a></li>
                                        <li><a href="about-us.html">About us</a></li>
                                    </ul>
                                    <span>Alternatively, you can search our website below:</span>
                                </div>
                                <div class="tab-faq-form">
                                    <form>
                                        <input type="text" value="Type Your Keyword"
                                               onblur="if(this.value == '') { this.value ='Type Your Keyword'; }"
                                               onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                                        <label><input type="submit" value="Search now"></label>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="tab-faq-text">
                                    <p>If you still have questions, you can find all of the answers in the following
                                        categories:</p>
                                    <ul>
                                        <li>
                                            <a href="quote.html">About your quote</a>
                                            <a href="404.html">Getting paid</a>
                                            <a href="404.html">How the law affects us</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Parts of our industry</a>
                                            <a href="404.html">Having your instrument collected</a>
                                            <a href="404.html">Dropping your instrument off</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Value your instrument</a>
                                            <a href="about-us.html">About us</a>
                                            <a href="404.html">How the law affects you</a>
                                        </li>
                                    </ul>
                                    <span>Alternatively, you can search our website below:</span>
                                </div>
                                <div class="tab-faq-form">
                                    <form>
                                        <input type="text" value="Type Your Keyword"
                                               onblur="if(this.value == '') { this.value ='Type Your Keyword'; }"
                                               onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                                        <label><input type="submit" value="Search now"></label>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="tab-faq-text">
                                    <p>If you still have questions, you can find all of the answers in the following
                                        categories:</p>
                                    <ul>
                                        <li>
                                            <a href="quote.html">About your quote</a>
                                            <a href="404.html">Having your instrument collected</a>
                                            <a href="404.html">Dropping your instrument off</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Value your instrument</a>
                                            <a href="404.html">Parts of our industry</a>
                                            <a href="about-us.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Getting paid</a>
                                            <a href="404.html">How the law affects you</a>
                                            <a href="404.html">How the law affects us</a>
                                        </li>
                                    </ul>
                                    <span>Alternatively, you can search our website below:</span>
                                </div>
                                <div class="tab-faq-form">
                                    <form>
                                        <input type="text" value="Type Your Keyword"
                                               onblur="if(this.value == '') { this.value ='Type Your Keyword'; }"
                                               onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                                        <label><input type="submit" value="Search now"></label>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="tab-faq-text">
                                    <p>If you still have questions, you can find all of the answers in the following
                                        categories:</p>
                                    <ul>
                                        <li>
                                            <a href="404.html">Getting paid</a>
                                            <a href="404.html">How the law affects you</a>
                                            <a href="404.html">How the law affects us</a>
                                        </li>
                                        <li>
                                            <a href="quote.html">About your quote</a>
                                            <a href="404.html">Having your instrument collected</a>
                                            <a href="404.html">Dropping your instrument off</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Value your instrument</a>
                                            <a href="404.html">Parts of our industry</a>
                                            <a href="about-us.html">About us</a>
                                        </li>
                                    </ul>
                                    <span>Alternatively, you can search our website below:</span>
                                </div>
                                <div class="tab-faq-form">
                                    <form>
                                        <input type="text" value="Type Your Keyword"
                                               onblur="if(this.value == '') { this.value ='Type Your Keyword'; }"
                                               onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                                        <label><input type="submit" value="Search now"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-main-section scrapcar-full-wrap">
        <span class="transpant-call-layer"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="scrapcar-call-text">
                        <h2>Searching for custom build instrument?</h2>
                        <p>We at Beshi Joss Customs want to reach out to our customers and well-wishers on a regular basis. As a part of that initiative, we publish video logs every fort-night. Here is the latest One.
                            .</p>
                        <a href="404.html" class="call-action-btn"><i
                                class="automechanic-icon automechanic-folder"></i>Order yours now.</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="scrapcar-call-action-thumb">
                        <img src="{{asset('frontend')}}/extra-images/call-action-thumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-main-section scrapcar-modern-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-fancy-title">
                        <h2>We Processed<small></small></h2>
                        <span>Our Advantages</span>
                    </div>
                    <div class="scrapcar-services scrapcar-services-classic">
                        <ul class="row">
                            <li class="col-md-4">
                                <div class="scrapcar-services-classic-text">
                                    <i class="automechanic-icon automechanic-people-2"></i>
                                    <h2><a href="service.html">Join over 4,500 customers</a></h2>
                                    <p>See what people <small>think</small> about our services and how happy they
                                        are.</p>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="scrapcar-services-classic-text">
                                    <i class="automechanic-icon automechanic-signs"></i>
                                    <h2><a href="service.html">How it works?</a></h2>
                                    <p>Find our everything about our process of work and how we do it.</p>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="scrapcar-services-classic-text">
                                    <i class="automechanic-icon automechanic-people-2"></i>
                                    <h2><a href="service.html">Bangladesh wide service</a></h2>
                                    <p>We offer you free delivery all over bangladesh.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-main-section scrapcar-video-full">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="scrapcar-about-list1">
                        <h2>Types of Musical Instrument We Build</h2>
                        <p><small>Scrap Your instrument</small> with us and get the best price guaranteed today. We accept
                            the following instruments for scrap:</p>
                        <ul>
                            <li><a href="404.html">Guiter 1</a></li>
                            <li><a href="404.html">Guiter 2</a></li>
                            <li><a href="404.html">Guiter 3</a></li>
                            <li><a href="404.html">Kahon 1</a></li>
                            <li><a href="404.html">Drum 1</a></li>
                            <li><a href="404.html">Drum 2</a></li>
                            <li><a href="404.html">Drum 3</a></li>
                            <li><a href="404.html">Kahon 2</a></li>
                            <li><a href="404.html">Drum 5</a></li>
                            <li><a href="404.html">Drum 6</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="scrapcar-video">
                        <video src="{{asset('frontend')}}/build/video.mp4" poster="build/auto-hereweare.jpg" controls="controls"
                               preload="none"></video>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-main-section scrapcar-blog-classic-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-fancy-title">
                        <h2>Latest News<small></small></h2>
                        <span>Our Advantages</span>
                    </div>
                    <div class="scrapcar-blog scrapcar-blog-classic">
                        <ul class="row">
                            @foreach($blogs as $blog)
                            <li class="col-md-4">
                                <div class="scrapcar-blog-classic-text">
                                    @php
                                        $image = json_decode($blog->featured_image);
                                    @endphp
                                    <figure><a href="blog-detail.html"><img src="{{asset($image[0])}}"><i
                                            class="automechanic-icon automechanic-technology"></i></a></figure>
                                    <div class="scrapcar-classic-figure-text">
                                        <small class="time-btn">{{$blog->created_at->diffForHumans()}}</small>

                                        <h2><a href="blog-detail.html">{!!$blog->title!!}</a></h2>
                                        <br>
                                        {!!$blog->short_des!!}
                                    </div>
                                    <a href="blog-detail.html" class="scrapcar-readmore-btn">Read More</a>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scrapcar-main-section scrapcar-involved-full">
        <span class="transpant-call-layer"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-get-involved">
                        <h2>Find Us <small>Everywhere</small> Today!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae consequatur cumque distinctio ducimus earum expedita, ipsam, iste molestiae molestias, nobis odio quibusdam quidem sapiente soluta totam ut veritatis voluptate!</p>
                        <div class="involved-social-icone">
                            <ul>
                                <li><a href="https://www.facebook.com/" class="facebook"><i
                                        class="fa fa-facebook"></i>facebook</a></li>
                                <li><a href="https://twitter.com/login" class="twitter"><i
                                        class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="https://pk.linkedin.com/" class="linkedin"><i
                                        class="fa fa-linkedin"></i>linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
