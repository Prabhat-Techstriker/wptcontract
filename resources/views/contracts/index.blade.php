@extends('layouts.admin')
@section('content')
@can('sales_manage' )
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{url('contracts/create')}}">
                Add Contract
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
       Contracts List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                         <th>
                            Subject
                        </th>
                        <th>
                            Message
                        </th>
                        <th>
                            File Path
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->subject ?? '' }}
                            </td>
                            <td>
                                {{ $user->message_body ?? '' }}
                            </td>

                            <td>
                               @if($user->file_path_completed == NULL)         
                                <a target="_blank" href="{{url('/storage/app/'.$user->file_path_completed) ?? '' }}">{{ $user->file_path_completed ?? 'Not file'}}</a>       
                              @else
                                <a target="_blank" href="{{url('/storage/app/'.$user->file_path) ?? '' }}">{{ $user->file_path ?? '' }}</a>       
                              @endif
                              
                            </td>
                            <td>
                              @if($user->status =='0')         
                                Pending       
                              @else
                                Completed       
                              @endif
                            </td>
                            <td>
                                <!-- <a target="_blank" class="btn btn-xs btn-primary" href="{{ route('admin.contacts.show', $user->id) }}">
                                    {{ trans('global.view') }}
                                </a> -->

                               <!--  <a class="btn btn-xs btn-info" href="{{ route('admin.contacts.edit', $user->id) }}">
                                    {{ trans('global.edit') }}
                                </a> -->

                                <form action="{{ route('admin.contacts.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('sales_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.contracts.mass_destroy') }}",
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
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection