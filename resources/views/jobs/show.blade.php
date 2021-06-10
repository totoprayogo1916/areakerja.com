@extends('layouts.main')

@section('banner', 'Job: '.$job->title)

@section('content')
<div class="col-lg-8 post-list">
    <div class="single-post2 d-flex flex-row" style="margin-bottom: 10px">
        <div class="details" style="width: 100%">
            <div class="row" style="width: 100%">
                <div class="col-10">
                    <a href="#"><h2 style="font-weight: normal">{{ $job->company->name }}</h2></a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>
                    
                    <h1 style="margin-top: 8px"> {{ $job->title }}</h1>
                </div>
                <div class="col-2 text-center ">
                    <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="height: inherit; width : inherit;margin: auto; " >
                </div>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px"/>
            <h6 style="margin-top: 8px; font-weight: normal">{{$job->short_description}}</h6>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px"/>
            <h3 style="margin-top: 10px">Ringkasan</h3>
            <div class="row ">
                <div class="col-4 ">
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Tingkat Pendidikan</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-user-circle-o"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h4>
                </div>
                <div class="col-5">
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>Tingkat Pendidikan</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>Gender</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>Umur</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>{{ $job->job_nature }}</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>{{ $job->salary }}</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>Batas Lamaran</h4>
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>{{ $job->address }}</h4>
                </div>
              </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 style="margin-top: 10px">Deskripsi Pekerjaan</h3>
            <ul class="details" style="margin-left: auto" >
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Coffee</h4>
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Tea</h4>
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Coca Cola</h4>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 style="margin-top: 10px">Syarat Pekerjaan</h3>
            <ul class="details" style="margin-left: auto" >
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Coffee</h4>
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Tea</h4>
            <h4 style="margin-top: 10px; font-weight: normal; margin-left: 5px">•   Coca Cola</h4>
            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <h3 style="margin-top: 10px">Kirim Lamaran</h3>
            <div class="row" style="width: 100%; ">
                <div class="col-4">
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-envelope-o"></span><span style="display:inline-block; width: 15px;"></span>Email</h4>
                </div>
                <div class="col-8">
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>admin@gmail.com</h4>
                </div>
            </div>
            <div class="row" style="width: 100%; ">
                <div class="col-4">
                    <h4 style="margin-top: 10px; font-weight: normal"><span class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4>
                </div>
                <div class="col-4">
                    <h4 style="margin-top: 10px; font-weight: normal"> <span>:</span><span style="display:inline-block; width: 10px;"></span>081234567890</h4>
                </div>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;"/>
            <div class="row" style="margin-top: 15px">
                <div class="col-2">
                    <a type="button" class="btn form-pasang3" href="{{ route('login') }}">
                        <h4 style="font-weight: normal"><span class="fa fa-paper-plane-o"></span><span style="display:inline-block; width: 10px;"></span>Lamar</h4>
                    </a>
                </div>
                <div class="col-2">
                    <a type="button" class="btn form-pasang3" href="{{ route('login') }}">
                        <h4 style="font-weight: normal"><span class="fa fa-star-o"></span><span style="display:inline-block; width: 10px;"></span>Simpan</h4>
                        
                    </a>
                </div>
                <div class="col-2">
                    <a type="button" class="btn form-pasang3" href="{{ route('login') }}">
                        <h4 style="font-weight: normal"><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>
                        
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
