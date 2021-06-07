@extends('layouts.main')

@section('home')
<section class="relative" id="home">

{{-- <div class="overlay overlay-bg"></div> --}}

<img src="{{ asset('img/image/4.png') }}" class="sky translate" data-speed="0.3" alt="">
<img src="{{ asset('img/image/3.png') }}" class="mountain3 translate" data-speed="0.3" alt="">
<img src="{{ asset('img/image/2.png') }}" class="mountain2 translate" data-speed="0.5" alt="">
{{-- <img src="{{ asset('img/image/5.png') }}" class="bola translate" data-speed="0.45" alt="">
<img src="{{ asset('img/image/5.png') }}" class="bola2 translate" data-speed="0.1" alt=""> --}}
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 style="color: rgb(116, 116, 116)">
                    Tempat Mencari Kerja
                </h1>
                 <form action="#" class="serach-form-area mb-100" >
                    <div class="row justify-content-center form-wrap">
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
                <p  style="color: rgb(116, 116, 116)"   >Cari sesuai kategori:
               @foreach($searchByCategory as $id=>$searchByCategory)
                    <a href="#"  style="color: rgb(116, 116, 116)">{{ $searchByCategory }}</a>@if (!$loop->last),@endif
                @endforeach
                </p>
            </div>
        </div>
    </div>


<img src="{{ asset('img/image/1.png') }}" class="person translate" data-speed="-0.25" alt="">
</section>
@endsection

@section('content')
<div class="col-lg-8 post-list">
    @foreach($jobs as $job)
    <a href="{{ route('jobs.show', $job->id) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex flex-row">
            <div class="thumb">
                @if($job->company->gambar)
                    <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="width: 250px; height: 200px;">
                @endif
            </div>
            <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <h4>{{ $job->title }}</h4>
                        <h6 style="margin-top: 12px;" ><span class="lnr lnr-apartment"></span>  {{ $job->company->name }}</h6>	                    </div>
                </div>
                <h6 style="margin-top: 0px; text-align: justify">
                    {{ $job->short_description }}
                </h6>
                <h6>Job Nature: {{ $job->job_nature }}</h6>
                <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }}</p>
                <p class="address" style="margin-bottom: 0px;" ><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
            </div>
        </div>
    </a>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Load More Job Posts</a>
</div>
@endsection
