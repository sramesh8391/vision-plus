<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vission Plus | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ url('admin/assets/images/v-plus-logo.png')}}">
    <link rel="shortcut icon" href="{{ url('admin/assets/images/v-plus-logo.png')}}">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/PACE/themes/blue/pace-theme-minimal.css')}}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />

    <!-- page css -->
       <link rel="stylesheet" href="{{ url('admin/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css')}}" />
    <!-- core css -->
    <link href="{{ url('admin/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('admin/assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ url('admin/assets/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{ url('admin/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('admin/assets/css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app header-success-gradient">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="{{ route('admin-dashboard') }}">
                            <div class="logo logo-dark" style="background-image: url('admin/assets/images/v-plus-logo.png'); background-size: 200px 100px;"></div>
                            <div class="logo logo-white" style="background-image: url('admin/assets/images/v-plus-logo.png'); background-size: 200px 100px;"></div>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        {{-- <li class="search-box">
                            <a class="search-toggle" href="javascript:void(0);">
                                <i class="search-icon mdi mdi-magnify"></i>
                                <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                            </a>
                        </li>--}}

                    </ul>
                    <ul class="nav-right">

                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-ring-outline"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg p-v-0">
                                <li class="p-v-15 p-h-20 border bottom text-dark">
                                    <h5 class="m-b-0">
                                        <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        System shutdown
                                                    </span>
                                                    <span class="sub-title">8 min ago</span>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </li>
                                {{-- <li class="p-v-15 p-h-20 text-center">
                                    <span>
                                        <a href="" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                                    </span>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <i class="ti-user"></i>
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Marshall Nichols</span>
                                                <span class="sub-title">UI/UX Desinger</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('adminLogout') }}">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown {{ (request()->is('admin-dashboard')) ? 'open' : '' }}">
                            <a href="{{ route('admin-dashboard') }}"> <span class="icon-holder">
                                <i class="mdi mdi-gauge"></i>
                            </span> Dashboard</a>
                        </li>
                        <li class="nav-item dropdown {{ (request()->is('admin-staff-list')) ? 'open' : '' }}">
                            <a href="{{ route('admin-staff-list') }}"> <span class="icon-holder">
                                <i class="ti-list"></i>
                            </span> Staff Management</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href=""> <span class="icon-holder">
                                <i class="ti-map-alt"></i>
                            </span> Country Management</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span class="title"> User Management</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">Sponsor</a>
                                </li>
                                <li>
                                    <a href="">Users</a>
                                </li>
                                <li>
                                    <a href="">Pack Purchase</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->



                <!-- Content Wrapper Start -->
                @yield('content')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2023 <b class="text-dark">Vision Plus</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <!-- build:js admin/assets/js/vendor.js -->
    <!-- core dependcies js -->
    <script src="{{ url('admin/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/PACE/pace.min.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/d3/d3.min.js')}}"></script>
    <!-- endbuild -->

    <!-- build:js {'admin/assets/js/app.min.js -->
    <!-- core js -->
    <script src="{{ url('admin/assets/js/app.js')}}"></script>
    <!-- configurator js -->
    <script src="{{ url('admin/assets/js/configurator.js')}}"></script>
    <!-- endbuild -->

    <!-- page js -->
    <script src="{{ url('admin/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ url('admin/assets/js/dashboard/bank.js')}}"></script>

    <script src="{{ url('admin/assets/vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ url('admin/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('admin/assets/js/tables/data-table.js')}}"></script>
    <!-- to import page js file -->
    @stack('scripts')
</body>

</html>
