@extends('Admin.master')
@section('title', 'خانه')
@section('head')
<link type="text/css" rel="stylesheet" href={{ asset('assets/css/persian-datepicker.css') }} />

<link type="text/css" rel="stylesheet"
    href={{ asset('assets/css/persianDatepicker-dark.css') }} />

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
                        <div class="page-title-right">
                            <form class="form-inline">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control border-0 shadow" id="dash-daterange">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-blue border-blue text-white">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                    <i class="mdi mdi-autorenew"></i>
                                </a>
                                <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                    <i class="mdi mdi-filter-variant"></i>
                                </a>
                            </form>
                        </div>
                        <h4 class="page-title"> مسابقه </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">

                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title mb-3">ویرایش</h4>
                        <form  action="{{ route('edit.profile') }}"
                            onsubmit="return false;" enctype="multipart/form-data">
                            @foreach ($gamenet as $g)
                        <input type="hidden" name="gamenet_id"  value="{{ $g->gamenet_id }}">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label>نام گیم نت</label>
                                    <input class="form-control" type="text" name="gamenetname"  value="{{ $g->title }}" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> آدرس</label>
                                    <input class="form-control" type="text" name="address" id="address" value="{{ $g->address }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> توضیحات</label>
                                    <input class="form-control" type="text" name="desc" id="description" value="{{ $g->description }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>تلفن</label>
                                <input class="form-control" type="text" name="tel" id="tel" value="{{ $g->tel }}">
                                </div>
                            </div>
                            <button type="button" id="edit-profile-btn" class="btn btn-primary">ثبت</button>
                            <p style="color: red;" id="device_type_form_msg"></p>
                            @endforeach
                        </form>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    @include('Admin.footer')


</div>




<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->
<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>


@endsection
