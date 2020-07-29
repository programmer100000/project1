@extends('Admin.base')
@section('body')

<body class="loading" data-layout-mode="detached"
    data-layout='{"mode": "dark", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>

    <!-- Begin page -->
    <div id="wrapper">
        <div class="navbar-custom">
            <div class="container-fluid">

                <!-- LOGO -->


                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light" id="btn-mobile">
                            <img src="{{ asset('assets/images/menu-mobile.png') }}" alt="" width="100%">
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>   
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

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
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  داشبورد </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('edit.profile') }}">
                                <i data-feather="edit"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  ویرایش مشخصات </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.system') }}">
                                <i data-feather="monitor"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  سیستم </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.device') }}">
                                <i data-feather="server"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  دستگاه </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.game') }}">
                                <i data-feather="airplay"></i>
                                <span>   امکانات و بازی ها</span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{ route('create.buffet') }}">
                                <i data-feather="airplay"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  خوراکی </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('create.lottery') }}">
                                <i data-feather="play"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                <span>  مسابقه </span>
                            </a>
                            <li>
                                <a href="{{ route('logout') }}">
                                    <i data-feather="log-out"></i>
                                    {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                                    <span>  خروج </span>
                                </a>
                            </li>
                            <!-- <li>
                                @if($status ?? '' == 0)
                                <div class="alert alert-warning" role="alert">
                                    در انتظار تایید
                                  </div>
                                  @elseif($status ?? '' == 1)
                                  <div class="alert alert-success" role="alert">
                                    تایید شده
                                  </div>
                                  @elseif($status ?? '' == 2)
                                  <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                  </div>
                                @endif
                            </li> -->
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
