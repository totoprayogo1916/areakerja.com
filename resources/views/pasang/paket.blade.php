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
          <div class="card mb-4 " style="border-radius: 25px;">
            <div class="card-header " style="border-radius:  25px 25px 60px 60px/25px 25px 20px 20px; height: auto;background-color: {{$pak->warna}}">
              <h3 class="my-0 fw-normal mb-1 text-white">{{$pak->nama}}</h3>
              <h4 class="my-0 fw-normal text-white">{{$pak->deskripsi_singkat}}</h4>
            </div>
            <div class="card-body">
                
                <p>{{$pak->deskripsi_full}}</p>
              <ul class="mb-4">
                @foreach($pak->list as $fitur)
                    {{$fitur}}
                @endforeach
                <hr/>
              </ul>
            </div>
            <div class="card-footer" style="border-radius:  60px 60px 25px 25px/20px 20px 25px 25px; height: auto;background-color: {{$pak->warna}}">
                <h3 class="my-0 fw-normal mb-1 text-white">{{$pak->harga}}</h3>
              <p class="my-0 fw-normal text-white">Pasang Lowongan Sekarang</h6>
            </div>  
          </div>
        </div>
        @endforeach
    
</section>
@endsection

