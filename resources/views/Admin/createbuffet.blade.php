@extends('Admin.master')
@section('title', 'خانه')


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
                        <h4 class="page-title">افزودن خوراکی</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">خوراکی های های ثبت شده</h4>

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام خوراکی</th>
                                        <th class="font-weight-medium">قیمت </th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                @endphp
                                    @foreach ($buffets as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->buffet_name }}
                                        </td>

                                        <td>
                                            {{ $t->buffet_price }}
                                        </td>

                                        <td>
                                            <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal" data-id="{{ $t->gnet_buffet_id }}" data-dtnid="{{ $t->device_type_name_id }}" data-price="{{ $t->type_price }}">ویرایش</button>
                                            <button data-id="{{ $t->gnet_buffet_id }}" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">افزودن</h4>
                        <form id="types_form" action="{{ route('create.buffet') }}"  onsubmit="return false;">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام خوراکی</label> <br />
                                    <input type="text" name="buffetname" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>قیمت هر ساعت</label>
                                    <input class="form-control" type="text" name="price" id="selectize-tags">
                                </div>
                            </div>
                            <button type="button" id="types_form_btn" class="btn btn-primary">ثبت</button>
                            <p style="color: red;" id="device_type_form_msg"></p>
                        </form>
                    </div> <!-- end card-box-->
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
                    <p class="mt-3 text-white">درصورت حذف این مورد تمام دستگاه های ثبت شده ی شما که به آن مرتبط هستند حذف خواهند شد.</p>
                    <button id="remove-system" data-url="{{ route('delete.buffet') }}" type="button" class="btn btn-light my-2" data-dismiss="modal">حذف</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ویرایش ردیف - <span id="row-num-model"></span> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('edit.buffet') }}" method="post">
                    <input type="hidden" id="frm_device_type_id" name="gnet_buffet_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نام خوراکی</label>
                                <input type="text" name="buffetname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">قیمت</label>
                                <input type="text" name="price" class="form-control" id="modal-system-price">
                            </div>
                        </div>
                    </div>

                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" id="editrow" class="btn btn-info waves-effect waves-light">Save changes</button>
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

<!-- END wrapper -->

<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>
@endsection
