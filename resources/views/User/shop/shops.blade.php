@extends('layouts.User.asset')
@section('user_content')





<div class="scrapcar-subheader">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="scrapcar-subheader-wrap">
<h1>Shop Grid</h1>
<ul class="scrapcar-breadcrumb">
<li><a href="{{url('/')}}">Home</a></li>
<li>Pages</li>
<li class="active"><a href="{{url('/')}}">Shop Grid</a></li>
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

<aside class="col-md-3">
<div class="scrapcar-sidebar-colr">

<div class="widget widget_search">
<form>
<input value="Search...." onblur="if(this.value == '') { this.value ='Search....'; }" onfocus="if(this.value =='Search....') { this.value = ''; }" tabindex="0" type="text">
<label><input type="submit" value=""></label>
</form>
</div>


<div class="widget widget_range">
<h2 class="widget-heading">Cetagories</h2>
<form>
<div id="slider-range"></div>
<a href="#">Clear Filters</a>
<input type="text" id="amount" readonly>
</form>
</div>


<div class="widget widget_recent_links">
<h2 class="widget-heading">Cetagories</h2>
<ul>
<li><a href="404.html">Compact Cars</a> (20)</li>
<li><a href="404.html">Sport Cars</a> (18)</li>
<li><a href="404.html">Luxury Cars</a> (08)</li>
<li><a href="404.html">Family Cars</a> (12)</li>
<li><a href="404.html">Mini Cars</a> (35)</li>
</ul>
</div>


<div class="widget widget_recent_post">
<h2 class="widget-heading">Recent Posts</h2>
<ul>
<li>
<figure><a href="blog-detail.html"><img src="{{asset('frontend')}}/extra-images/recent-postimg1.jpg" alt=""></a></figure>
<div class="widget-recent2-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<h2><a href="blog-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
</div>
</li>
<li>
<figure><a href="blog-detail.html"><img src="{{asset('frontend')}}/extra-images/recent-postimg2.jpg" alt=""></a></figure>
<div class="widget-recent2-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<h2><a href="blog-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
</div>
</li>
<li>
<figure><a href="blog-detail.html"><img src="{{asset('frontend')}}/extra-images/recent-postimg3.jpg" alt=""></a></figure>
<div class="widget-recent2-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<h2><a href="blog-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
</div>
</li>
</ul>
</div>


<div class="widget widget_Popular_Tags">
<h2 class="widget-heading">Popular Tags</h2>
<ul>
<li><a href="blog-detail.html">Blogs</a></li>
<li><a href="404.html">Auto Deal Blog</a></li>
<li><a href="404.html">Auto</a></li>
<li><a href="404.html">Scrap</a></li>
<li><a href="404.html">Luxury</a></li>
<li><a href="404.html">Clear Smooth</a></li>
<li><a href="404.html">Compact</a></li>
</ul>
</div>


<div class="widget Widget_twitter_feed">
<h2 class="widget-heading">twitter feed</h2>
<ul>
<li>
<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
<div class="twitter-feed-text">
<p>Pitch perfect; 15 business plan PowerPoint pitch decks sure to impress: <a href="https://twitter.com/login">https://t.co/iaZqi0</a></p>
<span>3 days ago</span>
</div>
</li>
<li>
<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
<div class="twitter-feed-text">
<p>Confused about the difference between <a href="https://twitter.com/login">#Wordpress.com</a> & org? Here's an explanation.</p>
<span>4 days ago</span>
</div>
</li>
<li>
<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
<div class="twitter-feed-text">
<p>Social media attention should go to the people that need it the most.</p>
<span>5 days ago</span>
</div>
</li>
</ul>
</div>

</div>
</aside>

<div class="col-md-9">
<div class="scrapcar-shop-filter">

<ul class="nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="automechanic-icon automechanic-squares2"></i></a></li>
<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="automechanic-icon  automechanic-signs22"></i></a></li>
</ul>
<span>Showing 1-13 of 30 Results</span>

<form>
<div class="scrapcar-search-select">
<select>
<option value="Default Sorting">Default Sorting</option>
<option value="Default Sorting">Default Sorting</option>
 <option value="Default Sorting">Default Sorting</option>
<option value="Default Sorting">Default Sorting</option>
</select>
</div>
</form>
</div>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="profile">
<div class="scrapcar-shop scrapcar-shop-grid">
<ul class="row">
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img1.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img2.jpg" alt=""></a><span>New</span>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img3.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img4.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img5.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img6.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img7.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img8.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img9.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
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
<div role="tabpanel" class="tab-pane" id="home">
<div class="scrapcar-shop scrapcar-shop-grid">
<ul class="row">
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img1.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img2.jpg" alt=""></a><span>New</span>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
 <figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img3.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img4.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img5.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img6.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img7.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
 </figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img8.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
