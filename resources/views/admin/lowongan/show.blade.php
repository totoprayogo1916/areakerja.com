@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.low.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $low->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Perusahaan
                        </th>
                        <td>
                            {{ $low->namaperusahaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi
                        </th>
                        <td>
                            {{ $low->deskripsiperusahaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {{ $low->alamatperusahaan }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Logo Perusahaan
                        </th>
                        <td>
                            @if($low->gambar)
                                <img src="{{ url('img/tmpcompanylogo') }}/{{ $low->gambar }}" style="width: 400px; height: 280px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pekerjaan
                        </th>
                        <td>
                            {{ $low->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Pekerjaan
                        </th>
                        <td>
                            {{ $low->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Syarat Pekerjaan
                        </th>
                        <td>
                            {{ $low->full_description}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Kerja
                        </th>
                        <td>
                            {{ $low->job_nature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Batas Lamaran
                        </th>
                        <td>
                            {{ $low->bataslamaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gaji
                        </th>
                        <td>
                            {{ $low->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            <{{ $low->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            No Telepon
                        </th>
                        <td>
                            {{ $low->notelp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Website
                        </th>
                        <td>
                            {{ $low->web }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection