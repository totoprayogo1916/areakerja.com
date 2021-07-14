@extends('layouts.pasang')

@section('home')
<section class="relative" id="home" style="margin-bottom: 50px">
    <div class="banner-area2 "  >
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container" >
                    <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                        Tips Kerja
                    </h1>
                    <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                    Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="col-11 col-sm-10 col-md-9 post-list2 ml-auto mr-auto" >

    @foreach($article as $art)
    <a href="{{ route('artikel.show', [Str::slug($art->judul)])}}">
    <div data-aos="fade-up" class="single-post2 align-items-center d-flex border-bottom" style=" margin-left: auto;margin-right: auto">
        <div class="col-3 no-gutters no-padding thumb3" style="margin: auto;" >
            @if($art->gambar)
                <img class="thumb3" src="{{ url('img/artikel') }}/{{ $art->gambar }}" style="width: inherit;height: auto;">
            @endif
        </div>
        <div class="col-12 col-sm-9">
            <div class="details" >
                <div class="title d-flex flex-row "  >
                    <div class="titles">
                        <h4 style="margin-bottom: 8px;font-weight: 500; ">{{ $art->judul }}</h4>
                        <p class="pg-1" style="font-weight: 400;line-height: 1.75; margin-bottom: 0px">{{ $art->ringkasan }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </a>
    @endforeach
@endsection

