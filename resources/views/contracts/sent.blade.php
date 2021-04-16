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
       Sent List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            S.No
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Sent To
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
                            Sent On
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $key => $user)
                	
                        <tr data-entry-id="{{ $user->id }}">
                        	<td>

                            </td> 
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                               {{ $user->contactInfo->name ?? 'N.A' }}
                            </td>
                            <td>
                               {{ $user->contactInfo->email ?? 'N.A' }}
                            </td>
                           
                            <td>
                            	<strong>{{ $user->subject ?? '' }}</strong> <br>
                                {{ $user->message_body ?? '' }}
                            </td>
                            <td>
                              <a target="_blank" href="{{url('/public/'.$user->file_path) ?? '' }}">{{ $user->file_path ?? '' }}</a> 
                            </td>
                            <td>
                                <a  class="badge badge-warning" href="javascript:viod(0);">Pending</a>
                            </td>
                            <td>
                                {{ date('d-M-Y', strtotime($user->created_at)) }}
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