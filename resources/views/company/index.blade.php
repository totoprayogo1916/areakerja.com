@extends('layouts.main')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">
        <div class="overlay overlay-bg container" >
            <h4 class="gg" style="color: #000000; margin-top: 2.5% ">
                Areakerja.com > {{ $job2->company->name }}
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
                                        {{-- @foreach($searchLocations as $id=>$searchLocations)
                                            <option value="{{ $id }}">{{ $searchLocations }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 form-cols">
                                <div class="default-select" id="default-selects2">
                                    <select name="category">
                                        <option value="0">All Categories</option>
                                        {{-- @foreach($searchCategories as $id=>$searchCategories)
                                            <option value="{{ $id }}">{{ $searchCategories }}</option>
                                        @endforeach --}}
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
<div class="col-lg-8 post-list"  id="main-content">
    <div class="row no-gutters" style="width: 100%; margin-bottom: 25px">
        <div class="col-8">
            <h4  style="margin-top: 8px; font-weight: normal">Riwayat Lowongan</h4   >
            <h2 class="cmp" style="font-weight: normal">{{ $job2->company->name }}</h2>

        </div>
        <div class="col-4 text-right " style="width: 100%;">
            <img class= "gg6" src="{{ url('img/companylogo') }}/{{ $job2->company->gambar }}" style="margin: auto; " >
        </div>
    </div>
    @foreach($job as $job1)
    <a href="{{ route('riwayat', $job1->id) }}">
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
@endsection
@section('bottom')
    <div class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>
@endsection

