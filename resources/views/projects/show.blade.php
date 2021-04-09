@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Project Detail
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th width="200">
                            Project Name
                        </th>
                        <td>
                            {{ $projects->project_name }}
                        </td>
                    </tr>
                    <tr>
                        <th width="200">
                            Project Description
                        </th>
                        <td>
                            {{ $projects->project_description ?? 'N.A' }}
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
<div class="card">
    <div class="card-header">
       Property Types
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">S.No </th>
                        <th>
                            Property Type
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                    <tr data-entry-id="{{ $property->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $property->property_name ?? '' }}</td>
                        <!-- <td><a href="javascript:void(0);" class="btn btn-xs btn-info editProperty" data-toggle="modal" data-target="#editProperty">Edit</a>
                            <a href="javascript:void(0);" class="btn btn-xs btn-danger deleteProperty" data-id="{{$property->id}}">Delete</a>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection