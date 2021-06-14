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
                <h3>Rekomendasi Lowongan</h3>
            </div>
        </div>
    </div>
</section>
@endsection

@section('slick')
<div class="for_slick_slider multiple-items" id="slick">
    @foreach($sidbarJobs as $job)
        <div class="items"  style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
        <a href="{{ route('jobs.show', $job->id) }}">
            <h5 style="color: #7e7e7e; margin-left: 5%; margin-top: 5%;">Dibutuhkan</h5>
            <h4 style="color: #2b2b2b ; margin-left: 5%; margin-right: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">{{ $job->title }}</h4>
            @if($job->company->gambar)
                <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="width: 150px; height: 120px; margin-left: auto; margin-right: auto;margin-top: 10px">
            @endif
            <h5 style="margin-left: 5%; margin-top: 5%;font-size: 16px" ><span class="lnr lnr-apartment"></span> {{ $job->company->name }}</h5>
            <hr/>
            <h5 style="font-size: 16px;margin-left: 5%" ><span class="lnr lnr-hourglass"></span>  {{ $job->job_nature }}</h5>
            <hr/>
            <h5 style="font-size: 16px;margin-left: 5%;margin-bottom: 5%;"> <span class="lnr lnr-map"></span> {{ $job->address }}</h5>
</a>
        </div>
    @endforeach
</div>
@endsection

@section('content')
<div class="col-lg-8 post-list" id="main-content">
    @foreach($jobs as $job)
    <a href="{{ route('jobs.show', $job->id) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex flex-row" style="width: 100%">
            <div class="thumb" style="margin-top: auto;margin-bottom: auto">
                @if($job->company->gambar)
                    <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="width: 150px; height: 120px;">
                @endif
            </div>
            <div class="details " style="width: 100%">
                <div class="title d-flex flex-row justify-content-between"  >
                    <div class="titles">
                        <h3  style="font-size: 19px; color: #7e7e7e">Dibutuhkan</h3>
                        <h3 style="margin-top: 10px">{{ $job->title }}</h3>
                        <div class="row" style="margin-top: 14px">
                            <div class="col-md-auto " >
                                <h5 style="font-size: 16px" ><span class="lnr lnr-apartment"></span>  {{ $job->company->name }}
                            </div>
                            <div class="col-md-auto" >
                                <h5 style="font-size: 16px"> <span class="lnr lnr-database"></span> {{ $job->salary }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-flex flex-row" style="width: 100%; margin-left: -0.5%"/>
                 <div class="row" >
                    <div class="col-md-auto " >
                        <h5 style="font-size: 16px" ><span class="lnr lnr-hourglass"></span>  {{ $job->job_nature }}
                    </div>
                    <div class="col-md-auto" >
                        <h5 style="font-size: 16px"> <span class="lnr lnr-map"></span> {{ $job->address }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Load More Job Posts</a>
</div>
@endsection
