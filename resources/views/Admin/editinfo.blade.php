@extends('Admin.master')
@section('title', 'خانه')
@section('head')
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ANKFN7UZG86bQx44xyArKvyqU9jeALg"></script>
<script src="{{ asset('/js/locationpicker.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href={{ asset('assets/css/persian-datepicker.css') }} />

<link type="text/css" rel="stylesheet" href={{ asset('assets/css/persianDatepicker-dark.css') }} />

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
                        @if($gamenet_temp != null)
                        <p class="text-danger">اطاعات ویرایش شده شما ثبت و در انتظار تایید است لطفا صبور باشید</p>
                        @endif
                        @php
                        if($gamenet_temp != null){
                        $readonlyval = "readonly";
                        }else{
                        $readonlyval = "";
                        }
                        @endphp
                        <form action="{{ route('edit.profile') }}" onsubmit="return false;"
                            enctype="multipart/form-data">
                            <input type="hidden" name="gamenet_id" value="{{ $gamenet->gamenet_id }}">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label>نام گیم نت</label>
                                        <input class="form-control" type="text" name="gamenetname"
                                            value="{{ $gamenet->title }}" @php echo $readonlyval; @endphp>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> آدرس</label>
                                        <input class="form-control" type="text" name="address" id="address"
                                            value="{{ $gamenet->address }}" @php echo $readonlyval; @endphp>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label> توضیحات</label>
                                        <input class="form-control" type="text" name="desc" id="description"
                                            value="{{ $gamenet->description }}" @php echo $readonlyval; @endphp>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label>تلفن</label>
                                        <input class="form-control" type="text" name="tel" id="tel"
                                            value="{{ $gamenet->tel }}" @php echo $readonlyval; @endphp>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <div class="map-show" id="map-show" style="height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="lat" id='lat_register' value="0">
                            <input type="hidden" name="long" id='long_register' value="0">
                            @if($gamenet_temp ==null)
                            <button type="button" id="edit-profile-btn" class="btn btn-primary">ثبت</button>
                            @endif
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




<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!-- END wrapper -->
<script src="{{ asset('assets/js/createsystem.js') }}" defer></script>
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
    var locationPicker = new locationPicker('map-show', {
        setCurrentPosition: true,
        lat: {{$gamenet ->lat}},
        lng: {{$gamenet ->long}}
    }, {
        zoom: 15,
        styles: customstyle
    });
    google.maps.event.addListener(locationPicker.map, 'idle', function (event) {
    // Get current location and show it in HTML
    var location = locationPicker.getMarkerPosition();
    if($('#long_register').length > 0){
        $('#long_register').val(location.lng);
    }

    if($('#lat_register').length > 0){
        $('#lat_register').val(location.lat);
    }

});

</script>

@endsection
