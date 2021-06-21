@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >

        <div class="row align-items-center justify-content-center" style="margin-right: 1%">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    Tips Kerja
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda
                </h6>

            </div>
        </div>
</section>
@endsection

@section('content')
<div class="col-lg-8 post-list " id="main-content">

<div class="mt-100">

    @foreach($artikel as $article)
    <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 75%;margin: auto">
        <div class="row" style="margin: auto;margin-right:50px" >
                <img class="thumb2" src="#" >
        </div>

        <div class="details " style="width: 100%" style="margin-top: 14px; overflow: unset; white-space: nowrap;">
            <div class="title d-flex flex-row justify-content-between"  >
                <div class="titles">
                    <h3 style="color: #7e7e7e">{{ $article->title }}</h3>
                    <br>
                    <h5 >{{ $article->des_singkat }}</h5>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Load More Articel</a>
</div>
@endsection

