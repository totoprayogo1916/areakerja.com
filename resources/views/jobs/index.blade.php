@extends('layouts.main')

@section('banner', $banner)

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
</div>
@endsection
