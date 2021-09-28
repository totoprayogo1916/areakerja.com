@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >
    <div class="banner-area2"  >
        <div class="container">
            <div class="banner-content text-right">
                <div class="overlay overlay-bg container" >
                    <h5 class="mt-3" style="color: #00000062; ">
                        Areakerja.com >
                            <a style="color: #00000062; " href="{{ route('artikel') }}">Artikel</a>
                            > {{ $art->judul}}
                    </h5>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="col-sm-8 post-list2 ml-auto mr-auto" >
    <div data-aos="fade-up" class="single-post2 align-items-center border-bottom" style="margin-left: auto;margin-right: auto">
        <div class="col-12 border-bottom text-center">
            <h1 style="margin-bottom: 20px">{{ $art->judul }}</h1>
        </div>

        <div >

            <div class="section-row">
                {!! $art->content !!}
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
</div>
@endsection

