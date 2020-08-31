@extends('Admin.master') @section('title', 'خانه') @section('head')
<link type="text/css" rel="stylesheet" href={{ asset( 'assets/css/persian-datepicker.css') }} />

<link type="text/css" rel="stylesheet" href={{ asset( 'assets/css/persianDatepicker-dark.css') }} /> @endsection @section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col-xl-6">
                    <div class="card-box">
                        <div class="col-lg-11">
                            <div class="form-group mb-3">
                                <label>از</label>
                                <!-- <input class="form-control" type="text" name="start-date" id="start-date"> -->
                                <input class="form-control formdate" type="text" name="date" id="starttarikh" dir="auto" autocomplete="off">
                                <div class="formdate"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>
                <!-- end col -->
                <div class="col-xl-6">
                    <div class="card-box">
                        <div class="col-lg-11">
                            <div class="form-group mb-3">
                                <label>تا</label>
                                <input class="form-control formdate" type="text" name="date" id="end-tarikh" dir="auto" autocomplete="off">
                                <div class="formdate"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- container -->

    </div>
    <!-- content -->

    @include('Admin.footer')


</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->
<script>
</script>
<script type="text/javascript" src="{{ asset('assets/js/persian-date.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/persian-datepicker.js') }}" defer></script>
<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>
<script src="{{ asset('assets/js/adminpanel.js') }}" defer></script>
@endsection