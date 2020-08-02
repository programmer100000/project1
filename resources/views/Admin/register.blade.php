@extends('Admin.base')

@section('head')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ANKFN7UZG86bQx44xyArKvyqU9jeALg"></script>
<script src="{{ asset('/js/locationpicker.min.js') }}"></script>
@endsection

@section('body')
<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                <a href="{{ route('home') }}" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                        <img src="{{ asset('ui/img/logo.png') }}" alt="" width="75" height="75">
                                        </span>
                                    </a>

                                    <a href="{{ route('home') }}" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                        <img src="{{ asset('ui/img/logo.png') }}" alt="" width="75" height="75">
                                        </span>
                                    </a>
                                </div>
                                <h3 class="mb-4 mt-3">ثبت نام گیم نت</h3>
                            </div>

                            <form class="forms admin-register-form" action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if($errors->any())
                                <p class="text-danger">{{ $errors->first() }}</p>
                                @endif
                                <div class="form-group">
                                    <label for="fname">نام</label>
                                    <input class="form-control" name="fname" type="text" id="fname" placeholder="نام" required>
                                </div>
                                <div class="form-group">
                                    <label for="lname"> نام خانوادگی</label>
                                    <input class="form-control" name="lname" type="text" id="lname" placeholder="نام خانوادگی" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">نام کاربری</label>
                                    <input class="form-control" name="username" type="text" id="username" placeholder="نام کاربری" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">موبایل</label>
                                    <input class="form-control" name="mobile" type="text" id="mobile" placeholder="موبایل" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input class="form-control" name="email" type="text" id="email" placeholder="ایمیل" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">نام گیم نت</label>
                                    <input class="form-control" name="title" type="text" id="title" placeholder="نام گیم نت" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">آدرس گیم نت </label>
                                    <input class="form-control" name="address" type="text" id="address" placeholder="آدرس گیم نت " required>
                                </div>
                                <div class="form-group">
                                    <div id="map" style="width: 100%; height: 480px;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="tel">تلفن</label>
                                    <input class="form-control" name="tel" type="text" id="tel" placeholder="تلفن" required>
                                </div>
                                <div class="form-group">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                                <div class="form-group">
                                    <label for="description">توضیحات گیم نت</label>
                                    <input class="form-control" name="description" type="text" id="description" placeholder="توضیحات" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label> عکس گیم نت</label>
                                    {{-- <input class="form-control-file" type="file" > --}}
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="modal-system-typs" class="control-label">نوع پلن</label>
                                    <select name="plan" id="modal-system-typs" class="form-control">
                                        @foreach ($plans as $p)
                                            <option value="{{ $p->plan_id }}">{{ $p->time }}روزه</option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="hidden" name="lat" id='lat_register' value="0">
                                <input type="hidden" name="long" id='long_register' value="0">
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> ثبت نام </button>
                                </div>

                            </form>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                        <p class="text-white-50">قبلا ثبت نام کرده اید؟ <a href="{{ route('admin.login') }}" class="text-white ml-1"><b>وارد شوید</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt text-white-50">
    <div class="container"><small>Copyright © Finter 2020</small></div>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->


    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }} "></script>
</body>
@endsection

