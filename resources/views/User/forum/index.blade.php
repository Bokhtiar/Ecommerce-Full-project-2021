@extends('layouts.User.asset')
@section('user_content')


<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Forum classic</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="active">Forum Classic</li>
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
    <div class="scrapcar-blog scrapcar-blog-classic">
        <a class="btn btn-info" href="{{route('forum.create')}}">Add Forum</a><br>
    <ul class="row">
    @foreach ($forums as $forum)
    <li class="col-md-4">
        <div class="scrapcar-blog-classic-text scrapcar-blog-color">
        <figure><a href="blog-detail.html"><img src="extra-images/blog-classic-img2.jpg" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
        <div class="scrapcar-classic-figure-text">
        <small class="time-btn">{{$forum->created_at->diffForHumans()}}</small>
        <a href="404.html"><i class="automechanic-icon automechanic-interface-1"></i>25</a>
        <h2><a href="blog-detail.html">{{$forum->title}}</a></h2>
        <p></p>
        </div>
        <a href="{{url('forum/view/'.$forum->slug)}}" class="scrapcar-readmore-btn">Read More</a>
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





@endsection
