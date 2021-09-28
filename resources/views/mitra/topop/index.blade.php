@extends('layouts.mitra.app')
@section('content')
<div class="loader"></div>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <a href="#" class="btn btn-icon icon-left btn-warning" style="margin-bottom: 20px">SALDO : 1000 AKC<i class="fas fa-coins"></i></a>
            <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between ">
                    <h4>Top Up</h4>
                    <a href="#" class="btn btn-icon icon-left btn-info"  data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-info-circle"> </i> Info AKC</a>
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 50000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 75000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 100000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 125000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 150000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 175000] ) }}" style="color: #fe7b54">
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
                <a href="{{ route('mitra.mitra.topup', [auth()->user()->id, 200000] ) }}" style="color: #fe7b54">
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
        <!-- Large modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Area Kerja Coin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Area Kerja Coin adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, aspernatur modi ipsam omnis quasi voluptatibus ratione eius repellendus fugiat eos eum obcaecati. Ullam reprehenderit, reiciendis voluptas ducimus obcaecati beatae quam!
              </div>
            </div>
          </div>
        </div>
</div>
  @endsection
