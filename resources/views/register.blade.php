@extends('formsmaster')
@section('form')
<form class="login-form register" action="{{ route('register') }}" method="POST">
  <h1 class="text-white text-center">ثبت نام کاربر</h1>
  @csrf

  <div class="my-4 login-input">
      <span class="ml-1">
          <svg id="Number_Icon" data-name="Number Icon" xmlns="http://www.w3.org/2000/svg"
              width="30" height="30" viewBox="0 0 49 49">
              <rect id="UI_Dark_Icons_Number_background"
                  data-name="UI/Dark/Icons/Number background" width="49" height="49"
                  fill="none" />
              <g id="Number_Icon-2" data-name="Number Icon">
                  <rect id="bg" width="49" height="49" fill="none" />
                  <g id="ico" transform="translate(8.167 22.458)">
                      <circle id="Oval" cx="2.5" cy="2.5" r="2.5"
                          transform="translate(13.833 -0.458)" fill="none" stroke="#fff"
                          stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" stroke-width="2" />
                      <ellipse id="Oval-2" data-name="Oval" cx="2" cy="2.5" rx="2"
                          ry="2.5" transform="translate(28.833 -0.458)" fill="none"
                          stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" stroke-width="2" />
                      <ellipse id="Oval-3" data-name="Oval" cx="2" cy="2.5" rx="2"
                          ry="2.5" transform="translate(-0.167 -0.458)" fill="none"
                          stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" stroke-width="2" />
                  </g>
              </g>
          </svg>
      </span>
      <input type="text" class="form-control p-0 " placeholder="شماره موبایل"
          name="mobile">
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
@endsection
@section('button')
<a href="{{ route('login') }}"><button type="submit"
  class="btn btn-outline-primary login-page-register-btn px-5 py-2 align-self-start ">
  ورود کاربر
</button>
</a>
@endsection