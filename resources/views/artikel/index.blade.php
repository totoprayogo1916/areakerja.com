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
<div class="post-list2 " >
    @foreach($article as $art)
    <a href="{{ route('artikel.show', $art->id)}}">
    <div data-aos="fade-up" class="single-post2 align-items-center d-flex border-bottom" style="width: 750px; margin-left: auto;margin-right: auto">
        <div class="row " style="margin: auto;margin-right:20px" >
            @if($art->gambar)
                <img class="thumb2" src="{{ url('img/artikel') }}/{{ $art->gambar }}" style="width: 250px;height: 150px;">
            @endif
        </div>

        <div class="details" >
            <div class="title d-flex flex-row "  >
                <div class="titles">
                    <h2 style="color: #7e7e7e; margin-bottom: 8px;font-weight: 500">{{ $art->judul }}</h3>

                    <p style="font-weight: 400; font-size : 16px;line-height: 2; margin-bottom: 0px">{{ $art->ringkasan }}</p>
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="#">Load More Articel</a>

@endsection

