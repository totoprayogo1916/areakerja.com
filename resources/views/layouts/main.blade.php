<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
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

        @include('partials.banner')

        @yield('home')

        @yield('jobss')


        <!-- Start post Area -->
        <section class="post-area section-gap">

            <div class="container">
                @yield('slick')
                <div class="row justify-content-center d-flex"  >

                    @yield('content')
                    @include('partials.sidebar')
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
      <i class="fas fa-star fa-1x animated rotateIn"></i>
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
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            @foreach($wishlist as $wishlis)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $wishlis->job->title }}</td>
              <td>{{ $wishlis->job->company->name }}</td>
              <td><a style=" color:#fff" class="btn btn-xs btn-danger">
                remove
            </a></i></a>
                <a style="color:#fff" class="btn btn-xs btn-info">
                    view
                </a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

    <!--Footer-->
    <div class="modal-footer">
      <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">Close</a>
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
        </script>


        @include('sweetalert::alert')



    </body>
</html>
