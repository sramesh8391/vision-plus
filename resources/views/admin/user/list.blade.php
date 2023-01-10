@extends('admin.includes.master')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">User Management</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin-dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item active" href="{{ route('admin-user-list') }}">User Management</a>
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
                <a href="{{ route('admin-staff-add') }}" class="btn btnbtn btn-success pull-right"><i class="fa fa-plus"></i> Add User</a>
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
                                <th>Image</th>
                                <th>Full Name</th>
                                <th>Profile Id</th>
                                <th>Date</th>
                                <th>Membership Plan</th>
                                <th>Tree View</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userData as $user)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div>
                                </td>
                                <td>{{  ($loop->index + 1) }}</td>
                                <td>{{  $user['user_image'] }}</td>
                                <td>{{  $user['user_fname'] }}</td>
                                <td>{{  $user['user_profileid'] }}</td>
                                <td>{{  $user['user_date'] }}</td>
                                <td>{{  $user['user_fname'] }}</td>
                                <td>
                                    <a href=''><i class="fa fa-list" aria-hidden="true"></i></a>
                                </td>
                                <td class="text-center font-size-18">
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
{{-- <script>
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
</script> --}}
@endpush
