@extends('admin.includes.master')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Staff Management</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin-dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item active" href="{{ route('admin-staff-list') }}">Staff Management</a>
                </nav>
            </div>
        </div>
        <!-- alert -->
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            </div>
        </div>
        <!-- alert -->
        <div class="card">
            <div class="m-t-20 m-r-15">
                <a href="{{ route('admin-staff-add') }}" class="btn btnbtn btn-success pull-right"><i class="fa fa-plus"></i> Add Staff</a>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox p-0">
                                        <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                        <label for="selectable1"></label>
                                    </div>
                                </th>
                                <th>Sl.No</th>
                                <th>Staff Name</th>
                                <th>Staff Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div>
                                </td>
                                <td>{{  ($loop->index + 1) }}</td>
                                <td>{{  $staff['staff_username'] }}</td>
                                <td>{{  $staff['staff_email'] }}</td>
                                <td>{!!  $staff['active_status'] ? '<span class="badge badge-pill badge-gradient-success">Active</span>':'<span class="badge badge-pill badge-gradient-danger">Deactive</span>' !!}</td>
                                <td class="text-center font-size-18">

                                    @if($staff['active_status'] == 1)
                                        {{-- <a href="admin-staff-update-status/{{ $staff['staff_id'] }}/0" onclick="return confirm('Are you sure to deactivate this record?')" class="btn btn-icon btn-info" title="Deactivate"><i class="mdi mdi-lock-open-outline"></i></a> --}}
                                        <div class="switch d-inline m-r-10">
                                            <input type="checkbox" id="active" onclick='staffStatusUpdate(this);' checked="">
                                            <label for="active"></label>
                                        </div>
                                    @else
                                        {{-- <a href="admin-staff-update-status/{{ $staff['staff_id'] }}/1" onclick="return confirm('Are you sure to activate this record?')" class="btn btn-icon btn-danger" title="Activate "><i class="mdi mdi-lock-open-outline"></i></a> --}}
                                        <div class="switch d-inline m-r-10">
                                            <input type="checkbox" id="active" onclick='staffStatusUpdate(this);' >
                                            <label for="active"></label>
                                        </div>
                                    @endif
                                    <a href="admin-staff-edit/{{ $staff['staff_id'] }}" class="btn btn-icon btn-primary">
                                        <i class="ti-pencil"></i>
                                    </a>

                                    <form action="{{ route('admin-staff-delete', $staff['staff_id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure to delete this record?')"  class="btn btn-icon btn-danger" type="submit"><i class="ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@endsection
@push('scripts')
<script>
   function staffStatusUpdate(val){
    if(val.checked){
        var active_status = 1;
    } else{
        var active_status = 0;
    }
    $.ajax({
        url : "admin-staff-update-status/{{ $staff['staff_id'] }}/"+active_status,
        type: "GET",
        success: function(data, textStatus, jqXHR) {
            window.location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error occurred!');
        }
    })
   }
</script>
@endpush
