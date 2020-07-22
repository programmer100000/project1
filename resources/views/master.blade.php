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
  @yield('head')
</head>

<body id="page-top">
  <!-- Navigation-->

  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div id='search-box' class="test">
      <form action=''>
        <input type='search' name='search' placeholder='جستجو...' />
        <button class="close-search" type="button">
          <i class='fa fa-times'></i>
        </button>
      </form>
    </div>
    <div class="container">

      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <i class="fas fa-bars"></i>
      </button>
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ url('/ui/img/logo.png') }}" alt="" width="75" height="75"></a>
      <div class="header-links">
        <div class="inner-header-links">
          <button id="mobile-search" class="mobile-search">
            <i class='fa fa-search' aria-hidden='true'></i>
          </button>
          <button class="mobile-login-user"> <i class="fas fa-user"></i></button>
        </div>

      </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">
          @php
          $user = Auth::user();
          if(Auth::check() && $user->status_id == 1 && $user->role_id == 1){
          $register_text = "پنل";
          }else{
          $register_text = "ثبت گیم نت";
          }
          @endphp
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('home') }}">صفحه اصلی</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('guide') }}">راهنما</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('admin.register') }}">@php echo $register_text; @endphp</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('gamenets') }}">گیم نت ها</a></li>



        </ul>


      </div>

      <div class='top-nav-search top-nav-item'>
        <form>
          <input type='text' name='search' placeholder='جستجو..'></input>
          <button>
            <i class='fa fa-search' aria-hidden='true'></i>
          </button>
        </form>
      </div>
      <button class="login-user"> <i class="fas fa-user"></i></button>

    </div>
  </nav>

  @yield('content')
  <div class="container-fluid m-0 p-0">
    <div class="row col-12 m-0 p-0 back-dark img-footer">
      <img class="img-desktop-footer" src="{{ url('ui/img/tfooter.png') }}" alt="">
      <img class="img-mobile-footer" src="{{ url('ui/img/sarbaz.png') }}" alt="">
    </div>
  </div>
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <!-- Footer Location-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">آدرس</h4>
          <p class="lead mb-0">
            خیابان حافظ خیابان سرهنگ سخایی کوچه انتخابیه
            <br />
          </p>
        </div>
        <!-- Footer Social Icons-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">ما را دنبال کنید </h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-telegram"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
        </div>
        <!-- Footer About Text-->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">
            Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>
            .
          </p>
        </div>
      </div>
    </div>
  </footer>
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