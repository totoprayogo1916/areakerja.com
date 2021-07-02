<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>Area Kerja - {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style type="text/css">
        body, wrapper {
        min-height:100vh;
        }
    
    .flex-fill {
        flex:1 1 auto;
    }
    </style>

    </head>
    <body>
        
        <wrapper class="d-flex flex-column">
            <nav>
                <nav class="navbar navbar-expand-lg navbar-light" id="header" id="home" >
                    <div class="container">
                      <div id="logo2" class="navbar-brand animate__animated animate__flipInX">
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo3.svg') }}" alt="" title="" /></a>
                      </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                  
                          <li class="nav-item">
                            <a type="button" class="nav-link" href="#" style="color: #fee5ba;font-size: 14px; background-color: #fe7c5400; border: 2px solid #fe7b54; font-weight:600" >
                              <span class="fa fa-map-marker mr-1"></span> Kota Lainnya
                            </a>
                          </li>
                          <li class="nav-item">
                            <a type="button" class="nav-link form-pasang5" href="{{ route('artikel') }}" style="color: #fee5ba;font-size: 14px; background-color: #fe7c5400; border: 2px solid #fe7b54; font-weight:600">
                              <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
                            </a>
                          </li>
                          <li class="nav-item">
                            <a type="button" class="nav-link form-pasang" href="{{ route('pilihpaket') }}" style="color: #fee5ba">
                              <span class="lnr lnr-file-add"></span> Pasang Lowongan
                            </a>
                          </li>
                  
                        </ul>
                      </div>
                    </div>
                  
                  </nav>
            </nav>
            <main class="flex-fill">
                <section class="relative mb-3 mb-md-5" id="home">
                    <div class="banner-area2"  >
                        <div class="overlay overlay-bg container" >
                            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                                Areakerja.com > {{ $job[0]->name }}
                                </h4>
                        </div>
                    </div>
                        <div class="container text-center" >
                            <form action="{{ route('search')}}">
                                <div class="col-10 col-sm-10 col-md-8 form-wrap-main" >
                                <div class="col-12 search" >
                                    <div class="row">
                                    <div class="col-12 col-sm-4 " >
                                        <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                                    </div>
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-6 col-sm-4" >
                                        <select class="default-select3" name="location">
                                            <option value="0">All Areas</option>
                                            @foreach($searchLocations as $id=>$searchLocations)
                                                <option value="{{ $id }}">{{ $searchLocations }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Add clearfix for only the required viewport -->
                                    <div class="col-6 col-sm-4">
                                        <div >
                                        <select class="default-select3" name="location">
                                            <option value="0">All Categories</option>
                                            @foreach($searchCategories as $id=>$searchCategories)
                                                <option value="{{ $id }}">{{ $searchCategories }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 text-center "  >
                                        <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;"> 
                                        <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                                        <span class="lnr lnr-magnifier"></span> Search
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                          </div>
                    </div>
                </section>
                <div class="container">
                    <div class="row justify-content-center d-flex " >
                        <div class="col-lg-8 post-list gg12 h-full" >
                            <div class="row no-gutters" style="width: 100%">
                                <div class="col-8 " style="margin-bottom: 20px">
                                    <h3 class ="sng-ttl2" style="margin-bottom: 10px; font-weight: normal">Riwayat Lowongan</h3>
                                    <h2 class="cmp" >{{ $job[0]->name }}</h2>
                        
                                </div>
                                <div class="col-4 text-right " style="width: 100%;">
                                    <img class= "gg6" src="{{ url('img/companylogo') }}/{{ $job[0]->gambar }}" style="margin: auto; " >
                                </div>
                            </div>
                            @foreach($job2 as $job1)
                            <a href="{{ route('riwayat', $job1->slug) }}">
                                <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">
                        
                                    <div class="details " style="width: 100%" style="margin-top: 14px; overflow: unset; white-space: nowrap;">
                                        <div class="title d-flex flex-row justify-content-between"  >
                                            <div class="titles">
                                                <h3 class ="sng-ttl2" >{{ $job1->title }}</h3>
                                            </div>
                                        </div>
                                        <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%"/>
                                         <div class="row ttl3" >
                                            <div class="col-auto " >
                                                <h5 class ="sng-dtl" ><span class="fa fa-graduation-cap" aria-hidden="true"></span>  {{ $job1->pendidikan }}
                                            </div>
                                            <div class="col-auto " >
                                                <h5 class ="sng-dtl" ><span class="fa fa-hourglass-half" aria-hidden="true"></span>  {{ $job1->job_nature }}
                                            </div>
                                            <div class="col-auto"  >
                                                <h5 class ="sng-dtl" > <span class="fa fa-map-marker" aria-hidden="true"></span> {{ $job1->address }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @include('partials.sidebar')
                        <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-notify modal-info" role="document">
                            <div class="modal-content text-center">
                                <div class="modal-header2 d-flex">
                                <p class="heading">Lowongan Tersimpan</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Nama Pekerjaan</th>
                                        <th>Perusahaan</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($wishlist as $wishlis)
                                        <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $wishlis->job->title }}</td>
                                        <td>{{ $wishlis->job->company->name }}</td>
                                        <td >
                                            <form action="{{ route('jobs.delete', $wishlis->job->id) }}" method="POST" class="justify-content-center flex-wrap" >
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" style=" color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;width: 30px; margin-bottom: 5px" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            <a href="{{ route('jobs.show', $wishlis->job->slug) }}" style="; color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;width: 30px;" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        </form>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
            </main>
            <footer class="footer-area" id="footer">
                <div class="container">
                    <div class="row">
            
                        <div class="col-lg-8">
                            <div class="container footer-nav">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logo3.svg') }}" alt="" title="" /></a>
                                <ul class="col row">
                                    {{-- <li>
                                        <a href= #>Artikel</a>
                                    </li> --}}
                                    <li>
                                        <a href= "{{ route('aboutus') }}">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a href= "{{ route('kontak') }}">Kontak Kami</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pilihpaket') }}">Pasang Lowongan</a>
                                    </li>
                                </ul>
                            </div>
            
                            <div>
                                <p class="col-lg-8 footer-text m-0" style="color: white">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Areakerja.com</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
            
                        </div>
            
            
                        <div class="col-lg-4">
                            <div class="footer-social">
                                <h4 class="text-white">Temukan Kami di</h4>
                                <ul class="col row">
            
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
                </div>
                </div>
            </footer>
            
            <footer class="page-footer special-color-dark  d-md-none d-lg-none d-xl-none">
            
                <!-- Footer Elements -->
            
                  <!-- Social buttons -->
                  <ul class="col row " style="width: max-content;margin-left: auto;margin-right: auto">
            
                    <li class="mr-2">
                        <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px; color:#fe7b54"></i></a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('home') }}"><i class="fa fa-facebook-square" style="font-size:36px; color:#fe7b54"></i></a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('home') }}"><i class="fa fa-twitter-square" style="font-size:36px; color:#fe7b54"></i></a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('home') }}"><i class="fa fa-linkedin-square" style="font-size:36px; color:#fe7b54"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-telegram" style="font-size:36px; color:#fe7b54"></i></a>
                    </li>
                </ul>
                  <!-- Social buttons -->
            
                </div>
                <!-- Footer Elements -->
            
                <!-- Copyright -->
                <div class="container">
                    <div class="footer-copyright text-center py-3"><h5>Temukan Kami</h5></a>
                </div>
                <div class="container">
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
                <nav class="navbar navbar-light navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom no-padding" style="background-color: white">
                    <ul class="navbar-nav nav-justified w-100">
                      <li class="nav-item border-right">
                        <a href="#" class="nav-link" style="color: black"  data-toggle="modal" data-target="#modalPushFilter"> <span class="fa fa-filter" aria-hidden="true"></span>        Filter</a>
                      </li>
                      <li class="nav-item border-right">
                        <a href="#" class="nav-link" style="color: black" data-toggle="modal" data-target="#modalPushRiwayat" ><span class="fa fa-refresh" aria-hidden="true"></span>    Riwayat</a>
                      </li>
                      <li class="nav-item border-right" >
                        <a href="#" class="nav-link" style="color: black" data-target="#modalPush" class="justify-content-between" data-toggle="modal"><span class="fa fa-star-o" aria-hidden="true"></span>     Simpan</a>
                      </li>
                    </ul>
                  </nav>
              </footer>
            
        </wrapper>
        






        
        <div class="modal fade" id="modalPushFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
          <div class="modal-content text-center">
            <div class="modal-header2 d-flex">
              <p class="heading">Filter</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <div data-aos="zoom-in-up" class="single-slidebar " >
                <h4>Lokasi</h4>
                <ul class="cat-list-mobile">
                    @foreach($sidebarLocations as $location)
                        <li><a class="justify-content-between d-flex" href="{{ route('locations.show', $location->slug) }}"><p>{{ $location->name }}</p></a></li>
                    @endforeach
                </ul>
            </div>

            <div data-aos="zoom-in-up" class="single-slidebar">
                <h4>Kategori</h4>
                <ul class="cat-list-mobile">
                    @foreach($sidebarCategories as $category)
                        <li><a class="justify-content-between d-flex" href="{{ route('categories.show', $category->slug)}}"><p>{{ $category->name }}</p></a></li>
                    @endforeach
                </ul>
            </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
            </div>
          </div>
        </div>
        </div>
        <div class="modal fade" id="modalPushRiwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
          <div class="modal-content text-center">
            <div class="modal-header2 d-flex">
              <p class="heading">Riwayat Penelusuran</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Pekerjaan</th>
                      <th>Perusahaan</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($riwayatlist as $riwayatlis)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $riwayatlis->job->title }}</td>
                      <td>{{ $riwayatlis->job->company->name }}</td>
                      <td width='50%'>
                        <a href="{{ route('jobs.show', $riwayatlis->job->slug) }}" style="; color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    </form>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
            </div>
          </div>
        </div>
        </div>

        

        <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/hoverIntent.js') }}"></script>
        <script src="{{ asset('js/superfish.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/parallax.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/app2show.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/app2.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script>
            AOS.init({
                once: true,
            });
        </script> 

        @include('sweetalert::alert')
    </body>
