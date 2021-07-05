@extends('layouts.pasang')
@section('home')
<section class="relative" >
    <div class="banner-area3">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container" >
                    <h5 class="mt-3 text-right" style="color: #00000062; ">
                      Areakerja.com >
                          <a style="color: #00000062; " href="{{ route('artikel') }}">Pasang Lowongan</a>  
                    </h5>
                    <h2 class="mt-3 mb-2 pasang" style="color: #fe7b54;  font-weight: 400; ">
                      Pasang <strong>Lowongan</strong> di <strong>Areakerja.com</strong> 
                    </h2>
                    <h4 class="pasang" style="color: #fe7b54;line-height: 2!important;font-weight: 500 ">
                      Platform lowongan kerja no. 1 <br />di Yogyakarta untuk mendapatkan talenta terbaik bagi perusahaan anda
                    </h4>
                    
                </div>
                
            </div>
            
        </div>
    </div>
   
    
</section>
@endsection

@section('content')

<section class="relative" id="home" >
      <div class='slider-nav'>
        <div><img alt="" class="img-social" src="img/img-01.png"  /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png"  /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png"  /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" /></div>
        <div><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" /></div>
      </div>
    
      <div class="col-12 col-sm-10 col-md-8 mx-auto">
        <div class='slider'>
            <div class="container">
                <div class="row align-items-center ">
                  <div class="col-4 col-sm-3 align-self-center">
                    <img class="mx-auto img-r" src="img/img-01.png" alt="">
                  </div>
                  <div class="col-8 col-sm-9 no-padding my-3">
                    <h3 class="mb-2 paket" style="font-weight: 400">Website Area Kerja</h3>
                    <h5 class ="paket2" style="line-height: 1.6!important;font-weight: 200;">Ribuan pencari kerja mengunjungi
                        <a href="{{ route('home') }}">website</a>
                        & aplikasi kami setiap hari untuk melihat lowongan terbaru di Yogyakarta</h5>
                    
                  </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center ">
                  <div class="col-4 col-sm-3 pr-0">
                    <img class="mx-auto img-r " src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" alt="">
                  </div>
                  <div class="col-8 col-sm-9 no-padding my-3">
                    <div class="container">
                      <h3 class="mb-2 paket">Google Jobs & Bisnis</h3>
                      <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Listing di Google Jobs & Bisnis <a>(klik untuk contoh)</a> membuat lowongan anda semakin banyak dilihat dan lebih efektif</h5>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
              <div class="row align-items-center " >
                <div class="col-4 col-sm-3 pr-0" >
                  <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" alt="">
                </div>
                <div class="col-8 col-sm-9 no-padding my-3">
                  <div class="container">
                    <h3 class="mb-2 paket">Instagram</h3>
                    <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami mempunyai ratusan ribu pengikut di akun instagram kami yang terus tumbuh, sehingga efektif</h5>
                  </div>
                  </div>
              </div>
            </div>
            <div class="container">
              <div class="row align-items-center " >
                <div class="col-4 col-sm-3 pr-0" >
                  <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" alt="">
                </div>
                <div class="col-8 col-sm-9 no-padding my-3">
                  <div class="container">
                    <h3 class="mb-2 paket">Facebook</h3>
                    <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami mempunyai ratusan ribu pengikut di akun instagram kami yang terus tumbuh, sehingga efektif</h5>
                  </div>
                  </div>
              </div>
            </div>

          <div class="container">
            <div class="row align-items-center " >
              <div class="col-4 col-sm-3 pr-0" >
                <img  class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" alt="">
              </div>
              <div class="col-8 col-sm-9 no-padding my-3">
                <div class="container">
                  <h3 class="mb-2 paket">Twitter</h3>
                  <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami mempunyai ratusan ribu pengikut di akun instagram kami yang terus tumbuh, sehingga efektif</h5>
                </div>
                </div>
            </div>
        </div>
          <div class="container">
            <div class="row align-items-center " >
              <div class="col-4 col-sm-3 pr-0" >
                <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" alt="">
              </div>
              <div class="col-8 col-sm-9 no-padding my-3">
                <div class="container">
                  <h3 class="mb-2 paket">Linkedin</h3>
                  <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami mempunyai ratusan ribu pengikut di akun instagram kami yang terus tumbuh, sehingga efektif</h5>
                </div>
                </div>
            </div>
        </div>
          <div class="container">
            <div class="row align-items-center " >
              <div class="col-4 col-sm-3 pr-0" >
                <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" alt="">
              </div>
              <div class="col-8 col-sm-9 no-padding my-3">
                <div class="container">
                  <h3 class="mb-2 paket">Telegram</h3>
                  <h5 class ="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami mempunyai ratusan ribu pengikut di akun instagram kami yang terus tumbuh, sehingga efektif</h5>
                </div>
                </div>
            </div>
        </div>

        </div>
      </div>
    <div class="row mb-3 justify-content-around text-center mt-5" >
        @foreach($paket as $pak)
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-4 " >

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
@section('awanatas')
<div class="awan">
  <div class="awandalam"></div>
</div>
@endsection
@section('slick')
<div class="container">
  <h3 class ="sng-ttl9 text-center mb-3">Cara Memasang Lowongan</h3>
  <div class="col-12 col-sm-10 no-gutters no-padding mt-4 mx-auto">
    <div class="for_slick_slider2 multiple-items2 mx-auto" >
      <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <div class="header text-left">
          <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-1.png" style="margin-top: -37px; margin-bottom:20px">
          <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-1.png" style="width: 100px; height:80px; margin-top: -10px">
        </div>
        <h5 class ="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Pilih paket pemasangan lowongan sesuai yang anda inginkan</h5>
      </div>
      <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <div class="header text-left">
          <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-2.png" style="margin-top: -37px;margin-bottom:20px">
          <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-2.png" style="width: 100px; height:80px; margin-top: -10px">
        </div>
        <h5 class ="sng-dtl"  style="font-weight: normal;line-height: 1.65!important">Kirim materi lowongan via formulir website atau whatsapp kami</h5>
      </div>
      <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <div class="header text-left">
          <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-3.png" style="margin-top: -37px;margin-bottom:20px">
          <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-3.png" style="width: 100px; height:80px; margin-top: -10px">
        </div>
          <h5 class ="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Setelah materi dikirim, anda akan diberikan intruksi pembayaran  </h5>
      </div>
      <div class="items card py-3 form-wrap-main"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <div class="header text-left">
          <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-4.png" style="margin-top: -37px;margin-bottom:20px ">
          <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-4.png" style="width: 100px; height:80px;margin-top: -10px ">
        </div>
        <h5 class ="sng-dtl"  style="font-weight: normal;line-height: 1.65!important">Apabila sudah membayar sudah dilakukan, lowongan akan dipublikasikan</h5>
      </div>
  
  
  </div>
</div>



    {{-- <h3 style="margin-bottom: 15px; text-align: center">Lowongan wd</h3> --}}
</div>
@endsection
@section('awanbawah')
<div class="awan2 mb-5"></div>
@endsection

