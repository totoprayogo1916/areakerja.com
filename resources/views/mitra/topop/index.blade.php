@extends('layouts.mitra.app')
@section('content')
<div class="loader"></div>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between ">
                    <h4>Top Up</h4>
                    <a href="#" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Info AKC</a>
                  </div>
                <div class="row mt-3 px-3">

              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 25000] ) }}" style="color: #fe7b54">
                <div class="card card-primary">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>25 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 25.000</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-secondary">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>50 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 50.000</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-danger">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>75 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 75.000</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-warning">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>100 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 100.000 </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-info">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>125 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 125.000 </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-success">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>150 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 150.000 </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-light">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>175 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 175.000 </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 px-3">
                <a href="{{ route('mitra.lowongan.index') }}" style="color: #fe7b54">
                <div class="card card-dark">
                  <div class="card-header">
                    <i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i>
                    <h4>200 AKC</h4>
                  </div>
                  <div class="card-body">
                    <p>Rp. 200.000 </p>
                  </div>
                </div>
                </a>
              </div>
                </div>
            </div>

          </div>
        </section>
</div>
  @endsection
