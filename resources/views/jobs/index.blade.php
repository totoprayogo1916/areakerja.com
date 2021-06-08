@extends('layouts.main')

@section('banner', $banner)

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
                <div class="details" style="width: 100%">
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
                    <hr/>
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
</div>
@endsection
