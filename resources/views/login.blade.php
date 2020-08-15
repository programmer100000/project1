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
                                <form class="login-form">
                                    <h1 class="text-white text-center">ورود کاربر</h1>
                                    <div class="my-4 login-input">
                                        <span class="ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 47 49">
                                                <defs>
                                                  <clipPath id="clip-Artboard_3">
                                                    <rect width="47" height="49"/>
                                                  </clipPath>
                                                </defs>
                                                <g id="Artboard_3" data-name="Artboard – 3" clip-path="url(#clip-Artboard_3)">
                                                  <g id="User_Icon" data-name="User Icon">
                                                    <rect id="UI_Dark_Icons_Person_background" data-name="UI/Dark/Icons/Person background" width="49" height="49" fill="none"/>
                                                    <g id="Person_Icon" data-name="Person Icon">
                                                      <rect id="bg" width="49" height="49" fill="none"/>
                                                      <g id="ico" transform="translate(8.167 6.125)">
                                                        <path id="Path" d="M32.667,12.25V8.167A8.167,8.167,0,0,0,24.5,0H8.167A8.167,8.167,0,0,0,0,8.167V12.25" transform="translate(0 24.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                                        <ellipse id="Oval" cx="8.5" cy="8" rx="8.5" ry="8" transform="translate(7.833 -0.125)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                                      </g>
                                                    </g>
                                                  </g>
                                                </g>
                                              </svg>
                                              
                                        </span>
                                        <input type="text" class="form-control p-0 " id="username" placeholder="نام کاربری" name="name">
                                    </div>


                                    <div class="my-4 login-input">
                                        <span class="ml-1">
                                            <svg id="Number_Icon" data-name="Number Icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 49 49">
                                                <rect id="UI_Dark_Icons_Number_background" data-name="UI/Dark/Icons/Number background" width="49" height="49" fill="none"/>
                                                <g id="Number_Icon-2" data-name="Number Icon">
                                                  <rect id="bg" width="49" height="49" fill="none"/>
                                                  <g id="ico" transform="translate(8.167 22.458)">
                                                    <circle id="Oval" cx="2.5" cy="2.5" r="2.5" transform="translate(13.833 -0.458)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                                    <ellipse id="Oval-2" data-name="Oval" cx="2" cy="2.5" rx="2" ry="2.5" transform="translate(28.833 -0.458)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                                    <ellipse id="Oval-3" data-name="Oval" cx="2" cy="2.5" rx="2" ry="2.5" transform="translate(-0.167 -0.458)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                                  </g>
                                                </g>
                                              </svg>
                                        </span>
                                        <input type="text" class="form-control p-0 " id="password" placeholder="رمز ورود" name="password">
                                    </div>
                                    <a>
                                        <p class="forget-text text-center">
                                            رمزم را فراموش کردم!
                                        </p>
                                    </a>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary main-form-btn px-5 py-2">ارسال</button>
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
                                    ثبت نام
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
</body>

</html>