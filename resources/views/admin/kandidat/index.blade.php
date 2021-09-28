@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">

</div>
<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            {{ trans('cruds.company.title_singular') }} {{ trans('global.list') }}
            <a class="btn btn-success ml-2" href="#">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                {{ trans('global.add') }} {{ trans('cruds.company.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Company">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Domisili
                        </th>
                        <th>
                            Deskripsi
                        </th>
                        <th>
                            Skill
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($companies as $key => $company)
                        <tr data-entry-id="{{ $company->id }}">
                            <td style="vertical-align: middle; text-align: center;">

                            </td>
                            <td style="width: 50px; vertical-align: middle; text-align: center;">
                                {{ $company->id ?? '' }}
                            </td>
                            <td>
                                {{ $company->name ?? '' }}
                            </td>
                            <td>
                                {{ $company->deskripsi ?? '' }}
                            </td>
                            <td>
                                {{ $company->alamat ?? '' }}
                            </td>
                            <td >
                                {{ $company->dsasd ?? '' }}
                            </td>
                            <td align="center">
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.companies.show', $company->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.companies.edit', $company->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach --}}
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
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.companies.massDestroy') }}",
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
  $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
