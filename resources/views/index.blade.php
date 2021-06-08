@extends('layouts.main')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">

        <div class="row align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54">
                    Tempat Mencari Kerja
                </h1>
                <h6 style="color: #fe7b54">
                Temukan loker Jogja terbaru bulan Juni 2021 dengan mudah. 
                </h6>
                 <form action="#" class="serach-form-area flex-wrap" >
                    <div class="row form-wrap">
                        <div class="col-lg-4 form-cols">
                            <input type="text" class="form-control" placeholder="What are you looking for?">
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects">
                                <select>
                                    <option value="0">All Areas</option>
                                    @foreach($searchLocations as $id=>$searchLocations)
                                        <option value="{{ $id }}">{{ $searchLocations }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects2">
                                <select>
                                    <option value="0">All Categories</option>
                                    @foreach($searchCategories as $id=>$searchCategories)
                                        <option value="{{ $id }}">{{ $searchCategories }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 form-cols">
                            <button type="submit" class="btn btn-area">
                              <span class="lnr lnr-magnifier"></span> Search
                            </button>
                        </div>
                    </div>
                </form>
                <p  style="color: #fe7b54"   >Cari sesuai kategori:
               @foreach($searchByCategory as $id=>$searchByCategory)
                    <a href="#"  style="color: #fe7b54">{{ $searchByCategory }}</a>@if (!$loop->last),@endif
                @endforeach
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="col-lg-8 post-list">
    @foreach($jobs as $job)
    <a href="{{ route('jobs.show', $job->id) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex flex-row">
            <div class="thumb" style="margin-top: auto;margin-bottom: auto">
                @if($job->company->gambar)
                    <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="width: 150px; height: 120px;">
                @endif
            </div>
            <div class="details " style="width: 100%">
                <div class="title d-flex flex-row justify-content-between"  >
                    <div class="titles">
                        <h3  style="font-size: 19px; color: #b19ea8">Dibutuhkan</h3>
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
                <hr class="d-flex flex-row"/>
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
