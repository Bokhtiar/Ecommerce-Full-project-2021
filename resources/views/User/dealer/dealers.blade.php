@extends('layouts.User.asset')
@section('user_content')


<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>blog grid</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="active">Blog grid</li>
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
    <div class="col-md-12">
    <div class="scrapcar-blog scrapcar-blog-grid">
    <ul class="row">
        @foreach ($dealers as $dealer)
        <li class="col-md-4">
            <div class="scrapcar-blog-grid-wrap">
                @php
                    $image = json_decode($dealer->dealer_image);
                @endphp
            <figure><a href="blog-detail.html"><img src="{{asset($image[0])}}" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
            <div class="scrapcar-blog-grid-text">
            <h2><a href="blog-detail.html">{!!$dealer->dealer_name!!}</a></h2>
            <div class="scrapcar-post">
            <figure><img src="" alt=""></figure>
            <div class="scrapcar-post-text">
            <span>Join Us</span>
            <a href="404.html"></a><small>{{$dealer->created_at->diffForHumans()}}</small>
            </div>
            </div>
            <p>{{$dealer->dealer_location}}</p>

            </div>
            </div>
            </li>
        @endforeach


        </div>
    </div>
</div></div>
</div>
</div>
@endsection
