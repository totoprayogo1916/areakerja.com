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

<section class="relative" id="home" >
    <div class="row mb-3 justify-content-around text-center " >
        @foreach($paket as $pak)
            <div class="col-12 col-sm-6 col-md-4 px-4 " >
                <a href="{{ route('pasang',$pak->nama) }}">
                    <div class="card mb-4 form-wrap-main" style="border-radius: 25px;">
                        <div class="card-header pt-3 pb-4" style="border-radius:  25px 25px 65px 65px/25px 25px 40px 40px; height: auto;background-color: {{$pak->warna}}">
                            <h1 class="my-0 fw-normal mb-1 text-white text-bold">{{$pak->nama}}</h1>
                            <h4 class="my-0 fw-normal text-white">{{$pak->deskripsi_singkat}}</h4>
                        </div>
                        <div class="card-body ">
                            <h5 style="font-weight: normal; ">{!!$pak->deskripsi_full!!}</h5>
                                <div class="col-11 col-sm-8 mx-auto no-padding" style="overflow: unset; white-space: nowrap; ">
                                    <ul class="text-left mb-4">
                                        @foreach($pak->list as $fitur)
                                            <h6 class="mb-3  " style="font-weight: normal;" >{!!$fitur!!}</h6>
                                        @endforeach
                                    </ul>
                                </div>
                            <hr/>
                        </div>
                        <div class="card-footer pt-4 pb-3" style="border-radius:  65px 65px 25px 25px/40px 40px 25px 25px; height: auto;background-color: {{$pak->warna}}">
                            <h3 class="my-0 fw-normal mb-1 text-white">{{$pak->harga}}</h3>
                        <p class="my-0 fw-normal text-white">Pasang Lowongan Sekarang</h6>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach

</section>
@endsection

