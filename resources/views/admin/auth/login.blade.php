<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vision Plus | Admin Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="admin/assets/images/v-plus-logo.png">
    <link rel="shortcut icon" href="admin/assets/images/v-plus-logo.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="admin/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="admin/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="admin/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/themify-icons.css" rel="stylesheet">
    <link href="admin/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="admin/assets/css/animate.min.css" rel="stylesheet">
    <link href="admin/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-15">
                                    <div class="m-b-30">
                                        <img class="img-responsive inline-block" style="width: 200px;" src="admin/assets/images/v-plus-logo.png" alt="">
                                        <h2 class="inline-block pull-right m-v-0 p-t-15">Login</h2>
                                    </div>

                                    @if($errors->any())

                                        @foreach ($errors->all() as $error)
                                            <p class="m-t-15 font-size-14 error">
                                                {{ $error }}
                                            </p>
                                        @endforeach
                                    @endif
                                    <form action="/adminAuth" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="admin_username" class="form-control" placeholder="User name" value="{{ old('admin_username') }}">

                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="admin_password" class="form-control" placeholder="Password">

                                        </div>
                                        <div class="checkbox font-size-13 d-inline-block p-v-0 m-v-0">
                                            <input id="agreement" name="agreement" type="checkbox">
                                            <label for="agreement">Keep Me Signed In</label>
                                        </div>
                                        {{-- <div class="pull-right">
                                            <a href="">Forgot Password?</a>
                                        </div> --}}
                                        <div class="m-t-20 text-right">
                                            <button class="btn btn-gradient-success">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- build:js admin/assets/js/vendor.js -->
    <!-- core dependcies js -->
    <style>
        .error{
            color: red !important;
        }
    </style>
    <script src="admin/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/PACE/pace.min.js"></script>
    <script src="admin/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="admin/assets/vendor/d3/d3.min.js"></script>
    <!-- endbuild -->

    <!-- build:js admin/assets/js/app.min.js -->
    <!-- core js -->
    <script src="admin/assets/js/app.js"></script>
    <!-- configurator js -->
    <script src="admin/assets/js/configurator.js"></script>
    <!-- endbuild -->

    <!-- page js -->

</body>

</html>
