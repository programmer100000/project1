<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>فینتر</title>
  <!-- Favicon-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('ui/css/styles.css') }}" rel="stylesheet" />
  <link href="{{ asset('ui/css/mystyle.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/buttonsplugin/css/normalize.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/buttonsplugin/css/main.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/css/animate.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('ui/css/flickity.css')}}" media="screen">
  <link rel="stylesheet" href="{{ asset('/fonts/css/style.css') }}">
</head>

<body id="page-top">
  <!-- Navigation-->

  <!-- Copyright Section-->
  <div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © Finter 2020</small></div>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>
  <script type="text/javascript" src="{{asset('ui/js/myjquery.js')}}">
  </script>
  <!-- Core theme JS-->
  <script src="{{ asset('ui/js/scripts.js') }}"></script>
  <script src="{{ asset('ui/buttonsplugin/js/TweenMax.min.js') }}"></script>
  <script src="{{ asset('ui/buttonsplugin/js/main.js') }}"></script>
  <script src="{{ asset('ui/js/flickity.min.js')}}"></script>
  <script>
    $(function() {
      new WOW().init();
    });

    $('.close-search').click(function() {
      $('#search-box').removeClass("show-search");
    });
    $('#mobile-search').click(function() {
      $('#search-box').addClass("show-search");
    });
  </script>
</body>

</html>