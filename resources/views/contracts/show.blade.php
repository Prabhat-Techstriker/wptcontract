@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header">
        Completed Detail
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                             {{ $info->contactInfo->name ?? 'N.A' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sent To
                        </th>
                        <td>
                            {{ $info->contactInfo->email ?? 'N.A' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Subject
                        </th>
                        <td>
                            {{$info->subject ?? 'N.A'}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Message
                        </th>
                        <td>
                            {{$info->message_body ?? 'N.A'}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            Completed
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sent On
                        </th>
                        <td>
                            {{ date('d-M-Y', strtotime($info->created_at ?? 'N.A')) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Signed File
                        </th>
                        <td>
                            <a class="" target="_blank" href="{{ URL::asset('storage/app/'.$info->file_path_completed) }}">View</a> |
                            <a class="" href="{{ URL::asset('storage/app/'.$info->file_path_completed) }}" download>Download</a>
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