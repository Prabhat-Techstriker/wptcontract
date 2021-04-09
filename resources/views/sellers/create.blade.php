@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Seller
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('sellers')}}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
        <form action="{{ route("admin.sellers.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-6">
                    <label for="name">Name<span>*</span></label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="By" required>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <!-- <div class="form-group {{ $errors->has('by') ? 'has-error' : '' }} col-md-4">
                    <label for="by">By<span>*</span></label>
                    <input type="by" id="by" name="by" class="form-control" placeholder="By" required>
                </div> -->
            </div>
            <div class="form-row">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} col-md-6">
                    <label for="title">Title<span>*</span></label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group {{ $errors->has('executed_as_of') ? 'has-error' : '' }} col-md-6">
                    <label for="executed_as_of">Executed as Of<span>*</span></label>
                    <input type="date" id="executed_as_of" name="executed_as_of" class="form-control" placeholder="Executed as Of" required>
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection