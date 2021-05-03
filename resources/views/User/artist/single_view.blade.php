@extends('layouts.User.asset')
@section('user_content')


<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Artist Detail</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="">Artist Detail</li>
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
        @php
            $image = json_decode($artist->image)
        @endphp
    <figure class="scrapcar-blog-thumb"><img src="{{asset($image[0])}}" alt="asdfasd"></figure>
    <div class="scrapcar-blog-detail">
    <div class="scrapcar-detail-wrap">
    <ul class="scrapcar-blog-other">
    <li><a href="404.html"><img src="extra-images/bloglist-admin.jpg" alt="">by Super Admin</a></li>
    <li><time datetime="2017-02-14 20:00">{{$artist->created_at->diffForHumans()}}</time></li>
    </ul>
    <div class="blog-heading"> <h3>{{$artist->title}}</h3></div>
    <div class="scrapcar-rich-editor">
    <p>{!!$artist->short_des!!}</p>
    <p>{!!$artist->body!!}</p>
    </div>

    <h2 class="scrapcar-section-heading">Related Articles</h2>
    <div class="scrapcar-blog scrapcar-blog-grid scrapcar-related-blog">
    <ul class="row">
    @foreach (App\Models\Artist::where('status',1)->inRandomOrder()->take(3)->get(); as $artist)
    <li class="col-md-4">
        <div class="scrapcar-blog-grid-wrap">
        @php
            $image = json_decode($artist->image)
        @endphp
        <figure><a href="{{url('artist/single-blog/'.$artist->slug)}}"><img src="{{asset($image[0])}}" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
        <div class="scrapcar-blog-grid-text">
        <h2><a href="{{url('single-blog/'.$artist->slug)}}">{{$artist->title}}</a></h2>
        <div class="scrapcar-post">
        <figure><img src="extra-images/relatedblog-admin1.jpg" alt=""></figure>
        <div class="scrapcar-post-text">
        <span>Written by</span>
        <a href="404.html">Super Admin</a><small>, {{$artist->created_at->diffForHumans()}}</small>
        </div>
        </div>
        </div>
        </div>
        </li>
    @endforeach
    </ul>
    </div>



    </div>
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
