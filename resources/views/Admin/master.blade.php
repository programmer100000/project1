@extends('Admin.base')
@section('body')

<body class="loading" data-layout-mode="detached"
    data-layout='{"mode": "dark", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->

        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                 
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="text-dark font-weight-normal dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">{{ Auth::user()->username}}</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user mr-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock mr-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                <p class="text-muted">{{ Auth::user()->email }}</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">منو</li>

                        <li>
                            <a href="{{ route('admin') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  داشبورد </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.system') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  سیستم </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.device') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  دستگاه </span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('create.game') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  بازی </span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('create.buffet') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  خوراکی </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.lottery') }}">
                                <i data-feather="airplay"></i>
                                <span class="badge badge-success badge-pill float-right">4</span>
                                <span>  مسابقه </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->
        <!-- Left Sidebar End -->

        @yield('content')
    </div>

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}">
    </script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

@endsection
