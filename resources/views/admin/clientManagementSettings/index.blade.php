@extends('layouts.admin')
@section('content')
@can('client_management_setting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.client-management-settings.create") }}">
                {{ trans('global.add') }} {{ trans('global.clientManagementSetting.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.clientManagementSetting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientManagementSettings as $key => $clientManagementSetting)
                        <tr data-entry-id="{{ $clientManagementSetting->id }}">
                            <td>

                            </td>
                            <td>
                                @can('client_management_setting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.client-management-settings.show', $clientManagementSetting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('client_management_setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.client-management-settings.edit', $clientManagementSetting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('client_management_setting_delete')
                                    <form action="{{ route('admin.client-management-settings.destroy', $clientManagementSetting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.client-management-settings.massDestroy') }}",
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
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('client_management_setting_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
@endsection