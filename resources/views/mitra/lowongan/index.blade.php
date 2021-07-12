@extends('layouts.mitra.app')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header justify-content-between ">
                    <h4>Export Table</h4>
                    <a href="{{ route('mitra.lowongan.create')}}" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Tambah Lowongan </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>Posisi</th>
                            <th>Status Kerja</th>
                            <th>Lokasi Kantor</th>
                            <th>Batas Pengiriman Lamaran</th>
                            <th>Status Pemasangan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($mitra as $min)
                          <tr>
                            <td>{{$min->id}}</td>
                            <td>{{$min->posisi}}</td>
                            <td>{{$min->status_pekerjaan}}</td>
                            <td>{{$min->alamat_kantor}}</td>
                            <td>{{$min->bataslamaran}}</td>
                            <td><div class="badge badge-shadow {{ request()->is($min->status_pemasangan == "Terpasang") ? 'badge-success' : 'badge-warning' }}">{{$min->status_pemasangan}}</div></td>
                            <td>
                            <a href="#" class="btn btn-primary mr-1">Detail</a>
                            <a href="{{ route('mitra.lowongan.edit', $min->id) }}" class="btn btn-success">Edit</a>
                            
                            </td>

                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </section>
  </div>

  @endsection
