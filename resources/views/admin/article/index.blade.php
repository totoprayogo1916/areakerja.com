@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Artikel {{ trans('global.list') }}
            <a class="btn btn-success ml-2" href="{{ route("admin.article.create") }}">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                {{ trans('global.add') }} Artikel
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.category.fields.id') }}
                        </th>
                        <th>
                            Judul
                        </th>
                        <th>
                            Ringkasan
                        </th>
                        <th>
                            Thumbnail
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $posts)
                        <tr data-entry-id="{{ $posts->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $posts->id ?? '' }}
                            </td>
                            <td>
                                {{ $posts->judul ?? '' }}
                            </td>
                            <td>
                                {{ $posts->ringkasan ?? '' }}
                            </td>
                            <td>
                                @if($posts->gambar)
                                    <img src="{{ url('img/artikel') }}/{{ $posts->gambar }}" style="width: 100px; height: 70px;">
                                @endif
                            </td>

                            <td align="center">

                                <a style="width: 60px" class="btn btn-xs btn-primary" href="#">
                                    {{ trans('global.view') }}
                                </a>

                                <a style="width: 60px" class="btn btn-xs btn-info" href="#">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.article.destroy', $posts->id) }}" method="POST" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}" style="width: 60px">
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection