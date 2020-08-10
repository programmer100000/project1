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
                        <h4 class="page-title">افزودن بازی</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">بازی های ثبت شده</h4>

                        <div class="table-responsive">
                            <table id="tbl-games" class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام بازی</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                @endphp
                                    @foreach ($games as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->game_name }}
                                        </td>

                                        <td>
                                            <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-خروج-modal" data-id="{{ $t->gnet_game_id }}">ویرایش</button>
                                            <button data-id="{{ $t->gnet_game_id }}" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
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
                        <form id="types_form" action="{{ route('create.game') }}"  onsubmit="return false;">
                            {{-- <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام دستگاه</label> <br />
                                    <select name="devices[]" id="selectize-select" multiple class="form-control mdb-select md-form">
                                        @foreach ($mydevices as $system)
                                            <option value="{{ $system->gnet_device_id }}">{{ $system->device_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام بازی</label>
                                    <input class="form-control" type="text" name="gamename" id="selectize-tags">
                                </div>
                            </div>
                            <button type="button" id="game_form_btn" class="btn btn-primary">ثبت</button>
                            <p style="color: red;" id="device_type_form_msg"></p>
                        </form>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">امکانات ثبت شده</h4>

                        <div class="table-responsive">
                            <table id="tbl_possibility" class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام امکانات</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                @endphp
                                    @foreach ($possibilities as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->text }}
                                        </td>

                                        <td>
                                            <button type="button" class="edit-possibility btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-modal" data-id="{{ $t->possibility_id }}">ویرایش</button>
                                            <button data-id="{{ $t->possibility_id }}" type="button" class="btn btn-danger remove-possibility" data-toggle="modal" data-target="#danger-modal">حذف</button>
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
                        <form id="types_form" action="{{ route('create.possibility') }}"  onsubmit="return false;">
                            {{-- <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام دستگاه</label> <br />
                                    <select name="devices[]" id="selectize-select" multiple class="form-control mdb-select md-form">
                                        @foreach ($mydevices as $system)
                                            <option value="{{ $system->gnet_device_id }}">{{ $system->device_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام </label>
                                    <input class="form-control" type="text" name="possibilityname" id="selectize-tags">
                                </div>
                            </div>
                            <button type="button" id="btnformpossibility" class="btn btn-primary">ثبت</button>
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
                    <button id="remove-system" data-url="{{ route('delete.game') }}" type="button" class="btn btn-light my-2" data-dismiss="modal">حذف</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="danger-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">توجه</h4>
                    <p class="mt-3 text-white">درصورت حذف این مورد تمام دستگاه های ثبت شده ی شما که به آن مرتبط هستند حذف خواهند شد.</p>
                    <button id="remove-possibility" data-url="{{ route('delete.possibility') }}" type="button" class="btn btn-light my-2" data-dismiss="modal">حذف</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="con-خروج-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ویرایش ردیف - <span id="row-num-model"></span> </h4>
                <button type="button" class="خروج" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('edit.game') }}" method="post">
                    <input type="hidden" id="frm_device_type_id" name="gameid" value="">
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نوع دستگاه</label>
                                <select name="type" id="modal-system-typs" class="form-control">
                                    @foreach ($systemtypes as $systemtype)
                                        <option value="{{ $systemtype->device_type_name_id }}">{{ $systemtype->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">نام بازی</label>
                                <input type="text" name="gamename" class="form-control" id="modal-system-price">
                            </div>
                        </div>
                    </div>

                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                <button type="button" id="editrow" class="btn btn-info waves-effect waves-light" data-dismiss="modal">ثبت</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="con-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ویرایش ردیف - <span id="row-num-model"></span> </h4>
                <button type="button" class="خروج" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('edit.possibility') }}" method="post">
                    <input type="hidden" id="possibilityid" name="possibilityid" value="">
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="modal-system-typs" class="control-label">نوع دستگاه</label>
                                <select name="type" id="modal-system-typs" class="form-control">
                                    @foreach ($systemtypes as $systemtype)
                                        <option value="{{ $systemtype->device_type_name_id }}">{{ $systemtype->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">نام </label>
                                <input type="text" name="possibilityname" class="form-control" id="modal-system-price">
                            </div>
                        </div>
                    </div>

                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                <button type="button" id="editpossibility" class="btn btn-info waves-effect waves-light" data-dismiss="modal">ثبت</button>
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
<script>
</script>
<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>
@endsection
