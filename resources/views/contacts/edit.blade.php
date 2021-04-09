@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.contacts.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-row">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-3">
                    <label for="name">Name<span>*</span></label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-md-3">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                </div>
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }} col-md-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($user) ? $user->phone : 'N.A') }}">
                </div>
                <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }} col-md-3">
                    <label for="company_name">Company Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name', isset($user) ? $user->company_name : 'N.A') }}">
                </div>
            </div>
            <div class="form-row">
                <!-- <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }} col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" class="form-control" value="{{ old('dob', isset($user) ? $user->dob : 'N.A') }}">
                </div> -->
                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Address</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($user) ? $user->address : 'N.A') }}">
                </div>
                <div class="form-group {{ $errors->has('profile_image') ? 'has-error' : '' }} col-md-6">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image" onchange="readURL(this);" class="form-control">
                </div>
            </div>
            <div class=""> 
                @if(isset($user['profile_image']) !='') 
                    <img id="profileDisplay" src="{{ url('/') }}/storage/app/{{ old('profile_image', isset($user) ? $user->profile_image : 'N.A') }}">
                @else
                    <img id="profileDisplay" src="{{ url('public/images/') }}/avatar-dummy.png">      
                @endif
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profileDisplay').show();
                $('#profileDisplay').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
   
</script>
<style type="text/css">
    img#profileDisplay {
    width: 15%;
    border-radius: 50%;
}
</style>