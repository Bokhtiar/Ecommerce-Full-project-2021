@extends('layouts.User.asset')
@section('user_content')

<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Artist large</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="active">Artist large</li>
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
    @foreach ($artists as $artist)
    <li class="col-md-12">
    <div class="scrapcar-blog-list-text">
        @php
            $image=json_decode($artist->image)
        @endphp
    <figure><a href="blog-detail.html"><img src="{{asset($image[0])}}" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
    <div class="scrapcar-list-figure-text">
    <ul class="scrapcar-blog-other">
    <li><a href="blog-detail.html"><img src="" alt="">by Admin</a></li>
    <li><time datetime="2017-02-14 20:00">{{$artist->created_at->diffForHumans()}}</time></li>
    <li><a href="404.html"></a></li>
    </ul>
    <a href="{{url('artist/single-blog/'.$artist->slug)}}">{!!$artist->short_des!!}</p>
    <a href="{{url('artist/single-blog/'.$artist->slug)}}" class="scrapcar-readmore-btn">Read More</a>
    </div>
    </div>
    </li>

    <!-- blog details show start -->
<!-- Button trigger modal -->


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
    <form method="POST" action="{{url('artist/artist-blog-search')}}">
        @csrf
    <input value="Search...." onblur="if(this.value == '') { this.value ='Search....'; }" onfocus="if(this.value =='Search....') { this.value = ''; }" tabindex="0" type="text" name="search">
    <label><input type="submit" value=""></label>
    </form>
    </div>


    <div class="widget widget_recent_post">
        <h2 class="widget-heading">Recent Posts</h2>
        <ul>
        @foreach (App\Models\Artist::where('status',1)->inRandomOrder()->take(3)->get(); as $artist)
        <li>
            @php
                $image=json_decode($artist->image)
            @endphp
            <figure><a href="blog-detail.html"><img src="{{asset($image[0])}}" alt=""></a></figure>
            <div class="widget-recent-text">
            <h6><a href="{{url('artist/single-blog/'.$artist->slug)}}">{{$artist->title}}</a></h6>
            <span>{{$artist->created_at->diffForHumans()}}</span>
            </div>
        </li>
        @endforeach
        </ul>
        </div>





        <div class="widget widget_recent_links">
            <h2 class="widget-heading">Cetagories</h2>
            <ul>
            @foreach (App\Models\ArtistCategory::all() as $artist)
            <li><a href="{{url('artist/blog/'.$artist->id)}}">{{$artist->artist_cat_name}}</a>
            @php
                $total=App\Models\Artist::where('artist_category_id',$artist->id)->count()
            @endphp
            ({{$total}})
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



@endsection
