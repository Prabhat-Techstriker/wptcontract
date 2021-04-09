@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Contact
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('contacts')}}"> Back</a>
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
        <form action="{{ route("admin.contacts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <div class="form-row">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-3">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-md-3">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }} col-md-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }} col-md-3">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name">
                    </div>
                </div>
                <div class="form-row">
                    <!-- <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }} col-md-4">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" class="form-control">
                    </div> -->
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }} col-md-6">
                        <label for="email">Address</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group {{ $errors->has('profile_image') ? 'has-error' : '' }} col-md-6">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" id="profile_image" name="profile_image" onchange="readURL(this);" class="form-control">
                    </div>
                </div>
            </div>
            <div class="">
                <img id="profileDisplay" src="#" style="display: none;">
            </div>
            <div><button type="submit" class="btn btn-success">Save</button></div>
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