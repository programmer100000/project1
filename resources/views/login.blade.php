
@extends('formsmaster')

@section('form')
<form class="login-form" action="{{ route('login') }}" method="POST">
    @csrf
    <h1 class="text-white text-center my-4">ورود کاربر</h1>
    <div class="my-4 login-input">
        <span class="ml-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                viewBox="0 0 47 49">
                <defs>
                    <clipPath id="clip-Artboard_3">
                        <rect width="47" height="49" />
                    </clipPath>
                </defs>
                <g id="Artboard_3" data-name="Artboard – 3" clip-path="url(#clip-Artboard_3)">
                    <g id="User_Icon" data-name="User Icon">
                        <rect id="UI_Dark_Icons_Person_background" data-name="UI/Dark/Icons/Person background"
                            width="49" height="49" fill="none" />
                        <g id="Person_Icon" data-name="Person Icon">
                            <rect id="bg" width="49" height="49" fill="none" />
                            <g id="ico" transform="translate(8.167 6.125)">
                                <path id="Path"
                                    d="M32.667,12.25V8.167A8.167,8.167,0,0,0,24.5,0H8.167A8.167,8.167,0,0,0,0,8.167V12.25"
                                    transform="translate(0 24.5)" fill="none" stroke="#fff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                <ellipse id="Oval" cx="8.5" cy="8" rx="8.5" ry="8" transform="translate(7.833 -0.125)"
                                    fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="2" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </span>
        <input type="text" class="form-control p-0 " id="username" placeholder="نام کاربری" name="username">
    </div>
    <div class="my-4 login-input">
        <span class="ml-1">
            <svg id="Number_Icon" data-name="Number Icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                viewBox="0 0 49 49">
                <rect id="UI_Dark_Icons_Number_background" data-name="UI/Dark/Icons/Number background" width="49"
                    height="49" fill="none" />
                <g id="Number_Icon-2" data-name="Number Icon">
                    <rect id="bg" width="49" height="49" fill="none" />
                    <g id="ico" transform="translate(8.167 22.458)">
                        <circle id="Oval" cx="2.5" cy="2.5" r="2.5" transform="translate(13.833 -0.458)" fill="none"
                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                            stroke-width="2" />
                        <ellipse id="Oval-2" data-name="Oval" cx="2" cy="2.5" rx="2" ry="2.5"
                            transform="translate(28.833 -0.458)" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                        <ellipse id="Oval-3" data-name="Oval" cx="2" cy="2.5" rx="2" ry="2.5"
                            transform="translate(-0.167 -0.458)" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                    </g>
                </g>
            </svg>
        </span>
        <input type="password" class="form-control p-0 " id="password" placeholder="رمز ورود" name="password">
    </div>
    <div class=" form-group">
        {!! NoCaptcha::renderJs('fa', true, 'recaptchaCallback') !!}
        {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
        @if ($errors->has('g-recaptcha-response'))
        <span class="help-block">
            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
        </span>
        @endif
    </div>
    <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary main-form-btn px-5 py-2">ارسال</button>
  </div>
</form>
    <a href="{{  route('forget.password') }}">
        <p class="forget-text text-right">
            فراموشی رمز عبور
        </p>
    </a>
</form>  
    @endsection
    @section('button')
    <a href="{{ route('register') }}" class="btn btn-outline-primary login-page-register-btn px-5 py-2 align-self-start ">
            ثبت نام
    </a>
    @endsection
