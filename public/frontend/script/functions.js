jQuery(document).ready(function($) {

  'use strict';
    //***************************
    // Sticky Header Function
    //***************************
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 170){  
            jQuery('body').addClass("scrapcar-sticky");
        }
        else{
            jQuery('body').removeClass("scrapcar-sticky");
        }
    });

  //***************************
    // BannerOne Functions
    //***************************
      jQuery('.scrapcar-banner').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='icon church-arrows3'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='icon church-arrows3'></i></span>",
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

  // Multi-Toggle Navigation
    $(function() {
      $('body').addClass('js');
        var $menu = $('#menu'),
          $menulink = $('.menu-link'),
          $menuTrigger = $('.has-subnav');

      $menulink.on("click", function(e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
      });

      $menuTrigger.on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('active').next('ul').toggleClass('active');
      });

    });

  //***************************
    // Parent AddClass Function
    //***************************
    jQuery(".sub-menu").parent("li").addClass("subdropdown-addicon");
  
  //***************************
    // Fancybox Function
    //***************************
    jQuery(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
    });

    // Masonry Functions
    jQuery('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        fitWidth: true
      }
    });

    //***************************
    // slider Functions
    //***************************
      $( function() {
          $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 150,
            values: [ 0, 58 ],
            slide: function( event, ui ) {
              $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
          });
          $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );

     //***************************
    // ThumbSlider Functions
    //***************************
    jQuery('.scrapcar-shop-thumb').slick({
          slidesToShow: 1,
          autoplay: true,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          dots: true,
          asNavFor: '.scrapcar-shop-thumb-list'
        });
        jQuery('.scrapcar-shop-thumb-list').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          asNavFor: '.scrapcar-shop-thumb',
          dots: false,
          arrows: false,
          vertical: false,
          centerMode: false,
          focusOnSelect: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                }
              ],
        });

    //******************************
    // Testimonial Thumb Functions
    //******************************
        jQuery('.scrapcar-testimonial').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
          centerMode: true,
          focusOnSelect: true,
          variableWidth: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                }
              ],
        });

    //***************************
    // ThumbSlider Functions
    //***************************
    jQuery('.scrapcar-listing-gallery').slick({
          slidesToShow: 1,
          autoplay: true,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.scrapcar-listing-gallery-list'
        });
        jQuery('.scrapcar-listing-gallery-list').slick({
          slidesToShow: 8,
          slidesToScroll: 1,
          autoplay: true,
          asNavFor: '.scrapcar-listing-gallery',
          dots: false,
          arrows: false,
          vertical: false,
          centerMode: false,
          focusOnSelect: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                }
              ],
        });




});

//********************************
    // Mediaelementplayer Function
    //********************************
    jQuery('video').mediaelementplayer({
    success: function(player, node) {
      jQuery('#' + node.id + '-mode').html('mode: ' + player.pluginType);
    }
  });



jQuery('.scrapcar-listing-information .nav-tabs a').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href")
  if (target=='#gallery'){
      jQuery('.scrapcar-listing-gallery-list').resize();
  }
  if (target=='#location'){
      google.maps.event.trigger(map, 'resize');
  }
});



// When the window has finished loading create our google map below
  
    google.maps.event.addDomListener(window, 'load', init);
 

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 11,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(40.6700, -73.9400), // New York

          // How you would like to style the map. 
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#f66a00"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map 
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.6700, -73.9400),
          map: map,
          title: 'Snazzy!'
      });
  }



