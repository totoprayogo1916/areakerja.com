@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >

        <div class="row align-items-center justify-content-center" style="margin-right: 1%">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    SHOW ARTICLE
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                    (*engko diganti)
                </h6>

            </div>
        </div>
</section>
@endsection

@section('content')
<div class="post-list2 " >
    <div data-aos="fade-up" class="single-post2 align-items-center border-bottom" style="width: 750px; margin-left: auto;margin-right: auto">
        <div class="form-group border-bottom text-center">
            <h1>>{{ $article->judul }}</h1>
        </div>

        <div class="details" >
            <div class="title d-flex flex-row "  >
                <div class="titles">
                    <p style="font-weight: 400; font-size : 16px;line-height: 2; margin-bottom: 0px">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequuntur molestiae eveniet totam at possimus velit incidunt perspiciatis maxime. Eligendi doloribus ut est molestiae voluptate, sint nobis earum porro cumque?
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-social2 text-center">
        <h4 class="text-uppercase mx-auto d-block text-center">Bagikan</h4>
        <ul class="col row " style="width: max-content;margin-left: auto;margin-right: auto">

            <li>
                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px"></i></a>
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-twitter-square" style="font-size:36px"></i></a>
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-telegram" style="font-size:36px"></i></a>
            </li>
        </ul>
    </div>

@endsection

