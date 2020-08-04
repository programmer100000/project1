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
                        <h4 class="header-title mb-3">افزودن</h4>
                        <form id="lottery_form" action="{{ route('create.lottery') }}"
                            onsubmit="return false;" enctype="multipart/form-data">
                            <input type="hidden" name="lottery_id" id="lottery_id" value="">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label>نام مسابقه</label>
                                        <input class="form-control" type="text" name="lotteryname" id="lotteryname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> جایزه</label>
                                        <input class="form-control" type="text" name="award" id="award">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> ورودی</label>
                                        <input class="form-control" type="text" name="price" id="price">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> عکس مسابقه</label>
                                        <input class="form-control-file" type="file" name="image" id="lottery_image">
                                        <img src="" alt="" id="image_show" width="300" height="300">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> توضیحات</label>
                                        <input class="form-control" type="text" name="desc" id="desc">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label>تاریخ</label>
                                        <input class="form-control formdate" type="text" name="date" id="tarikh"
                                            dir="auto" autocomplete="off">
                                        <div class="formdate"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام بازی</label>
                                    <input class="form-control" type="text" name="gamename" id="gamename">
                                </div>
                            </div>
                            <button type="button" id="lottery_form_btn" class="btn btn-primary">ثبت</button>
                            <p style="color: red;" id="device_type_form_msg"></p>
                        </form>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title mb-3">مسابقه های ثبت شده </h4>

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام مسابقه</th>
                                        <th class="font-weight-medium">جایزه</th>
                                        <th class="font-weight-medium">نام بازی</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                @endphp
                                    @foreach ($lotteries as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->lottery_name }}
                                        </td>
                                        <td>
                                            {{ $t->award_title }}
                                        </td>
                                        <td>
                                            {{ $t->game_title }}
                                        </td>
                                        <td>
                                            <button type="button" class="edit-system btn btn-success waves-effect waves-light editlottery" data-url="{{ route('edit.lottery') }}" data-id="{{ $t->lottery_id }}" >ویرایش</button>
                                            <button data-id="{{ $t->lottery_id }}" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                                            <button data-id="{{ $t->lottery_id }}" type="button" class="btn btn-info add-user-lottery" data-toggle="modal" data-target="#add-alert-modal">افزودن شرکت کننده</button>
                                            <a class="btn btn-light" href="/admin/lottery/show/{{ $t->lottery_id }}" title="{{ $t->lottery_name }}">نمایش</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    @include('Admin.footer')


</div>


<!-- Danger Alert Modal -->
<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">توجه</h4>
                    <p class="mt-3 text-white">درصورت حذف این مورد تمام دستگاه های ثبت شده ی شما که به آن مرتبط هستند
                        حذف خواهند شد.</p>
                    <button id="remove-system" data-url="{{ route('delete.lottery') }}" type="button"
                        class="btn btn-light my-2" data-dismiss="modal">حذف</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ویرایش ردیف - <span id="row-num-model"></span> </h4>
                <button type="button" class="خروج" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('edit.game') }}" method="post">
                    <input type="hidden" id="frm_device_type_id" name="device_type_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نوع دستگاه</label>
                                <select name="type" id="modal-system-typs" class="form-control">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">قیمت هر ساعت</label>
                                <input type="text" name="price" class="form-control" id="modal-system-price">
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                    <button type="button" id="editrow" class="btn btn-info waves-effect waves-light">ثبت</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<div id="add-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">عضو جدید <span id="row-num-model"></span> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('add.lottery.user') }}" method="post">
                    <input type="hidden" id="lottery-user-id" name="lottery_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نام</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label"> نام خانوادگی</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">موبایل</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                    <button type="button" id="lottery_user_btn" class="btn btn-info waves-effect waves-light">ثبت</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->
<script type="text/javascript" src="{{ asset('assets/js/persian-date.js') }}" defer></script>

<script type="text/javascript" src="{{ asset('assets/js/persian-datepicker.js') }}" defer>
</script>
<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>


@endsection
