@extends('admin.includes.master')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Sponsor Details</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin-dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item active" href="{{ route('admin-user-sponsor-details') }}">Sponsor Details</a>
                </nav>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="card">
            <div class="card-header border bottom">
                <h4 class="card-title">Sponsor Details</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin-user-sponsor-update') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" class="form-control @error('user_id') error @enderror" value="{{ $sponsorData['user_id'] }}" readonly>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Sponsor Id
                            <span class="error">*</span>:</label>
                        <div class="col-sm-6">
                            <input type="text" name="user_profileid" class="form-control @error('user_profileid') error @enderror" placeholder="Sponsor Id" value="{{ $sponsorData['user_profileid'] }}" readonly>
                            @error('user_profileid')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Sponsor Name
                            <span class="error">*</span>:</label>
                        <div class="col-sm-6">
                            <input type="text" name="user_fname" class="form-control @error('user_fname') error @enderror" placeholder="Sponsor Name" value="{{ $sponsorData['user_fname'] }}" >
                            @error('user_fname')
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

