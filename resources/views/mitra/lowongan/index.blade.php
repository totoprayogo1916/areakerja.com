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
                    <a href="{{ route('mitra.lowongan.create')}}" class="btn btn-warning"> Add </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($mitra as $min)
                          <tr>
                            <td>{{$min->id}}</td>
                            <td>{{$min->email}}</td>
                            <td>{{$min->password}}</td>
                            <td>33</td>
                            <td><div class="badge badge-success badge-shadow">Completed</div></td>
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
