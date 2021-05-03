<header id="scrapcar-header" class="scrapcar-header-one">
    <div class="scrapcar-top-strip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scrapcar-top-strip-info">
                        <ul>

                        </ul>
                    </div>
                    <div class="scrapcar-right-section">
                        <span><i class="icon icon-telephone2"></i>Call Us Free <small>+8801977759947</small></span>
                        <a href="404.html" class="scrapcar-simple-btn"><i class="automechanic-icon automechanic-search"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrapcar-main-header">
        <div class="container">
            <div class="row">
                <aside class="col-md-2"><a href="{{url('/')}}" class="logo"><img src="{{asset('frontend')}}/images/logo.png" alt=""></a></aside>
                <aside class="col-md-10">
                    <div class="scrapcar-navigation">
                        <a href="#menu" class="menu-link active"><span></span></a>
                        <nav id="menu" class="menu navbar navbar-default">
                            <ul class="level-1 navbar-nav">
                                    <!--artist start -->
                                    <li><a href="#">Artists</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu level-2">
                                            @foreach (App\Models\ArtistCategory::where('status',1)->get() as $artist_cat)
                                            <li><a href="{{url('artist/blog/'.$artist_cat->id)}}">{{$artist_cat->artist_cat_name}}<i
                                                class=" "></i></a><span class="has-subnav"><i
                                                class=""></i></span>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <!--artisat end -->
                                    <!--inside prs start -->
                                    <li><a href="#">Inside BJC</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu level-2">
                                            <li><a href="{{route('blogs')}}">Blog <i
                                                    class=" "></i></a><span class="has-subnav"><i
                                                    class=""></i></span>

                                            </li>

                                            <li><a href="{{route('forum.index')}}">Forums <i
                                                class=" "></i></a><span class="has-subnav"><i
                                                class=""></i></span>

                                            </li>

                                            <li><a href="{{route('about-bjc')}}">About BJC <i
                                                class=" "></i></a><span class="has-subnav"><i
                                                class=""></i></span>

                                            </li>
                                            <li><a href="{{route('dealers')}}">Dealers<i
                                                class=" "></i></a><span class="has-subnav"><i
                                                class=""></i></span>

                                            </li>
                                        </ul>
                                    </li>
                                    <!--inside prs end -->

                                <li><a href="#">Products</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu level-2">

                                        <li>
                                            @foreach (App\Models\Category::where('status',1)->get() as $cat)
                                            <a href="{{url('categories-product/'.$cat->id)}}">{{$cat->category_name}}</a><span class="has-subnav"><i
                                                class="fa fa-angle-down"></i></span>
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('shops')}}">Shop</a></li>
                                <li><a href="{{route('all-video')}}">Video</a></li>
                                <li><a href="{{route('cart-details')}}">cart-{{App\Models\cart::total_item_cart()}}</a></li>

                            </ul>
                        </nav>
                        @if(Auth::check())
                        <span href="404.html" class="scrap-fancy-btn"><i class="automechanic-icon automechanic-people"></i><a href="{{route('logout')}}">Logout</a>
                            @if (Auth::user()->role->id==1)
                            <a href="{{route('admin.dashboard')}}">/Admin</a>
                            @endif
                        </span>
                        @else
                        <span href="404.html" class="scrap-fancy-btn"><i class="automechanic-icon automechanic-people"></i><a href="{{route('login')}}">Login</a> / <a href="{{route('register')}}">Register</a></span>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </div>
</header>
