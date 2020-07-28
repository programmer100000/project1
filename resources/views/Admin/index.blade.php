@extends('Admin.master')
@section('title', 'خانه')
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
                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">دستگاه های مشغول</h4>

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام دستگاه</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($lives as $t)

                                    <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>

                                        <td>
                                            {{ $t->device_name }}
                                        </td>


                                        <td>
                                            <button type="button"
                                                class="edit-system btn btn-success waves-effect waves-light"
                                                data-toggle="modal" data-target="#con-close-modal"
                                                data-id="{{ $t->gnet_live_id }}">تمام</button>
                                            <button type="button"
                                                class="change-system btn btn-success waves-effect waves-light"
                                                data-toggle="modal" data-target="#chcon-close-modal"
                                                data-id="{{ $t->gnet_live_id }}">انتقال</button>
                                                <button type="button"
                                                class="add-buffet btn btn-success waves-effect waves-light"
                                                data-toggle="modal" data-target="#bcon-close-modal"
                                                data-id="{{ $t->gnet_live_id }}">افزودن خوراکی</button>

                                            <button data-id="{{ $t->gnet_live_id }}" type="button"
                                                class="btn btn-danger remove-system" data-toggle="modal"
                                                data-target="#danger-alert-modal">حذف</button>
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
                        <form id="types_form" action="{{ route('create.live') }}" onsubmit="return false;">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>نام دستگاه</label> <br />
                                    <select name="deviceid" id="selectize-select" class="form-control ">
                                        @foreach ($falsedevices as $system)
                                        <option value="{{ $system->gnet_device_id }}">{{ $system->device_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label> تعداد دسته</label>
                                    <select name="joystick_count" class="form-control" id="">
                                    @for($i = 1 ; $i<=5  ; $i++)
                                    <option value = "{{$i}}">{{ $i }}</option>
                                    
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <button type="button" id="add_invoice" class="btn btn-primary">ثبت</button>
                            <p style="color: red;" id="device_type_form_msg"></p>
                        </form>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-xl-12">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <a class="btn btn-primary" href="{{route('export.excel.livelogs')}}">فایل اکسل </a>
                                <div id="jsGrid"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-xl-12">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <a class="btn btn-primary" href="{{route('export.excel.factors')}}">فایل اکسل </a>
                                <div id="jsgrid"></div>
                            </div>
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
                    <p class="mt-3 text-white">چنانچه از حذف این مورد اطمینان دارید روی دکمه حذف کلیک کنید </p>
                    <button id="remove-system" data-url="{{ route('delete.live') }}" type="button"
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
                <h4 class="modal-title">در صورت اطمینان در خصوص اتمام سفارش کلیک کنید  <span id="row-num-model"></span> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('finish.live') }}" method="post">
                    <input type="hidden" id="frm_device_type_id" name="id" value="">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                    <button type="button" id="finishfactor" class="btn btn-info waves-effect waves-light">تمام </button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="chcon-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ویرایش ردیف - <span id="row-num-model"></span> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('change.live') }}" method="post">
                    <input type="hidden" id="frm_live_id" name="live_id" value="">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>نام دستگاه</label> <br />
                            <select name="deviceid" id="selectize-select" class="form-control ">
                                @foreach ($falsedevices as $system)
                                <option value="{{ $system->gnet_device_id }}">{{ $system->device_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label> تعداد دسته</label>
                            <input class="form-control" type="text" name="joystick_count" id="selectize-tags">
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج</button>
                    <button type="button" id="changerow" class="btn btn-info waves-effect waves-light">ثبت</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="bcon-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mr-2">افزودن خوراکی <span id="row-num-model"></span> </h4>
                <button type="button" class="btn btn-sm btn-success" id="add-buffet">+</button>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('add.buffet') }}" method="post">
                    <input type="hidden" id="buffet_live_id" name="live_id" value="">
                    <div class="row" id="div-buffet">
                        <div class="col-md-6" id="dbf-1">
                            <div class="form-group mb-3">
                                <label>نام خوراکی</label> <br />
                                <select name="buffetnames[]" id="selectize-select" class="form-control">
                                    @foreach ($buffets as $system)
                                    <option value="{{ $system->gnet_buffet_id }}">{{ $system->buffet_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" id="dbf-2">
                            <div class="form-group mb-3">
                                <label> تعداد</label>
                                <input class="form-control" type="text" name="counts[]" id="selectize-tags" value='1'>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">خروج  </button>
                    <button type="button" id="submit_buffet_form" class="btn btn-info waves-effect waves-light">ثبت</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Modal -->
<div id="ModalForm" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-right">فاکتور شماره - <span id='factor-number'></span></h4>
        </div>
        <div class="modal-body">
          <div class="responsive-table-plugin">
            <p>دستگاه ها</p>
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="table-factor-livelogs" class="table table-striped">
                        <thead>
                            <tr>
                                <th data-priority="1">نام دستگاه</th>
                                <th data-priority="2">تعداد دسته اضافه</th>
                                <th data-priority="3">تاریخ شروع</th>
                                <th data-priority="4">تاریخ پایان</th>
                                <th data-priority="5">قیمت</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive -->

                </div> <!-- end .table-rep-plugin-->
            </div> <!-- end .responsive-table-plugin-->
            <br>
            <p>خوراکی ها</p>
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="table-factor-buffets" class="table table-striped">
                        <thead>
                            <tr>
                                <th data-priority="1">خوراکی</th>
                                <th data-priority="2">تعداد</th>
                                <th data-priority="3">قیمت</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive -->

                </div> <!-- end .table-rep-plugin-->
            </div> <!-- end .responsive-table-plugin-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->

<script src="{{ asset('assets/js/createsystem.js') }}" charset="utf-8" defer></script>

<!-- JsGrid js -->
<script src="{{ asset('assets/libs/jsgrid/jsgrid.min.js') }}" defer></script>

<!-- Init js -->
<script src="{{ asset('assets/js/pages/jsgrid.init.js') }}" defer></script>
<script src="{{ asset('assets/js/pages/jsgridf.init.js') }}" defer></script>


<script>
   var url_getLiveLog = '{{ route('get.logs') }}';
   var url_getfactor = '{{ route('get.factors') }}';
</script>
@endsection
