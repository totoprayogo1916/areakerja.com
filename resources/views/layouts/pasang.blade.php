<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>{{ $title }} - Area Kerja</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style type="text/css">
        body, wrapper {
        min-height:100vh;
        }
    
    .flex-fill {
        flex:1 1 auto;
    }

    .slider > div {
        display:block; 
        width:100%; 
        padding: 50px 0;
        border-radius: 20px;
        background: rgb(233, 106, 21);
        text-align: center; font-size: 2em;
      }

      /* Navigation */
      .slider-nav { text-align: center; }
      .slider-nav > div {
        display:inline-block;
        width:auto; height: auto; margin: 0 5px; 
        padding:  10px 10px 8px 10px;
        text-align: center; font-size:2em;
        border-radius: 20px 20px 0 0 ;
        background: rgb(252, 159, 82); cursor: pointer;
      }
    </style>
    </head>
    <body>
        <wrapper class="d-flex flex-column">
            <nav>
                @include('partials.header')
            </nav>
            <main class="flex-fill">
                @yield('home')
                <section class="post-area section-gap">
                    <div class="container ">
                        @yield('content')
                        @yield('slick')
                    </div>
                </section>
            </main>
            @include('user.footer')
        </wrapper>
    
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
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/app2.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/app2user.js') }}"></script>
        <script src="{{ asset('js/app2pasang.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/pasang.js') }}"></script>
        <script>
            AOS.init({
                once: true,
            });
        </script>
        <script>
            $('.slider').slick({
            arrows:false, dots: false, infinite:true, speed:500,
            autoplay:false, autoplaySpeed: 3000, slidesToShow:1, slidesToScroll:1
          });
          //On click of slider-nav childern,
          //Slick slider navigate to the respective index.
          $('.slider-nav > div').click(function() {
            $('.slider').slick('slickGoTo',$(this).index());
          })
          </script>
        @include('sweetalert::alert')

    </body>
</html>
