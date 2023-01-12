@extends('admin.includes.master')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Add New User</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin-dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{ route('admin-user-list') }}">Staff Management</a>
                    <a class="breadcrumb-item active" href="{{ route('admin-user-add') }}">Add User</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header border bottom">
                <h4 class="card-title">Add New User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin-user-store') }}" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Sponser id<span class="error">*</span></label>
                                <input type="text" name="user_sponserid" id="user_sponserid" class="form-control @error('user_sponserid') error @enderror" placeholder="Eg:VP20190515" value="{{ old('user_sponserid') }}" style="text-transform: uppercase;" onBlur="usrplacement(this.value);">
                                @error('user_sponserid')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">Sponser Name<span class="error">*</span></label>
                                <input type="text" name="sname" id="sname" class="form-control @error('sname') error @enderror" placeholder="Sponser Name" value="{{ old('sname') }}" readonly>
                                @error('sname')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">Placement Id<span class="error">*</span></label>
                                <input type="text" name="placeid" id="placeid" class="form-control @error('placeid') error @enderror" placeholder="Placement ID" value="{{ old('placeid') }}" readonly>
                                @error('placeid')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">User Position<span class="error">*</span></label>
                                {{-- <input type="text" name="position" class="form-control @error('position') error @enderror" placeholder="Sponser Name" value="{{ old('position') }}"> --}}
                                <div class="row">
                                    <div class="radio d-inline m-r-15">
                                        <input id="left" name="position" type="radio" value="Left">
                                        <label for="left">Left</label>
                                    </div>
                                    <div class="radio d-inline m-r-15">
                                        <input id="right" name="position" type="radio" value="Right">
                                        <label for="right">Right</label>
                                    </div>
                                </div>
                                @error('position')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">First Name<span class="error">*</span></label>
                                <input type="text" name="fname" class="form-control @error('fname') error @enderror" placeholder="First Name" value="{{ old('fname') }}">
                                @error('fname')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="control-label">Last Name<span class="error">*</span></label>
                                <input type="text" name="lname" class="form-control @error('lname') error @enderror" placeholder="Last Name" value="{{ old('lname') }}">
                                @error('lname')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone<span class="error">*</span></label>
                                <input type="text" name="phone" class="form-control @error('phone') error @enderror" placeholder="Phone" value="{{ old('phone') }}">
                                @error('phone')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email<span class="error">*</span></label>
                                <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password<span class="error">*</span></label>
                                <input type="password" name="pass1" class="form-control @error('pass1') error @enderror" placeholder="Password" value="{{ old('pass1') }}">
                                @error('pass1')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm Password<span class="error">*</span></label>
                                <input type="password" name="pass2" class="form-control @error('pass2') error @enderror" placeholder="Password" value="{{ old('pass2') }}">
                                @error('pass2')
                                        <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <button type="submit" class="btn btn-gradient-success">Submit</button>
                    <a href="{{ route('admin-user-list') }}" class="btn btn-default">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper START -->
@endsection('content')

@push('scripts')
<script>
function usrplacement(user_sponserid){
    if(user_sponserid.length > 2){
        var data = {"_token": "{{ csrf_token() }}",'user_sponserid':user_sponserid}
        $.ajax({
            url : "admin-get-sponser-details",
            type: "POST",
            data : data,
            success: function(data, textStatus, jqXHR) {
                $('#sname').val(data.user_fname)
                $('#placeid').val(data.user_profileid)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error occurred!');
            }
        })
    }
}

</script>
@endpush
