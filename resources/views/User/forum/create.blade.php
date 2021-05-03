@extends('layouts.User.asset')
@section('user_content')


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<div class="scrapcar-subheader">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="scrapcar-subheader-wrap">
    <h1>Get a Forum</h1>
    <ul class="scrapcar-breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li>Pages</li>
    <li class="active">Forum</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="scrapcar-main-content">

    <div class="scrapcar-main-section">
    <div class="">
    <div class="row">
    <div class="scrapcar-get-quote-warp">
    <h2 class="scrapcar-section-headingv2">Forum.</h2>
    <form class="scrapcar-quote-about-us" action="{{route('forum.store')}}" method="POST">
        @csrf
        <div class="">
            <input class="form-control" type="text" placeholder="Enter Your Forum Ttile...." name="title" id="">
        </div><br>
        <div class="">
            <textarea class="form-control" placeholder="Form Description" name="des" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
    <input type="submit" value="Okay, Start My Quote">
    </form>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    </div>

    </div>




@endsection
