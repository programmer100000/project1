@extends('superadmin.master')
@section('title', 'مدیریت')
@section('head')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ANKFN7UZG86bQx44xyArKvyqU9jeALg"></script>
<script src="{{ asset('/js/locationpicker.min.js') }}"></script>
<link href="{{ asset('assets/libs/jsgrid/jsgrid.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet"
    type="text/css" />
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

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="thead-light">
                                    <tr>
                                        <th class="font-weight-medium">ردیف</th>
                                        <th class="font-weight-medium">نام کاربر</th>
                                        <th class="font-weight-medium">نام گیم نت</th>
                                        <th class="font-weight-medium">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($gamenets as $u)

                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>
                                                {{ $u->username }}
                                            </td>
                                            <td>
                                                {{ $u->title }}
                                            </td>

                                            <td>
                                                <button type="button"
                                                    class="view-gamenet btn btn-success waves-effect waves-light"
                                                    data-toggle="modal" data-target="#view-gamenet-data"
                                                    data-id="{{ $u->user_id }}"
                                                    data-url={{ route('gamenet.data') }}>مشاهده</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
<div id="view-gamenet-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">اطلاعات<span id="row-num-model"></span> </h4>
                <button type="button" class="خروج" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('gamenet.Confirmation') }}" method="post">
                    <input type="hidden" id="user_id" name="user_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">نام</label>
                                <input type="text" class="form-control" name="fname" id="gdfname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">نام خانوادگی</label>
                                <input type="text" class="form-control" name="lname" id="gdlname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">نام کاربری</label>
                                <input type="text" class="form-control" name="username" id="gdusername">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">موبایل</label>
                                <input type="text" class="form-control" name="mobile" id="gdmobile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">ایمیل</label>
                                <input type="text" class="form-control" name="email" id="gdemail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">نام گیم نت </label>
                                <input type="text" class="form-control" name="gamenet_name" id="gdgamenet_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">آدرس گیم نت </label>
                                <input type="text" class="form-control" name="address" id="gdaddress">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div id="map-show" style="width: 100%; height: 480px;"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">تلفن</label>
                                <input type="text" class="form-control" name="tel" id="tel">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">توضیحات گیم نت </label>
                                <input type="text" class="form-control" name="desc" id="gddesc">
                            </div>
                        </div>
                    </div>

                    
                    <button type="button" id="btnconfirmation"
                        class="btn btn-info waves-effect waves-light">تایید</button>
                </form>
            <form action="{{ route('gamenet.disapproval') }}">
                    <input type="hidden" id="user_id_report" name="user_id_report" value="">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="report">توضیحات عدم تایید</label>
                            <textarea name="report" id="report" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div type="button" id="disapproval" class="btn btn-danger" >عدم تایید</div>
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
    var customstyle = [{
            "elementType": "geometry",
            "stylers": [{
                "color": "#212121"
            }]
        },
        {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "color": "#212121"
            }]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [{
                "color": "#757575"
            }]
        },
        {
            "featureType": "administrative.country",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        },
        {
            "featureType": "administrative.land_parcel",
            "stylers": [{
                "visibility": "off"
            }]
        },
        {
            "featureType": "administrative.locality",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#bdbdbd"
            }]
        },
        {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#181818"
            }]
        },
        {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        },
        {
            "featureType": "poi.park",
            "elementType": "labels.text.stroke",
            "stylers": [{
                "color": "#1b1b1b"
            }]
        },
        {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#2c2c2c"
            }]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#8a8a8a"
            }]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#373737"
            }]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#3c3c3c"
            }]
        },
        {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry",
            "stylers": [{
                "color": "#4e4e4e"
            }]
        },
        {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        },
        {
            "featureType": "transit",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#3d3d3d"
            }]
        }
    ];
    var glat = 35.6892, glng = 51.3890;
   
        var locationPicker = new locationPicker('map-show',{
            setCurrentPosition: true,
            lat: glat,
            lng: glng,
            inputBinding: {
                latitudeInput: document.getElementById('xcv1'),
                longitudeInput: document.getElementById('xcv2'),
            }
        }, {
            zoom: 15,
            styles: customstyle
        });
    

</script>
<script src="{{ asset('js/superadmin.js') }}" defer></script>
@endsection