<li class="col-md-4">
<figure>
<a href="shop-detail.html"><img src="{{asset('frontend')}}/extra-images/shop-grid-img9.jpg" alt=""></a>
<figcaption><a href="shop-detail.html"><i class="fa fa-eye"></i><span>Quick View</span></a></figcaption>
</figure>
<div class="scrapcar-shop-grid-text">
<div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
<a href="404.html" class="fa fa-heart-o"></a>
<h2><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h2>
<span>$12.99<del>$16.99</del></span>
<a href="shop-detail.html" class="scrapcar-cart-btn"><i class="fa fa-cart-plus"></i>Add to cart</a>
</div>
</li>
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


<footer id="scrapcar-footer" class="scrapcar-footer-one">

<div class="scrapcar-footer-widget">
<div class="container">
<div class="row">

<aside class="col-md-2 widget widget_links">
<h2 class="scrapcar-footer-title">quick Links</h2>
<ul>
<li><a href="about-us.html">About Us<i class="automechanic-icon automechanic-arrow"></i></a></li>
<li><a href="quote.html">Instant Quote<i class="automechanic-icon automechanic-arrow"></i></a></li>
<li><a href="index-2.html">What Clients Say<i class="automechanic-icon automechanic-arrow"></i></a></li>
<li><a href="service.html">Our Services<i class="automechanic-icon automechanic-arrow"></i></a></li>
<li><a href="faq.html">Why Choose Us?<i class="automechanic-icon automechanic-arrow"></i></a></li>
</ul>
</aside>


<aside class="col-md-3 widget widget_links social-links">
<h2 class="scrapcar-footer-title">we’re social</h2>
<ul>
<li><a href="https://www.facebook.com/">Facebook<i class="fa fa-facebook-square"></i></a></li>
<li><a href="https://twitter.com/login">Twitter<i class="fa fa-twitter-square"></i></a></li>
<li><a href="https://plus.google.com/discover">Google Plus<i class="automechanic-icon automechanic-social-1"></i></a></li>
<li><a href="https://www.youtube.com/signin">Youtube<i class="automechanic-icon automechanic-play"></i></a></li>
</ul>
</aside>


<aside class="col-md-3 widget widget_appointment">
<h2 class="scrapcar-footer-title">make an appointment</h2>
<form>
<ul>
<li><input type="email" value="E-mail Address" onblur="if(this.value == '') { this.value ='E-mail Address'; }" onfocus="if(this.value =='E-mail Address') { this.value = ''; }"></li>
<li><input type="text" value="Phone Number" onblur="if(this.value == '') { this.value ='Phone Number'; }" onfocus="if(this.value =='Phone Number') { this.value = ''; }"></li>
<li><input type="text" value="Postcode" onblur="if(this.value == '') { this.value ='Postcode'; }" onfocus="if(this.value =='Postcode') { this.value = ''; }"></li>
<li><label><i class="fa fa-pencil-square-o"></i></label>
<input type="submit" value="make an appointment">
</li>
</ul>
</form>
</aside>


<aside class="col-md-4 widget widget_gallery">
<h2 class="scrapcar-footer-title">Working With:</h2>
<ul>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img1.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img1.png" alt=""></a></figure>
</li>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img2.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img2.png" alt=""></a></figure>
</li>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img3.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img3.png" alt=""></a></figure>
</li>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img4.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img4.png" alt=""></a></figure>
</li>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img5.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img5.png" alt=""></a></figure>
</li>
<li>
<figure><a data-fancybox-group="group" href="{{asset('frontend')}}/extra-images/widget-gallery-img6.png" class="fancybox"><img src="{{asset('frontend')}}/extra-images/widget-gallery-img6.png" alt=""></a></figure>
</li>
</ul>
</aside>

</div>
</div>
</div>


<div class="scrapcar-copyright-wrap">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="scrapcar-copyright">
<div class="copyright-social-icon">
<ul>
<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
<li class="twitter"><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
<li class="linkedin"><a href="https://pk.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
<li class="plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
<li class="firbox"><a href="https://dribbble.com/session/new"><i class="fa fa-dribbble"></i></a></li>
</ul>
</div>
<span>Copyright 2017. All Rights Reserved <i class="fa fa-heart"></i> by <a href="index-2.html">Webmarce</a></span>
</div>
</div>
</div>
</div>
</div>

</footer>

<div class="clearfix"></div>
</div>


<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery-ui.js"></script>
<script type="text/javascript" src="script/bootstrap.min.js"></script>
<script type="text/javascript" src="script/slick.slider.min.js"></script>
<script type="text/javascript" src="script/fancybox.pack.js"></script>
<script type="text/javascript" src="script/isotope.min.js"></script>
<script type="text/javascript" src="script/progressbar.js"></script>
<script type="text/javascript" src="script/numscroller.js"></script>
<script type="text/javascript" src="build/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="script/functions.js"></script>
</body>

<!-- Mirrored from webmarce.com/html/scrapcar/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 17:52:41 GMT -->
</html>

@endsection
