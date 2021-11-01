@extends('layouts.mitra.app')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Daftar Lowongan</h5>
                                            {{-- <h2 class="mb-3 font-18">258</h2> --}}
                                            <p class="mb-0"><span class="col-blue">#</span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Category</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/1.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Daftar Kandidat</h5>
                                            {{-- <h2 class="mb-3 font-18">128</h2> --}}
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Portofolio</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/3.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Product for Sale</h5>
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More Product</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/4.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15"> Transaction</h5>
                                            {{-- <h2 class="mb-3 font-18">1,287</h2> --}}
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Transaction</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/2.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ url('img/mitralogo') }}/{{ $mitra->logo }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a><br>{{ $mitra->nama }}</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="author-box-description">
                                <p>
                                    {{ $mitra->deskripsi }}
                                </p>
                            </div>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Address
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->alamat }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Since
                                </span>
                                <span class="float-right text-muted">
                                    2017
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->no }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Mail
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->email }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Instagram
                                </span>
                                <span class="float-right text-muted">
                                    <a href="https://www.instagram.com/oxt.design/?hl=id">{{ $mitra->instagram }}</a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Facebook
                                </span>
                                <span class="float-right text-muted">
                                    <a
                                        href="https://www.facebook.com/OXT-Design-105053717732529/">{{ $mitra->facebook }}</a>
                                </span>
                            </p>
                            <div class="clearfix float-right">
                                <a href="{{ route('mitra.profil.edit', $mitra->slug) }}" class="btn btn-primary">Edit Details</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        <button class="btn btn-primary">Edit Details</button>
                      </div> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ url('img/mitralogo') }}/{{ $mitra->logo }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a><br>{{ $mitra->nama }}</a>
                            </div>
                        </div>
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Address
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->alamat }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Since
                                </span>
                                <span class="float-right text-muted">
                                    2017
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->no }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Mail
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->email }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Instagram
                                </span>
                                <span class="float-right text-muted">
                                    <a href="https://www.instagram.com/oxt.design/?hl=id">{{ $mitra->instagram }}</a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Facebook
                                </span>
                                <span class="float-right text-muted">
                                    <a
                                        href="https://www.facebook.com/OXT-Design-105053717732529/">{{ $mitra->facebook }}</a>
                                </span>
                            </p>
                            <div class="clearfix float-right">
                                <a href="{{ route('mitra.profil.edit', $mitra->slug) }}" class="btn btn-primary">Edit Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- <div class="card-footer">
                        <button class="btn btn-primary">Edit Details</button>
                      </div> --}}
                </div>
            </div>
        </div>

    </div>

@endsection
