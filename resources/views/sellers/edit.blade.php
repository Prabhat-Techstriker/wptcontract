@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Seller
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sellers.update", [$seller->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-6">
                    <label for="name">Name<span>*</span></label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($seller) ? $seller->name : '') }}" required>
                    @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($seller) ? $seller->email : '') }}" required>
                    @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                    @endif
                </div>
                <!-- <div class="form-group {{ $errors->has('by') ? 'has-error' : '' }} col-md-4">
                    <label for="by">By<span>*</span></label>
                    <input type="by" id="by" name="by" class="form-control" value="{{ old('by', isset($seller) ? $seller->by : '') }}" required>
                    @if($errors->has('by'))
                    <em class="invalid-feedback">
                        {{ $errors->first('by') }}
                    </em>
                    @endif
                </div> -->
            </div>
            <div class="form-row">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} col-md-6">
                    <label for="title">Title<span>*</span></label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($seller) ? $seller->title : '') }}" required>
                    @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('executed_as_of') ? 'has-error' : '' }} col-md-6">
                    <label for="executed_as_of">Executed as Of<span>*</span></label>
                    <input type="date" id="executed_as_of" name="executed_as_of" class="form-control" value="{{ old('executed_as_of', isset($seller) ? $seller->executed_as_of : '') }}" required>
                    @if($errors->has('executed_as_of'))
                    <em class="invalid-feedback">
                        {{ $errors->first('executed_as_of') }}
                    </em>
                    @endif
                </div>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection