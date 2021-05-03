<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webmarce.com/html/scrapcar/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 17:45:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beshi Joss Customs :: Home Page</title>
    <link rel="icon" href="{{asset('frontend')}}/images/logo.png">

    <link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/flaticon.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/slick-slider.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/fancybox.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/build/mediaelementplayer.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/color.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">
    @yield('custom_css')
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="scrapcar-main-wrapper">

@include('layouts.User.partial._Header')
@yield('user_content')
@include('layouts.User.partial._Footer')


<script type="text/javascript" src="{{asset('frontend')}}/script/jquery.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/jquery-ui.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/slick.slider.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/fancybox.pack.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/isotope.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/progressbar.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/numscroller.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/build/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/script/functions.js"></script>

 <!-- aleart message show -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" charset="utf-8"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" charset="utf-8"></script>





 @if(Session::has('cart'))
   <script type="text/javascript">
     swal("Add To Cart","Product Added Successfully...","success")
   </script>
 @endif

 @if(Session::has('subscribe'))
   <script type="text/javascript">
     swal("Subscribe","Subscribe Sucessfully...","success")
   </script>
 @endif

 @if(Session::has('update'))
 <script type="text/javascript">
   swal("Updated Data","Updated Sucessfully...","success")
 </script>
@endif

 @if(Session::has('update'))
   <script type="text/javascript">
     swal("Updated Data","Update Sucessfully...","success")
   </script>
 @endif

 @if(Session::has('delete'))
   <script type="text/javascript">
     swal("delete Successfully","delete secessfully","success")
   </script>
 @endif
 @if(Session::has('order'))
   <script type="text/javascript">
     swal("Order Successfully","Order secessfully","success")
   </script>
 @endif
    @yield('custom_script')
</body>
<!-- Mirrored from webmarce.com/html/scrapcar/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 17:46:54 GMT -->
</html>
