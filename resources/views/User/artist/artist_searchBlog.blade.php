@extends('layouts.User.asset')
@section('user_content')
<div class="scrapcar-main-content">

    <div class="scrapcar-main-section">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-blog scrapcar-blog-grid">
    <ul class="row">
    @foreach ($searchs as $search)
    <li class="col-md-4">
        <div class="scrapcar-blog-grid-wrap">
            @php
                $image=json_decode($search->image);
            @endphp
        <figure><a href="{{url('artist/single-blog/'.$search->slug)}}"><img src="{{asset($image[0])}}" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
        <div class="scrapcar-blog-grid-text">
        <h2><a href="{{url('artist/single-blog/'.$search->slug)}}">{{$search->title}}</a></h2>
        <div class="scrapcar-post">

        <figure><img src="{{asset($image[0])}}" alt=""></figure>
        <div class="scrapcar-post-text">
        <span>Written by</span>
        <a href="404.html">Super Admin</a><small>, {{$search->created_at->diffForHumans()}}</small>
        </div>
        </div>
        <p>{!!$search->short_des!!}. </p>
        <p>{!!$search->body!!}. </p>
        <div class="blog-options">
        <ul>

        </ul>
        </div>
        </div>
        </div>
        </li>
    @endforeach

    </ul>
    </div>

    <div class="scrapcar-pagination">
    <ul class="page-numbers">
    <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
    <li><span class="page-numbers current">01</span></li>
    <li><a class="page-numbers" href="404.html">02</a></li>
    <li><a class="page-numbers" href="404.html">03</a></li>
    <li><a class="page-numbers" href="404.html">04</a></li>
    <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
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
