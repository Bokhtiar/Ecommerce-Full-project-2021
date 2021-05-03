<footer id="scrapcar-footer" class="scrapcar-footer-one">

    <div class="scrapcar-footer-widget">
        <div class="container">
            <div class="row">

                <aside class="col-md-2 widget widget_links">
                    <h2 class="scrapcar-footer-title">quick Links</h2>
                    <ul>
                        <li><a href="{{route('footer.about')}}">About Us<i class="automechanic-icon automechanic-arrow"></i></a>
                        </li>
                        <li><a href="{{route('footer.quote')}}">Instant Quote<i
                                class="automechanic-icon automechanic-arrow"></i></a></li>
                        <li><a href="{{route('footer.client-say')}}">What Clients Say<i
                                class="automechanic-icon automechanic-arrow"></i></a></li>
                        <li><a href="{{route('footer.service')}}">Our Services<i class="automechanic-icon automechanic-arrow"></i></a>
                        </li>
                        <li><a href="{{route('footer.why-chose-us')}}">Why Choose Us?<i
                                class="automechanic-icon automechanic-arrow"></i></a></li>
                    </ul>
                </aside>


                <aside class="col-md-3 widget widget_links social-links">
                    <h2 class="scrapcar-footer-title">we’re social</h2>
                    <ul>
                        <li><a href="https://www.facebook.com/">Facebook<i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="https://twitter.com/login">Twitter<i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="https://plus.google.com/discover">Google Plus<i
                                class="automechanic-icon automechanic-social-1"></i></a></li>
                        <li><a href="https://www.youtube.com/signin">Youtube<i
                                class="automechanic-icon automechanic-play"></i></a></li>
                    </ul>
                </aside>


                <aside class="col-md-3 widget widget_appointment">
                    <h2 class="scrapcar-footer-title">Subscribe Us</h2>
                    <form method="POST" action="{{route('subscribe')}}">
                        @csrf
                        <ul>
                            <li><input type="email" name="email" value="E-mail Address"
                                       onblur="if(this.value == '') { this.value ='E-mail Address'; }"
                                       onfocus="if(this.value =='E-mail Address') { this.value = ''; }"></li>
                            <li><label><i class="fa fa-pencil-square-o"></i></label>
                                <input type="submit" value="Subscribe Now">
                            </li>
                        </ul>
                    </form>
                </aside>


                <aside class="col-md-4 widget widget_gallery">
                    <h2 class="scrapcar-footer-title">Working With:</h2>
                    <ul>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w2.png"
                                       class="fancybox"><img style="height: 100px;width: 100px;" src="{{asset('frontend')}}/images/w2.png" alt=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w5.png"
                                       class="fancybox"><img style="height: 100px;width: 100px;" src="{{asset('frontend')}}/images/w5.png" alt=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w2.png"
                                       class="fancybox"><img style="height: 100px;width: 100px;" src="{{asset('frontend')}}/images/w2.png" alt=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w5.png"
                                       class="fancybox"><img style="height: 100px;width: 100px;" src="{{asset('frontend')}}/images/w5.png" alt=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w5.png"
                                       class="fancybox"><img style="height: 100px;width: 100px;" src="{{asset('frontend')}}/images/w5.png" alt=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure><a data-fancybox-group="group" href="{{asset('frontend')}}/images/w2.png"
                                       class="fancybox"><img src="{{asset('frontend')}}/images/w2.png" alt=""></a>
                            </figure>
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
                                <li class="facebook"><a href="https://www.facebook.com/"><i
                                        class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/login"><i
                                        class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="https://pk.linkedin.com/"><i
                                        class="fa fa-linkedin"></i></a></li>
                                <li class="plus"><a href="https://plus.google.com/discover"><i
                                        class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <span>Copyright 2020. Beshi Joss Customs all rights reserved. <i class="fa fa-heart"></i> Developed by<a
                                href="index-2.html">Antooba</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
