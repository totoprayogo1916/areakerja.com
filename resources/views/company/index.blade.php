@extends('layouts.main')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">
        <div class="overlay overlay-bg container" >
            <h4 class="gg" style="color: #000000; margin-top: 2.5% ">
                Areakerja.com > {{ $job[0]->name }}
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
<div class="col-lg-8 post-list gg12" >
    <div class="row no-gutters" style="width: 100%">
        <div class="col-8 " style="margin-bottom: 20px">
            <h3 class ="sng-ttl2" style="margin-bottom: 10px; font-weight: normal">Riwayat Lowongan</h3>
            <h2 class="cmp" >{{ $job[0]->name }}</h2>

        </div>
        <div class="col-4 text-right " style="width: 100%;">
            <img class= "gg6" src="{{ url('img/companylogo') }}/{{ $job[0]->gambar }}" style="margin: auto; " >
        </div>
    </div>
    @foreach($job2 as $job1)
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
@endsection

