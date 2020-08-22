<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/bootstrap.min.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="row w-100  m-0 d-flex login-bg align-items-center justify-content-center">
        <div class="col-10 p-0 h-75 m-0 ">
            <div class="row w-100 p-0 m-0 h-100 login-content align-items-center justify-content-center">
                <div class="col-md-6  login-right p-0 m-0  ">
                    <div class="login-content-right p-0">

                    </div>
                    <div class="inner-login-content-right">
                        <div class="row h-100 p-0 py-5 m-0 justify-content-center align-items-center">
                            <div class="col-10 p-0 m-0 ">
                            <form class="login-form confirm register-form-confirm" action="{{ route('confirm') }}" method="POST" data-autosubmit="false" autocomplete="off">
                                    
                              @csrf
                              <h1 class="text-white text-center mb-3">ثبت نام کاربر</h1>

                                    <p class="text-white text-center my-2">
                                        کد ارسال شده را وارد کنید.
                                    </p>
                                    @if($errors->any())
                                    <p class="text-danger text-right">{{ $errors->first() }}</p>
                                    @endif
                                    <div class="form-group digit-group" data-group-name="digits" >
                                      <input type="text" class="form-control p-0 text-white " id="input1" placeholder="" name="input1" data-next="input2" autofocus>

                                      <input type="text" class="form-control p-0 text-white " id="input2" placeholder="" name="input2" data-next="input3" data-previous="input1">
                                    
                                      <input type="text" class="form-control p-0 text-white " id="input3" placeholder="" name="input3" data-next="input4" data-previous="input2">
                                 
                                      <input type="text" class="form-control p-0 text-white " id="input4" placeholder="" name="input4" data-previous="input3">
                                    </div>


                                      <input type="hidden" id="confirm-code" name="confirm">
                                      <div class="form-group">
                                        <input type="password" name="password" placeholder="رمز عبور"  class="form-control passwords">
                                        <input type="password" name="passwordd" placeholder="تکرار رمز عبور" class="form-control passwords">
                                      </div>
                                      
                                    <a>
                                        <p class="forget-text text-center">
                                            کدی دریافت نکردم!
                                        </p>
                                    </a>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-primary main-form-btn px-5 py-2" id="btn-sendConfrimCode">ارسال</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 p-0 login-content-left">
                    <div class="row h-100 p-0  m-0 justify-content-center align-items-center ">
                        <div class="col-10 inner-bg m-0 py-4 "></div>
                        <div class="col-8  d-flex inner-register-btn justify-content-center align-content-center">
                            <button type="button" class="btn btn-outline-primary login-page-register-btn px-5 py-2 align-self-start ">
                                   ورود کاربر
                                </button>
                        </div>
                    </div>
                </div>

                <span class="right-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="0 0 189 189">
                        <defs>
                          <linearGradient id="linear-gradient" x1="9.012" y1="15.644" x2="10.012" y2="15.644" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#81005f"/>
                            <stop offset="0.012" stop-color="#81005f" stop-opacity="0.937"/>
                            <stop offset="0.064" stop-color="#81005f" stop-opacity="0.694"/>
                            <stop offset="0.121" stop-color="#81005f" stop-opacity="0.494"/>
                            <stop offset="0.184" stop-color="#81005f" stop-opacity="0.341"/>
                            <stop offset="0.255" stop-color="#81005f" stop-opacity="0.231"/>
                            <stop offset="0.344" stop-color="#81005f" stop-opacity="0.169"/>
                            <stop offset="0.498" stop-color="#81005f" stop-opacity="0.149"/>
                          </linearGradient>
                          <linearGradient id="linear-gradient-2" x1="10.835" y1="18.706" x2="11.836" y2="18.706" xlink:href="#linear-gradient"/>
                          <linearGradient id="linear-gradient-3" x1="11.939" y1="20.569" x2="12.939" y2="20.569" xlink:href="#linear-gradient"/>
                          <clipPath id="clip-Artboard_1">
                            <rect width="189" height="189"/>
                          </clipPath>
                        </defs>
                        <g id="Artboard_1" data-name="Artboard – 1" clip-path="url(#clip-Artboard_1)">
                          <g id="Group_516" data-name="Group 516" transform="translate(-1371.047 -655.438)">
                            <path id="Path_3033" data-name="Path 3033" d="M1463.945,841.3a92.874,92.874,0,1,1,65.712-27.219A92.319,92.319,0,0,1,1463.945,841.3Z" opacity="0.25" fill="url(#linear-gradient)"/>
                            <path id="Path_3034" data-name="Path 3034" d="M1463.945,825.671a77.3,77.3,0,1,1,54.66-22.64A76.794,76.794,0,0,1,1463.945,825.671Z" fill="url(#linear-gradient-2)"/>
                            <circle id="Ellipse_249" data-name="Ellipse 249" cx="70.124" cy="70.124" r="70.124" transform="translate(1393.821 678.246)" fill="url(#linear-gradient-3)"/>
                            <g id="Group_441" data-name="Group 441" transform="translate(504.047 206.438)">
                              <g id="up-arrow" transform="matrix(0.017, 1, -1, 0.017, 965.232, 516.8)" opacity="0.33">
                                <g id="Group_269" data-name="Group 269" transform="translate(0 0)">
                                  <g id="Group_268" data-name="Group 268">
                                    <path id="Path_1506" data-name="Path 1506" d="M46.921,20.462,26.754,1.128a4.15,4.15,0,0,0-5.679-.008L.966,20.4a3.738,3.738,0,0,0,.008,5.024,4.154,4.154,0,0,0,5.68.429L23.907,9.31,41.251,25.9a4.15,4.15,0,0,0,5.679.008A3.747,3.747,0,0,0,46.921,20.462Z" fill="#fff"/>
                                  </g>
                                </g>
                              </g>
                              <g id="Group_269-2" data-name="Group 269" transform="matrix(0.017, 1, -1, 0.017, 989.581, 516.8)">
                                <g id="Group_268-2" data-name="Group 268" transform="translate(0)">
                                  <path id="Path_1506-2" data-name="Path 1506" d="M46.921,20.462,26.754,1.128a4.15,4.15,0,0,0-5.679-.008L.966,20.4a3.738,3.738,0,0,0,.008,5.024,4.154,4.154,0,0,0,5.68.429L23.907,9.31,41.251,25.9a4.15,4.15,0,0,0,5.679.008A3.747,3.747,0,0,0,46.921,20.462Z" fill="#fff"/>
                                </g>
                              </g>
                            </g>
                            <g id="Group_515" data-name="Group 515" transform="translate(504.047 206.438)">
                              <g id="up-arrow-2" data-name="up-arrow" transform="matrix(0.017, 1, -1, 0.017, 965.232, 516.8)" opacity="0.33">
                                <g id="Group_269-3" data-name="Group 269" transform="translate(0 0)">
                                  <g id="Group_268-3" data-name="Group 268">
                                    <path id="Path_1506-3" data-name="Path 1506" d="M46.921,20.462,26.754,1.128a4.15,4.15,0,0,0-5.679-.008L.966,20.4a3.738,3.738,0,0,0,.008,5.024,4.154,4.154,0,0,0,5.68.429L23.907,9.31,41.251,25.9a4.15,4.15,0,0,0,5.679.008A3.747,3.747,0,0,0,46.921,20.462Z" fill="#fff"/>
                                  </g>
                                </g>
                              </g>
                              <g id="Group_269-4" data-name="Group 269" transform="matrix(0.017, 1, -1, 0.017, 989.581, 516.8)">
                                <g id="Group_268-4" data-name="Group 268" transform="translate(0)">
                                  <path id="Path_1506-4" data-name="Path 1506" d="M46.921,20.462,26.754,1.128a4.15,4.15,0,0,0-5.679-.008L.966,20.4a3.738,3.738,0,0,0,.008,5.024,4.154,4.154,0,0,0,5.68.429L23.907,9.31,41.251,25.9a4.15,4.15,0,0,0,5.679.008A3.747,3.747,0,0,0,46.921,20.462Z" fill="#fff"/>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                      
                </span>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
  <script src="{{ asset('newui/js/formvalidation.js') }}" defer></script>
  <script>
    $(document).ready(function() {
    $('.digit-group').find('input').each(function() {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function(e) {
            var parent = $($(this).parent());

            if (e.keyCode === 8 || e.keyCode === 37) {
                var prev = parent.find('input#' + $(this).data('previous'));

                if (prev.length) {
                    $(prev).select();
                }
            } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                var next = parent.find('input#' + $(this).data('next'));

                if (next.length) {
                    $(next).select();
                } else {
                    if (parent.data('autosubmit')) {
                        parent.submit();
                    }
                }
            }
        });
    });
    
    $(document).on('click', "#btn-sendConfrimCode", function(){
      let inp1 = $("#input1").val();
      let inp2 = $("#input2").val();
      let inp3 = $("#input3").val();
      let inp4 = $("#input4").val();

      $("#confirm-code").val(inp1 + '' + inp2 + '' + inp3 + '' + inp4);
    });
});
  </script>
</body>

</html>