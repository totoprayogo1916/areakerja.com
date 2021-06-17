@extends('layouts.main')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">
        <div class="overlay overlay-bg container" >
            <h4 class="gg" style="color: #000000; margin-top: 2.5% ">
                Areakerja.com > {{ $job->address }} > Lowongan {{ $job->title }} di {{ $job->company->name }}
                </h4>
        </div>
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px;">
            <div class="banner-content col-lg-12">
                </h6>
                 <form action="{{ route('search') }}" class="serach-form-area flex-wrap" style="width: 100%; margin-top: 5%">
                    <div class="col form-wrap-main" id="form-luar">
                        <div class="row form-wrap justify-content-center" id="form-dalam">
                            <div class="col-lg-3 form-cols">
                                <input type="text" class="form-control" name="search" placeholder="Cari Disini..">
                            </div>
                            <div class="col-lg-3 form-cols">
                                <div class="default-select" id="default-selects">
                                    <select name="location">
                                        <option value="0">All Areas</option>
                                        @foreach($searchLocations as $id=>$searchLocations)
                                            <option value="{{ $id }}">{{ $searchLocations }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 form-cols">
                                <div class="default-select" id="default-selects2">
                                    <select name="category">
                                        <option value="0">All Categories</option>
                                        @foreach($searchCategories as $id=>$searchCategories)
                                            <option value="{{ $id }}">{{ $searchCategories }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area ">
                                <span class="lnr lnr-magnifier"></span> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="col-lg-8 post-list" >
    <div class="single-post2 d-flex flex-row" style="margin-bottom: 10px">
        <div class="details" style="width: 100%">
            <div class="row" style="width: 100%">
                <div class="col-10">
                    <a href="#"><h2 class="cmp" style="font-weight: normal">{{ $job->company->name }}</h2></a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>

                    <h1 class="ttl" style="margin-top: 8px"> {{ $job->title }}</h1>
                </div>
                <div class="col-2 text-center ">
                    <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="height: inherit; width : inherit;margin: auto; " >
                </div>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px"/>
            <h4 class="gg" style="margin-top: 8px; font-weight: normal;">{{$job->short_description}}</h4>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px"/>
            <h3 class="head" style="margin-top: 10px">Ringkasan</h3>
            <div class="row">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Pendidikan</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-user-circle-o"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h4></li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" > <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" > <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" > <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" > <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" > <span>:</span></h4></li>
                </ul>
                <ul class="col-6 " >
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->pendidikan }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->gender }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->umur }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->job_nature }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->salary }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->bataslamaran }}</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><p style="line-height: 150%; margin-top: -1%">{{ $job->lokasikerja }}</p></h4></li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 class="head" style="margin-top: 10px">Deskripsi Pekerjaan</h3>
            @foreach($job->full_description as $hehe)
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $hehe }}</h4>
                </li>
            </ul>
            @endforeach

            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 class="head" style="margin-top: 10px">Syarat Pekerjaan</h3>
            @foreach($job->requirements as $hehe)
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $hehe }}</h4>
                </li>
            </ul>
            @endforeach

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 class="head" style="margin-top: 10px">Kirim Lamaran</h3>
            <div class="row ">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Email</h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" ><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4></li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4></li>
                </ul>
                <ul class="col-6" style="overflow: unset; white-space: nowrap;">
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" id="sample">{{ $job->email }}</h4><button onclick="CopyToClipboard('sample'); return false;" class="fas fa-copy ui-button-icons-only buttona"></button></li>
                    <li><h4 class="gg" style="margin-top: 10px; font-weight: normal" >{{ $job->notelp }}</h4></li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <div class="row" style="margin-top: 15px">
                <div class="col-2" style="margin-right: 10%;">
                    <div class="btn popup2 form-pasang3" id="btn1" onclick="myFunction2()"><h4 class="gg" style="font-weight: normal" ><span class="fa fa-paper-plane-o"></span><span style="display:inline-block; width: 10px;"></span>Lamar</h4>
                        <div class="row justify-content-center popuptext" id="myPopup2" style="padding-right: 0px;margin-right: 0px">
                            <ul class="row justify-content-center">
                                <li style="margin-bottom: 5%; margin-top: 5%">
                                    <a type="button" class="btn form-pasang4" href="{{ route('login') }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-folder-open-o"></span><span style="display:inline-block; width: 5px;"></span>Formulir</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px;margin-bottom: 5%; margin-top: 5%">
                                    <a type="button" class="btn form-pasang4" href="https://wa.me/{{ $job->notelp }}?text=Halo {{ $job->company->name }}, Saya *..NAMA..* mendapatkan informasi lowongan kerja dari Areakerja.com. Saya berminat untuk melamar kerja sebagai {{ $job->title }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-whatsapp"></span><span style="display:inline-block; width: 5px;"></span>Whatsapp</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px; margin-bottom: 5%" id="liemail">
                                    <a type="button" class="btn form-pasang4" href="mailto:{{ $job->email }}?subject=Lamaran Pekerjaan di {{ $job->company->name }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-envelope-o"></span><span style="display:inline-block; width: 5px;"></span>Email</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2 gg2" style="margin-right: 12%" >
                    <a type="button" class="btn form-pasang3" href="{{ route('cache', $job->id) }}" id="btn2">
                        <h4  class="gg" style="font-weight: normal" id="btnh42"><span class="fa fa-star-o"></span><span style="display:inline-block; width: 10px;"></span>Simpan</h4>
                    </a>
                </div>

                {{ session()->get('message') }}

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Lowongan Tersimpan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            @foreach ($wishlist as $wishlis)
                            {{ $wishlis->job->title }}
                            <br>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                {{-- <div class="col-2">
                    <a type="button" class="btn form-pasang3" href="whatsapp://send?text={{ route('jobs.show', $job->id) }}">
                        <h4 style="font-weight: normal"><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>

                    </a>
                </div> --}}
                <div class="col-2" >
                    <div class="btn popup form-pasang3" onclick="myFunction()" id="btn3">
                        <h4  class="gg" style="font-weight: normal" ><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>
                        <div class="row justify-content-center popuptext" id="myPopup" style="padding-right: 0px;margin-right: 0px">
                            <ul class="col row justify-content-center">

                                <li>
                                    <a href="https://www.facebook.com/sharer.php?u={{ route('jobs.show', $job->id) }}"><i class="fa fa-facebook-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://twitter.com/intent/tweet?text=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fa fa-twitter-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://mail.google.com/mail/?view=cm&su=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fas fa-envelope-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://wa.me/?text=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fab fa-whatsapp-square" style="font-size:36px; color: black""></i></a>
                                </li>

                            </ul>
                        </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
