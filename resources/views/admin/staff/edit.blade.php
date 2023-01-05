@extends('admin.includes.master')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Edit New Staff</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin-dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{ route('admin-staff-list') }}">Staff Management</a>
                    <a class="breadcrumb-item active" href="{{ route('admin-staff-add') }}">Edit Staff</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header border bottom">
                <h4 class="card-title">Edit New Staff</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('admin-staff-update', $staffData['staff_id']) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name<span class="error">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="staff_username" class="form-control @error('staff_username') error @enderror" placeholder="Name" value="{{ $staffData['staff_username'] }}">
                            @error('staff_username')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Email<span class="error">*</span></label>
                        <div class="col-sm-6">
                          <input type="email" name="staff_email" class="form-control @error('staff_email') error @enderror" placeholder="Email" value="{{ $staffData['staff_email'] }}" readonly>
                          @error('staff_email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Password<span class="error">*</span></label>
                        <div class="col-sm-6">
                          <input type="password" name="staff_password" class="form-control @error('staff_password') error @enderror" placeholder="Password" value="{{ $staffData['staff_username'] }}">
                          @error('staff_password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Phone<span class="error">*</span></label>
                        <div class="col-sm-6">
                          <input type="text" name="staff_Mob" class="form-control @error('staff_Mob') error @enderror" placeholder="Phone" value="{{ $staffData['staff_Mob'] }}">
                          @error('staff_Mob')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Menu<span class="error">*</span></label>
                        <div class="col-sm-8">
                            <div class="col-sm-12 row">
                                @php
                                    $hasPermission=array();
                                    $hasPermission = explode(',', $staffData['menu_permission']);
                                @endphp
                                @foreach ($menuLists as $menu)
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input id="checkbox{{ ($loop->index + 1) }}" type="checkbox" value="{{ $menu['menu_id'] }}" name="menu_permission[]"
                                            class="@error('menu_permission') error @enderror" {{in_array($menu['menu_id'], $hasPermission) ? 'checked':''}}>

                                            <label for="checkbox{{ ($loop->index + 1) }}">{{ $menu['menu_name'] }}</label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            @error('menu_permission')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper START -->
@endsection('content')

