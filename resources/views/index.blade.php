@extends('layouts.main')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    Tempat Mencari Kerja
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                Temukan loker Jogja terbaru bulan Juni 2021 dengan mudah.
                </h6>
                 <form action="{{ route('search')}}" class="serach-form-area flex-wrap" style="width: 100%">
                    <div class="col form-wrap-main" id="form-luar">
                        <div class="row form-wrap justify-content-center" id="form-dalam">
                            <div class="col-lg-3 form-cols">
                                <input type="text" class="form-control"  name="search" placeholder="Cari Disini..">
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
                <h3>Rekomendasi Lowongan</h3>
            </div>
        </div>
    </div>
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
</section>
@endsection

@section('slick')
<div class="for_slick_slider multiple-items" id="slick">
    @foreach($sidbarJobs as $job)
        <div class="items"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <a href="{{ route('jobs.show', $job->id) }}">
            <h3 class ="sng-ttl5" style="color: #7e7e7e; margin-left: 5%; margin-top: 5%;">Dibutuhkan</h3>
            <h3 class ="sng-ttl5" style="color: #2b2b2b ; margin-left: 5%; margin-right: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">{{ $job->title }}</h3>
            @if($job->company->gambar)
                <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="width: 100px; height:80px; margin-left: auto; margin-right: auto;margin-top: 10px">
            @endif
            <h5 class ="sng-dtl" style="margin-left: 5%; margin-top: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));" ><span class="fa fa-building-o" aria-hidden="true"></span> {{ $job->company->name }}</h5>
            <hr/>
            <h5 class ="sng-dtl" style="margin-left: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));" ><span class="fa fa-hourglass-half" aria-hidden="true"></span>  {{ $job->job_nature }}</h5>
            <hr/>
            <h5 class ="sng-dtl" style="margin-left: 5%;margin-bottom: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));"> <span class="fa fa-map-marker" aria-hidden="true"></span> {{ $job->address }}</h5>
</a>
        </div>
    @endforeach
</div>
@endsection

@section('content')
<div class="col-lg-8 post-list border-right" id="main-content">
    @foreach($jobs as $job)
    <a href="{{ route('jobs.show', $job->id) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">
            <div class="row" style="margin: auto;margin-right:20px" >
                @if($job->company->gambar)
                    <img class="thumb2" src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" >
                @endif
            </div>

            <div class="details " style="width: 100%" style="margin-top: 14px; overflow: unset; white-space: nowrap;">
                <div class="title d-flex flex-row justify-content-between"  >
                    <div class="titles">
                        <h3 class ="sng-ttl" style="color: #7e7e7e">Dibutuhkan</h3>
                        <h3 class ="sng-ttl2" >{{ $job->title }}</h3>
                        <div class="row ttl3" style=" overflow: unset; white-space: nowrap;">
                            <div class="col-auto"  >
                                <h5 class ="sng-dtl" ><span class="fa fa-building-o" aria-hidden="true"></span>  {{ $job->company->name }}
                            </div>
                            <div class="col-auto" >
                                <h5 class ="sng-dtl" > <span class="fa fa-money" aria-hidden="true"></span> {{ $job->salary }}</h5>
                            </div>
                        </div>
                    </div>

                </div>

                <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%"/>
                 <div class="row ttl3" >
                    <div class="col-auto " >
                        <h5 class ="sng-dtl" ><span class="fa fa-graduation-cap" aria-hidden="true"></span>  {{ $job->pendidikan }}
                    </div>
                    <div class="col-auto " >
                        <h5 class ="sng-dtl" ><span class="fa fa-hourglass-half" aria-hidden="true"></span>  {{ $job->job_nature }}
                    </div>
                    <div class="col-auto"  >
                        <h5 class ="sng-dtl" > <span class="fa fa-map-marker" aria-hidden="true"></span> {{ $job->address }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Load More Job Posts</a>
</div>
@endsection
