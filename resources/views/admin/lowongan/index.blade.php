@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            {{ trans('cruds.job.title_singular') }} {{ trans('global.list') }}
            <a class="btn btn-success ml-2" href="#">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                {{ trans('global.add') }} {{ trans('cruds.job.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Job">
                <thead class="bg-warning">
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <th>
                            Nama Perusahaan
                        </th>
                        <th>
                            Deskripsi
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Logo Perusahaan
                        </th>
                        <th>
                            Nama Pekerjaan
                        </th>
                        <th>
                            Deskripsi Pekerjaan
                        </th>
                        <th>
                            Syarat Pekerjaan
                        </th>
                        <th>
                            Status Kerja
                        </th>
                        <th>
                            Batas Lamaran
                        </th>
                        <th>
                            Gaji
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            No Telepon
                        </th>
                        <th>
                            Website
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lowongan as $key => $low)
                        <tr data-entry-id="{{ $low->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $low->id ?? '' }}
                            </td>
                            <td>
                                {{ $low->namaperusahaan ?? '' }}
                            </td>
                            <td>
                                {{ $low->deskripsiperusahaan ?? '' }}
                            </td>
                            <td>
                                {{ $low->alamatperusahaan ?? '' }}
                            </td>
                            <td style="width: 150px; vertical-align: middle; text-align: center;">
                                @if($low->gambar)
                                    <img src="{{ url('img/tmpcompanylogo') }}/{{ $low->gambar }}" style="width: 100px; height: 70px;">
                                @endif
                            </td>
                            <td>
                                {{ $low->title ?? '' }}
                            </td>
                            <td>
                                {{ $low->short_description ?? '' }}
                            </td>
                            <td>
                                {{ $low->full_description ?? '' }}
                            </td>
                            <td>
                                {{ $low->job_nature ?? '' }}
                            </td>
                            <td>
                                {{ $low->bataslamaran ?? '' }}
                            </td>
                            <td>
                                {{ $low->salary ?? '' }}
                            </td>
                            <td>
                                {{ $low->email ?? '' }}
                            </td>
                            <td>
                                {{ $low->notelp ?? '' }}
                            </td>
                            <td>
                                {{ $low->web ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.lowongan.show', $low->id) }}" style="width: 60px">
                                    {{ trans('global.view') }}
                                </a>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.jobs.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')
        return
      }
      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Job:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection