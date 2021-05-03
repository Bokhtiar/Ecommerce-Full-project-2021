@extends('layouts.User.asset')
@section('user_content')




<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Video large</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
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
    <div class="col-md-9">
    <div class="scrapcar-blog scrapcar-blog-list scrapcar-blog-large">
    <ul class="row">
    @foreach ($videos as $video)
    <li class="col-md-12">
        <div class="">

        <figure><a href="blog-detail.html">{!!$video->video!!}</a></figure>
        <div class="scrapcar-list-figure-text">
        <ul class="scrapcar-blog-other">
        <li><a href="blog-detail.html"><img src="extra-images/bloglist-admin.jpg" alt="">by Admin</a></li>
        <li><time datetime="2017-02-14 20:00">{{$video->created_at->diffForHumans()}}</time></li>
        </ul>
        <h2><a href="blog-detail.html">{!!$video->des!!}</p>
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

    <aside class="col-md-3">
    <div class="scrapcar-sidebar-colr">

    <div class="widget widget_search">

    </div>


    <div class="widget widget_recent_post">
    <h2 class="widget-heading">Recent Posts</h2>
    <ul>
    @foreach (App\Models\Video::where('status',1)->inRandomOrder()->take(3)->get() as $video)
    <li>
    <figure><a href="blog-detail.html">{!!$video->video!!}</a></figure>
    <div class="widget-recent-text">
    <h6><a href="blog-detail.html">{{$video->artist_name}}</a></h6>
    <span>{{$video->created_at->diffForHumans()}}</span>
    </div>
    </li>
    @endforeach
    </ul>
    </div>




    </div>
    </aside>

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
