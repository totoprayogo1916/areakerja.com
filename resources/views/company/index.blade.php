@extends('layouts.main')

@section('home')
<section class="relative mb-3 mb-md-5" id="home">
    <div class="banner-area2"  >
        <div class="overlay overlay-bg container" >
            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                Areakerja.com > {{ $job[0]->name }}
                </h4>
        </div>
    </div>
        <div class="container text-center" >
            <form action="{{ route('search')}}">
                <div class="col-10 col-sm-10 col-md-8 form-wrap-main" >
                <div class="col-12 search" >
                    <div class="row">
                    <div class="col-12 col-sm-4 " >
                        <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-6 col-sm-4" >
                        <select class="default-select3" name="location">
                            <option value="0">All Areas</option>
                            @foreach($searchLocations as $id=>$searchLocations)
                                <option value="{{ $id }}">{{ $searchLocations }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Add clearfix for only the required viewport -->
                    <div class="col-6 col-sm-4">
                        <div >
                        <select class="default-select3" name="location">
                            <option value="0">All Categories</option>
                            @foreach($searchCategories as $id=>$searchCategories)
                                <option value="{{ $id }}">{{ $searchCategories }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 text-center "  >
                        <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;"> 
                        <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                        <span class="lnr lnr-magnifier"></span> Search
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </form>
          </div>
    </div>
</section>
@endsection


@section('content')
<div class="col-lg-8 post-list gg12 h-full" >
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
    <a href="{{ route('riwayat', $job1->slug) }}">
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

