@extends('Admin.master')
@section('title', 'خانه')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bracket.min.css') }}" />

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
                        <h4 class="header-title mb-3">افراد شرکت کننده </h4>
                        <button data-id="{{ $id }}" type="button" class="btn btn-info add-user-lottery" data-toggle="modal" data-target="#add-alert-modal">افزودن شرکت کننده</button>
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام</th>
                                        <th class="font-weight-medium">نام خانوادگی</th>
                                        <th class="font-weight-medium">موبایل</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                @endphp
                                    @foreach ($lottery_users as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->fname }}
                                        </td>
                                        <td>
                                            {{ $t->lname }}
                                        </td>
                                        <td>
                                            {{ $t->mobile }}
                                        </td>
                                        <td>
                                            <button type="button" class="edit-system btn btn-success waves-effect waves-light edituserlottery"  data-id="{{ $t->lottery_user_id }}" data-toggle="modal" data-target="#con-close-modal">ویرایش</button>

                                            <button data-id="{{ $t->lottery_user_id }}" type="button" class="btn btn-danger remove-user-lottery" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
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
                    <button id="remove-user-lottery" data-url="{{ route('delete.lottery.user') }}" type="button"
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
                <form action="{{ route('edit.lottery.user') }}" method="post">
                    <input type="hidden" id="edituserlottery" name="lottery_user_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نام</label>
                                <input type="text" name="fname" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">نام خانوادگی‌</label>
                                <input type="text" name="lname" class="form-control" id="modal-system-price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">موبایل</label>
                                <input type="text" name="mobile" class="form-control" id="modal-system-price">
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
<script type="text/javascript" src="{{ asset('assets/js/jquery.bracket.min.js') }}"></script>

<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>


@endsection
