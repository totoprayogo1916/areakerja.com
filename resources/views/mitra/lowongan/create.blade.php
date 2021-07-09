@extends('layouts.mitra.app')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                {{-- <form action="{{ route("admin.jobs.store") }}" method="POST" enctype="multipart/form-data" id="form-name"> --}}
                <form action="{{ route("mitra.lowongan.store") }}" method="POST" enctype="multipart/form-data" id="form-name">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control pwstrength" data-indicator="pwindicator" id="password" name="password">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Koin</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            $
                                        </div>
                                    </div>
                                    {{-- <input type="text" class="form-control currency"> --}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </section>
  </div>

  @endsection
