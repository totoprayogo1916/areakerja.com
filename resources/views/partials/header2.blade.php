<nav class="navbar navbar-expand-lg navbar-light" id="header" id="home" style="background:transparent">
    <div class="container">
        <div id="logo2" class="navbar-brand animate__animated animate__flipInX">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01.png') }}" style="width:50px;" alt="" title="" /></a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a type="button" class="nav-link" href="#"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa fa-map-marker mr-1"></span> Kota Lainnya
                    </a>
                </li>
                <li class="nav-item">
                    <a type="button" class="nav-link form-pasang5" href="{{ route('artikel') }}"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
                    </a>
                </li>
                <li class="nav-item mr-10">
                    <a type="button" class="nav-link form-pasang" href="{{ route('daftarkandidat') }}"
                        style="color: #fee5ba">
                        <span class="fas fa-user-tie"></span> Daftar Sebagai Kandidat
                    </a>
                </li>
                <li class="nav-item">
                    <a type="button" class="nav-link form-pasang" href="{{ route('pilihpaket') }}"
                        style="color: #fee5ba">
                        <span class="lnr lnr-file-add"></span> Pasang Lowongan
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>