</html>

{{-- @extends('user.main')

@section('home')
<section class="relative mb-3 mb-md-5" id="home">
    <div class="banner-area2"  >
        <div class="overlay overlay-bg container" >
            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                Areakerja.com > {{ $job[0]->name }}
                </h4>
        </div>
    </div>
        <div class="container text-center" >
            <form action="{{ route('search')}}">
                <div class="col-10 col-sm-10 col-md-8 form-wrap-main" >
                <div class="col-12 search" >
                    <div class="row">
                    <div class="col-12 col-sm-4 " >
                        <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-6 col-sm-4" >
                        <select class="default-select3" name="location">
                            <option value="0">All Areas</option>
                            @foreach($searchLocations as $id=>$searchLocations)
                                <option value="{{ $id }}">{{ $searchLocations }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Add clearfix for only the required viewport -->
                    <div class="col-6 col-sm-4">
                        <div >
                        <select class="default-select3" name="location">
                            <option value="0">All Categories</option>
                            @foreach($searchCategories as $id=>$searchCategories)
                                <option value="{{ $id }}">{{ $searchCategories }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 text-center "  >
                        <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;"> 
                        <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                        <span class="lnr lnr-magnifier"></span> Search
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </form>
          </div>
    </div>
</section>
@endsection


@section('content')
<div class="col-lg-8 post-list gg12 h-full" >
    <div class="row no-gutters" style="width: 100%">
        <div class="col-8 " style="margin-bottom: 20px">
            <h3 class ="sng-ttl2" style="margin-bottom: 10px; font-weight: normal">Riwayat Lowongan</h3>
            <h2 class="cmp" >{{ $job[0]->name }}</h2>

        </div>
        <div class="col-4 text-right " style="width: 100%;">
            <img class= "gg6" src="{{ url('img/companylogo') }}/{{ $job[0]->gambar }}" style="margin: auto; " >
        </div>
    </div>
    @foreach($job2 as $job1)
    <a href="{{ route('riwayat', $job1->slug) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">

            <div class="details " style="width: 100%" style="margin-top: 14px; overflow: unset; white-space: nowrap;">
                <div class="title d-flex flex-row justify-content-between"  >
                    <div class="titles">
                        <h3 class ="sng-ttl2" >{{ $job1->title }}</h3>
                    </div>
                </div>
                <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%"/>
                 <div class="row ttl3" >
                    <div class="col-auto " >
                        <h5 class ="sng-dtl" ><span class="fa fa-graduation-cap" aria-hidden="true"></span>  {{ $job1->pendidikan }}
                    </div>
                    <div class="col-auto " >
                        <h5 class ="sng-dtl" ><span class="fa fa-hourglass-half" aria-hidden="true"></span>  {{ $job1->job_nature }}
                    </div>
                    <div class="col-auto"  >
                        <h5 class ="sng-dtl" > <span class="fa fa-map-marker" aria-hidden="true"></span> {{ $job1->address }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection --}}

