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
                            <a href="{{ route('pasang') }}">Pasang Lowongan</a>
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
            <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px"></i></a>
        </li>
        <li class="mr-2">
            <a href="{{ route('home') }}"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
        </li>
        <li class="mr-2">
            <a href="{{ route('home') }}"><i class="fa fa-twitter-square" style="font-size:36px"></i></a>
        </li>
        <li class="mr-2">
            <a href="{{ route('home') }}"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
        </li>
        <li>
            <a href="{{ route('home') }}"><i class="fa fa-telegram" style="font-size:36px"></i></a>
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
            <a href="#" class="nav-link" style="color: black" > <span class="fa fa-filter" aria-hidden="true"></span>        Filter</a>
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
