@extends('layouts.main')

@section('home')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    Tempat Mencari Kerja
                </h1>
                <form action="#" class="serach-form-area">
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
                <p class="text-white">Cari sesuai kategori:
                @foreach($searchByCategory as $id=>$searchByCategory)
                    <a href="#" class="text-white">{{ $searchByCategory }}</a>@if (!$loop->last),@endif
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
        <div data-aos="fade-up" class="single-post d-flex flex-row">
            <div class="thumb">
                @if($job->company->logo)
                    <img src="{{ $job->company->logo->getUrl() }}" alt="">
                @endif
            </div>
            <div class="details">
            
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <h4>{{ $job->title }}</h4>
                        <h6><span class="lnr lnr-apartment"></span>   {{ $job->company->name }}</h6>					
                    </div>
                </div>
                <h6>
                    {{ $job->short_description }}
                </h6>
                <h5>Job Nature: {{ $job->job_nature }}</h5>
                <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }}</p>
                <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
            </div>
        </div>
        </a>
    @endforeach

    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Load More Job Posts</a>
</div>	
@endsection
