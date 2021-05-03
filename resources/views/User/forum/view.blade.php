@extends('layouts.User.asset')
@section('user_content')


    <div class="scrapcar-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-subheader-wrap">
                        <h1>Forum Detail</h1>
                        <ul class="scrapcar-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Pages</li>
                            <li class="active">Forum Detail</li>
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
                        <figure class="scrapcar-blog-thumb"><img src="extra-images/blog-detail-thumb.jpg" alt="">
                        </figure>
                        <div class="scrapcar-blog-detail">
                            <div class="scrapcar-detail-wrap">
                                <ul class="scrapcar-blog-other">
                                    <li><a href="404.html"><img src="extra-images/bloglist-admin.jpg"
                                                                alt="">{{$forum->user->name}}</a></li>
                                    <li>
                                        <time datetime="2017-02-14 20:00">{{$forum->created_at->diffForHumans()}}</time>
                                    </li>
                                    <li><a href="404.html">23 Comments</a></li>
                                </ul>
                                <div class="blog-heading"><h2>{{$forum->title}}</h2></div>
                                <div class="scrapcar-rich-editor">
                                    <p>{{$forum->des}}</p>

                                </div>


                                <h2 class="scrapcar-section-heading">Related Articles</h2>
                                <div class="scrapcar-blog scrapcar-blog-grid scrapcar-related-blog">
                                    <ul class="row">
                                        @foreach ($forums as $v_forum)
                                            <li class="col-md-4">
                                                <div class="scrapcar-blog-grid-wrap">
                                                    <figure><a href="blog-detail.html"><img
                                                                src="extra-images/blog-grid-img1.jpg" alt=""><i
                                                                class="automechanic-icon automechanic-technology"></i></a>
                                                    </figure>
                                                    <div class="scrapcar-blog-grid-text">
                                                        <h2>
                                                            <a href="{{url('forum/view/'.$v_forum->slug)}}">{{$v_forum->title}}</a>
                                                        </h2>
                                                        <div class="scrapcar-post">
                                                            <figure><img src="extra-images/relatedblog-admin1.jpg"
                                                                         alt=""></figure>
                                                            <div class="scrapcar-post-text">
                                                                <span>Written by</span>
                                                                <a href="{{url('forum/view/'.$v_forum->slug)}}">{{$v_forum->user->name}}</a><small>,{{$forum->created_at->diffForHumans()}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <h2 class="scrapcar-section-heading">Comments</h2>
                                <div class="comments-area">

                                    <ul class="comment-list">
                                        <li>
                                            <div class="thumb-list">
                                                @foreach (App\Models\Comment::where('forum_id',$forum->id)->get() as $comment)

                                                    <div class="text-holder">

                                                        <h4>{{$comment->user->name}}<small></small></h4>
                                                        <time class="post-date"
                                                              datetime="2008-02-14 20:00">{{$comment->created_at->diffForHumans()}} </time>
                                                        <p>{{$comment->comment}}.</p>
                                                        @endforeach

                                                    </div>
                                            </div>
                                        </li>

                                        <div>
                                            <label for="">Comment Box</label>
                                            <textarea name="comment" class="form-control" id="comment" cols="10"
                                                      rows="5"></textarea>
                                            <input class="mt-1 btn btn-info" type="submit" name="btn" value="Send" id="commentBtn">

                                        </div>

                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>

                    <aside class="col-md-3">
                        <div class="scrapcar-sidebar-colr">

                            <div class="widget widget_search">
                                <form>
                                    <input value="Search...."
                                           onblur="if(this.value == '') { this.value ='Search....'; }"
                                           onfocus="if(this.value =='Search....') { this.value = ''; }" tabindex="0"
                                           type="text">
                                    <label><input type="submit" value=""></label>
                                </form>
                            </div>


                            <div class="widget widget_recent_post">
                                <h2 class="widget-heading">Recent Posts</h2>
                                <ul>
                                    @foreach (App\Models\Forum::inRandomOrder()->where('status',1)->take(3)->get() as $forum)
                                        <li>
                                            <figure><a href="{{url('forum/view/'.$forum->slug)}}"><img
                                                        src="extra-images/recent-postimg1.jpg" alt=""></a></figure>
                                            <div class="widget-recent-text">
                                                <h6><a href="{{url('forum/view/'.$forum->slug)}}">{{$forum->title}}</a>
                                                </h6>
                                                <span>{{$forum->created_at->diffForHumans()}}</span>
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




@endsection

@section('custom_script')
    <script>
        $('#commentBtn').click(function (e){
            e.preventDefault();
            var comemnt = $('#comment').val();

            $.ajax({
                url: "{{route('forum.comment-store')}}",
                type: "POST",
                data: { _token: "{{csrf_token()}}", comment: comemnt, forum_id: "{{$forum->id}}"},
                success: function (data){
                    window.location.reload();
                },
                error: function (error) {
                    //
                }

            });
            alert(comemnt);
        });
    </script>
@endsection
