<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/img-01.png">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>Area Kerja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    @include('partials.header')
    <img src="{{ url('img/up.png') }}" onclick="topFunction()" id="myBtn" title="Go to top" class="myBtn"></img>

        @include('partials.banner')

        @yield('home')

        @yield('jobss')


        <!-- Start post Area -->
        <section class="post-area section-gap">

            <div class="container">
                @yield('slick')
                @yield('rekom')
                <div class="row justify-content-center d-flex mt-4"  >
                    @yield('content')
                    @include('partials.sidebar')
                    @yield('bottom')
                </div>
            </div>
        </section>
        <!-- End post Area -->


               <!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header2 d-flex">
      <p class="heading">Lowongan Tersimpan</p>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
    </button>
    </div>

    <!--Body-->
    <!--Body-->
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
                {{-- <a href="{{ route('jobs.delete', $wishlis->job->id) }}" style="color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-danger">{{ method_field('DELETE') }}<i class="fas fa-trash"></i></a> --}}
                <form action="{{ route('jobs.delete', $wishlis->job->id) }}" method="POST" class="justify-content-center flex-wrap" >
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" style=" color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;width: 30px; margin-bottom: 5px" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                <a href="{{ route('jobs.show', $wishlis->job->id) }}" style="; color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;width: 30px;" class="btn btn-info"><i class="fas fa-eye"></i></a>
            </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

    <!--Footer-->
    <div class="modal-footer">
      <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->

<!--Modal Riwayat-->
<div class="modal fade" id="modalPushFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header2 d-flex">
      <p class="heading">Riwayat Penelusuran</p>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
    </button>
    </div>

    <!--Body-->
    <!--Body-->
    <div class="modal-body">
      <div data-aos="zoom-in-up" class="single-slidebar " >
        <h4>Lokasi</h4>
        <ul class="cat-list">
            @foreach($sidebarLocations as $location)
                <li><a class="justify-content-between d-flex" href="{{ route('locations.show', $location->id) }}"><p>{{ $location->name }}</p></a></li>
            @endforeach
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Kategori</h4>
        <ul class="cat-list">
            @foreach($sidebarCategories as $category)
                <li><a class="justify-content-between d-flex" href="{{ route('categories.show', $category->id)}}"><p>{{ $category->name }}</p></a></li>
            @endforeach
        </ul>
    </div>
    </div>

    <!--Footer-->
    <div class="modal-footer">
      <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<div class="modal fade" id="modalPushRiwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header2 d-flex">
      <p class="heading">Riwayat Penelusuran</p>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span style="color: rgb(255, 255, 255)"   aria-hidden="true">&times;</span>
    </button>
    </div>

    <!--Body-->
    <!--Body-->
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
                {{-- <a href="{{ route('jobs.delete', $wishlis->job->id) }}" style="color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-danger">{{ method_field('DELETE') }}<i class="fas fa-trash"></i></a> --}}
                {{-- <form action="{{ route('jobs.delete', $wishlis->job->id) }}" method="POST" class="justify-content-center flex-wrap" >
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" style="margin-right: 10px; color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-danger"><i class="fas fa-trash"></i></button> --}}
                <a href="{{ route('jobs.show', $riwayatlis->job->id) }}" style="; color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-info"><i class="fas fa-eye"></i></a>
            </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

    <!--Footer-->
    <div class="modal-footer">
      <a type="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->

         <!-- Modal -->
         {{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lowongan Tersimpan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        @foreach($wishlist as $wishlis)
                            <a class="justify-content-center" href="{{ route('jobs.show', $job->id) }}">{{ $wishlis->job->title }} ---> {{ $wishlis->job->company->name }}</a>
                            <hr style="width: 90%"/>
                        @endforeach
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div> --}}

        @include('partials.footer')

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
        <script>
            // When the user clicks on div, open the popup
            function myFunction() {
              var popup = document.getElementById("myPopup");
              popup.classList.toggle("show");
            }

            function myFunction2() {
              var popup = document.getElementById("myPopup2");
              popup.classList.toggle("show");
            }

            function myFunction3() {
              var popup = document.getElementById("myPopup3");
              popup.classList.toggle("show");
              setTimeout(function () {
                        popup.classList.toggle("show");
                    }, 2000);
            }

            function myFunction4() {
              var popup = document.getElementById("myPopup4");
              popup.classList.toggle("show");
              setTimeout(function () {
                        popup.classList.toggle("show");
                    }, 2000);

            }
        </script>
        <script>
            function CopyToClipboard(id)
            {
                var r = document.createRange();
                r.selectNode(document.getElementById(id));
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(r);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
            }

            var mybutton = document.getElementById("myBtn");
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>


        @include('sweetalert::alert')



    </body>
</html>
