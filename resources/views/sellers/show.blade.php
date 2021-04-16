@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Seller Detail
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $seller->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $seller->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {{ $seller->title ?? '' }}
                        </td>
                    </tr>
                   <!--  <tr>
                        <th>
                            By
                        </th>
                        <td>
                            {{ $seller->by ?? '' }}
                        </td>
                    </tr> -->
                    <tr>
                        <th>
                            Executed as Of
                        </th>
                        <td>
                            {{ $seller->executed_as_of ?? '' }}
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