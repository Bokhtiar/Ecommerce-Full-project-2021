@extends('layouts.User.asset')
@section('user_content')


<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Blog Detail</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="">Blog Detail</li>
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
    <figure class="scrapcar-blog-thumb"><img src="extra-images/blog-detail-thumb.jpg" alt=""></figure>
    <div class="scrapcar-blog-detail">
    <div class="scrapcar-detail-wrap">
    <ul class="scrapcar-blog-other">
    <li><a href="404.html"><img src="extra-images/bloglist-admin.jpg" alt="">by Super Admin</a></li>
    <li><time datetime="2017-02-14 20:00">{{$blog->created_at->diffForHumans()}}</time></li>
    </ul>
    <div class="blog-heading"> <h3>{!!$blog->title!!}</h3></div>
    <div class="scrapcar-rich-editor">
    <p>{!!$blog->short_des!!}</p>
    <p>{!!$blog->body!!}</p>
    </div>

    <h2 class="scrapcar-section-heading">Related Articles</h2>
    <div class="scrapcar-blog scrapcar-blog-grid scrapcar-related-blog">
    <ul class="row">
    @foreach (App\Models\Blog::where('status',1)->inRandomOrder()->take(3)->get(); as $blog)
    <li class="col-md-4">
        <div class="scrapcar-blog-grid-wrap">
        @php
            $image = json_decode($blog->featured_image)
        @endphp
        <figure><a href="{{url('single-blog/'.$blog->slug)}}"><img src="{{asset($image[0])}}" alt=""><i class="automechanic-icon automechanic-technology"></i></a></figure>
        <div class="scrapcar-blog-grid-text">
        <h2><a href="{{url('single-blog/'.$blog->slug)}}">{!!$blog->title!!}</a></h2>
        <div class="scrapcar-post">
        <figure><img src="extra-images/relatedblog-admin1.jpg" alt=""></figure>
        <div class="scrapcar-post-text">
        <span>Written by</span>
        <a href="404.html">Super Admin</a><small>, {{$blog->created_at->diffForHumans()}}</small>
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
    <form method="POST" action="{{url('blog-search')}}">
    @csrf
    <input value="Search...." onblur="if(this.value == '') { this.value ='Search....'; }" onfocus="if(this.value =='Search....') { this.value = ''; }" tabindex="0" type="text" name="search">
    <label><input type="submit" value=""></label>
    </form>
    </div>


    <div class="widget widget_recent_post">
    <h2 class="widget-heading">Recent Posts</h2>
    <ul>
    @foreach (App\Models\Blog::where('status',1)->inRandomOrder()->take(3)->get(); as $blog)
    <li>
        @php
            $image=json_decode($blog->featured_image)
        @endphp
        <figure><a href="blog-detail.html"><img src="{{asset($image[0])}}" alt=""></a></figure>
        <div class="widget-recent-text">
        <h6><a href="{{url('single-blog/'.$blog->slug)}}">{!!$blog->title!!}</a></h6>
        <span>{{$blog->created_at->diffForHumans()}}</span>
        </div>
    </li>
    @endforeach
    </ul>
    </div>



    <div class="widget widget_recent_links">
    <h2 class="widget-heading">Cetagories</h2>
    <ul>
    @foreach (App\Models\blogCategory::all(); as $blog)
    <li><a href="{{url('blog-category/'.$blog->id)}}">{{$blog->category_Name}}</a>
    @php
        $total=App\Models\Blog::where('blog_category_id',$blog->id)->count()
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
