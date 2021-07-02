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
                <h4 style="font-weight: normal;display: block; line-height: 1.6 !important; ">{!!$pak->deskripsi_full!!}</h4>
                    <div class="col-11 col-sm-8 mx-auto no-padding" style="overflow: unset; white-space: nowrap; ">
                        <ul class="text-left mb-4">
                            @foreach($pak->list as $fitur)
                                <li class="mb-3  " style="font-weight: normal;" >{!!$fitur!!}</li>
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

@section('slick')
<h3 class ="sng-ttl9 text-center mb-3">Cara Memasang Lowongan</h3>
<div class="col-12 col-sm-10 no-gutters no-padding mx-auto">
  <div class="for_slick_slider2 multiple-items2 mx-auto" >
    <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
      <div class="header text-left">
        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-1.png" style="margin-top: -37px; margin-bottom:20px">
        <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-1.png" style="width: 100px; height:80px; margin-top: -10px">
      </div>
      <h5 class ="sng-dtl">Pilih paket pemasangan lowongan sesuai yang anda inginkan</h5>
    </div>
    <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
      <div class="header text-left">
        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-2.png" style="margin-top: -37px;margin-bottom:20px">
        <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-2.png" style="width: 100px; height:80px; margin-top: -10px">
      </div>
      <h5 class ="sng-dtl"  >Kirim materi lowongan via formulir website atau whatsapp kami</h5>
    </div>
    <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
      <div class="header text-left">
        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-3.png" style="margin-top: -37px;margin-bottom:20px">
        <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-3.png" style="width: 100px; height:80px; margin-top: -10px">
      </div>
        <h5 class ="sng-dtl"  >Setelah materi dikirim, anda akan diberikan intruksi pembayaran  </h5>
    </div>
    <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
      <div class="header text-left">
        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-4.png" style="margin-top: -37px;margin-bottom:20px ">
        <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-4.png" style="width: 100px; height:80px;margin-top: -10px ">
      </div>
      <h5 class ="sng-dtl"  >Apabila pembayaran sudah dilakukan, lowongan akan dipublikasikan</h5>
    </div>


</div>


    {{-- <h3 style="margin-bottom: 15px; text-align: center">Lowongan wd</h3> --}}
</div>
@endsection

