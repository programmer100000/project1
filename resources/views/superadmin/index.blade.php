@extends('Admin.master')
@section('title', 'مدیریت')
@section('head')
<link href="{{ asset('assets/libs/jsgrid/jsgrid.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">داشبورد</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
               
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    @include('Admin.footer')


</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->

@endsection
