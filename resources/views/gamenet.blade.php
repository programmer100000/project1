@extends('master')
@section('head')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ANKFN7UZG86bQx44xyArKvyqU9jeALg"></script>
<script src="{{ asset('/js/locationpicker.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/ui/css/star-rating-svg.css') }}">
@endsection
@section('content')
<div class="wrapper-gamenet container-fluid m-0 p-0" dir="rtl">
  <div class="g-info row m-0 p-1">
    <div class="col-md-4 m-0 p-0">
      <div class="carousel" data-flickity='{ "wrapAround": true }'>
        @foreach ($gamenet_images as $gp)
        <img class="carousel-cell" src="{{ url($gp->gamenet_image) }}" alt="">
        @endforeach
      </div>
    </div>

    <div class="peroperties col-md-7 m-0 p-0 text-right">
      <div class="item-header d-flex w-100 m-0 p-2">
        <div class="title text-right float-right m-0 p-0 w-50">
          <h2>{{ $gamenet->title }}</h2>
        </div>
        <div class="stars text-left float-left m-0 p-0 w-50">
        <div class="my-rating" dir="ltr" data-toggle="modal" href="#rate-modal"></div>
        </div>
      </div>
      <div class="desc-item">{{ $gamenet->description }}
      </div>
    </div>
    <div class="contact col-md-4 m-0 p-0">
      <div class="address">
        <i class="fa fa-home" aria-hidden="true"></i>
        {{ $gamenet->address }}
      </div>
      <div class="phone">
        <i class="fa fa-phone-square" aria-hidden="true"></i>
        {{ $gamenet->tel }}
      </div>
    </div>



    <div class="map col-md-6 m-0 p-0" id="map-show">
    </div>


  </div>
  <div class="row mt-4" dir="rtl">
    <div class="col-12">

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#newComment">نظر دهید</a></li>
        <li><a data-toggle="tab" href="#comments">نظرات کاربران</a></li>
      </ul>
      <div class="tab-content">
        <div id="newComment" class="tab-pane fade in active ">

          <p>نظر دهید</p>
        </div>
        <div id="comments" class="tab-pane fade">

          <div class="card card-white post text-right">
            <div class="post-heading">
              <div class="float-right image">
                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
              </div>
              <div class="float-right mr-2 meta">
                <div class="title h5">
                  <a href="#"><b class="text-white">محمدرضا طاهری</b></a>
                </div>
                <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <h6 class="text-muted time">۱ دقیقه پیش</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="rate-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">توجه</h4>
                    <p class="mt-3 text-white">برای امتیاز دادن به یک گیم نت فقط یک بار مهلت دارید</p>
                    <button id="btnrate" data-csrf={{ csrf_token() }} data-id={{ $gamenet->gamenet_id }} data-url="{{ route('gamenet.rate') }}" type="button" class="btn btn-light my-2" data-dismiss="modal">ثبت‌</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>
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
    lat: {{$gamenet -> lat }},
    lng: {{$gamenet -> long}}

    // You can omit this, defaults to true
  }, {
    zoom: 15,
    styles: customstyle // You can set any google map options here, zoom defaults to 15
  });

</script>

<script src="{{ asset('/ui/js/jquery.star-rating-svg.js') }}" defer></script>
<script src="{{ asset('/ui/js/myjquery.js') }}" defer></script>
<script>
  var ratestatus = {{ $s }};

</script>
@endsection