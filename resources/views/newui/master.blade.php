<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>گیم نت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('newui/css/easy-autocomplete.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @yield('header')
</head>

<body>
    <div class="loading w-100 h-100 ">
        <div id="loader">

        </div>
    </div>
    <div class="total-content">


        <header>
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase text-white fixed-top d-flex justify-content-between" id="mainNav">
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="mobile-header-btns ">
                    <div class="d-flex">

                        <button type="button" class="btn btn-outline-primary provinces-header-btn ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                          <span>
                          <img src="{{ asset('newui/img/place.svg') }}" alt="" width="20" height="20">
                      
                          </span>
                     <span class="pr-title-mobile">استان ها</span>
                      
                      <span class="mr-3">

                      <img src="{{ asset('newui/img/up-arrow.svg') }}" alt="" width="15" height="15">
                      
                        

                      </span>
                    </button>

                        <button type="button" class="btn btn-primary login-header-btn">ثبت نام / ورود</button>
                    </div>

                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-right ml-auto ">
                        <li class="nav-item mx-0 mx-lg-1 text-white"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="{{ route('home') }}">صفحه اصلی</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  text-white" href="{{ route('gamenets') }}">گیم نت ها</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  text-white" href="{{ route('intro') }}">معرفی</a></li>

                    </ul>
                </div>
                <div class="header-btns">
                    <div class="d-flex dropdown" id="provinces-dropdown">


                        <button type="button" class="btn btn-outline-primary provinces-header-btn ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                          <span>
                          <img src="{{ asset('newui/img/place.svg') }}" alt="" width="20" height="20">
                           
                          </span>
                          <span class="pr-title">استان ها</span>
                      <span class="mr-3">

                      <img src="{{ asset('newui/img/up-arrow.svg') }}" alt="" width="15" height="15">
                     
                      </span>
                    </button>
                        <div class="dropdown-menu  Provinces">

                        </div>





                        <a href="{{ route('register') }}"><button type="button" class="btn btn-primary login-header-btn">ثبت نام / ورود</button></a>
                    </div>
                </div>

            </nav>
        </header>
        @yield('content')
        <footer class="footer  text-center">
            <div class="row w-100 m-0 top-footer ">
                <div class="col-12 mx-auto p-0 inner-top-footer">
                    @yield('footersvg')
                </div>
            </div>

            <div class="row  w-100 p-0 m-0  justify-content-center align-items-center ">
                <div class="col-md-6 pb-0 ">
                    <div class="row  w-100 p-0 m-0 justify-content-center align-items-center">
                        <div class="col-md-12">
                            <span class="footer-location-icon">
                            <!-- <img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                              <g id="place" transform="translate(-21.886 23)">
                                <g id="Ellipse_75" data-name="Ellipse 75" transform="translate(21.886 -23)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                  <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                  <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                </g>
                                <g id="Group_300" data-name="Group 300" transform="translate(48.886)">
                                  <g id="Group_299" data-name="Group 299">
                                    <path id="Path_1667" data-name="Path 1667" d="M87.017,9A20.905,20.905,0,0,0,52.645,9a20.909,20.909,0,0,0-2.434,19.264,16.466,16.466,0,0,0,3.035,5.01L68.453,51.139a1.809,1.809,0,0,0,2.756,0l15.2-17.857a16.483,16.483,0,0,0,3.034-5A20.913,20.913,0,0,0,87.017,9ZM86.056,27.01a12.914,12.914,0,0,1-2.388,3.912l-.008.01L69.831,47.174,55.994,30.921A12.922,12.922,0,0,1,53.6,27a17.3,17.3,0,0,1,2.022-15.937,17.285,17.285,0,0,1,28.415,0A17.3,17.3,0,0,1,86.056,27.01Z" transform="translate(-48.886 0)" fill="#e80766"/>
                                  </g>
                                </g>
                                <g id="Group_302" data-name="Group 302" transform="translate(59.693 10.741)">
                                  <g id="Group_301" data-name="Group 301">
                                    <path id="Path_1668" data-name="Path 1668" d="M165.892,106.219a10.138,10.138,0,1,0,10.138,10.138A10.15,10.15,0,0,0,165.892,106.219Zm0,16.655a6.517,6.517,0,1,1,6.517-6.517A6.525,6.525,0,0,1,165.892,122.874Z" transform="translate(-155.754 -106.219)" fill="#e80766"/>
                                  </g>
                                </g>
                              </g>
                            </svg>
                        </span>

                            <p class="text-white">
                                به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                            </p>
                        </div>
                        <div class="col-6 footer-call pr-0">
                            <span class="footer-call-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                                  <g id="phone" transform="translate(32 34.888)">
                                    <g id="Ellipse_76" data-name="Ellipse 76" transform="translate(-32 -34.888)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                      <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                      <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                    </g>
                                    <path id="Path_1672" data-name="Path 1672" d="M37.293,51.889A14.456,14.456,0,0,1,32.333,51a52.888,52.888,0,0,1-19.2-12.241A52.884,52.884,0,0,1,.887,19.556,14.352,14.352,0,0,1,.154,12.5,14.718,14.718,0,0,1,7.718,1.728,14.449,14.449,0,0,1,14.636,0a1.622,1.622,0,0,1,1.585,1.282l2.545,11.877a1.622,1.622,0,0,1-.439,1.486l-4.349,4.349A42.681,42.681,0,0,0,32.9,37.91l4.349-4.349a1.622,1.622,0,0,1,1.486-.439l11.877,2.545a1.621,1.621,0,0,1,1.282,1.585,14.448,14.448,0,0,1-1.728,6.918,14.718,14.718,0,0,1-10.773,7.564,14.423,14.423,0,0,1-2.095.154ZM13.341,3.314A11.362,11.362,0,0,0,3.935,18.449,49.181,49.181,0,0,0,33.44,47.955a11.362,11.362,0,0,0,15.135-9.406l-9.662-2.07L34.372,41.02a1.621,1.621,0,0,1-1.836.321A45.913,45.913,0,0,1,10.548,19.353a1.621,1.621,0,0,1,.321-1.836l4.542-4.542Z" transform="translate(-8 -12)" fill="#e80766"/>
                                  </g>
                                </svg>
                          </span>

                            <span class="text-white mr-2">
                          09128999999
                          </span>

                        </div>
                        <div class="col-6 d-flex  text-right p-0 align-items-center">

                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                              <g id="email_2_" data-name="email (2)" transform="translate(17.4 -50.466)">
                                <g id="Ellipse_77" data-name="Ellipse 77" transform="translate(-17.4 50.466)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                  <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                  <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                </g>
                                <g id="Group_309" data-name="Group 309" transform="translate(7.327 88.636)">
                                  <g id="Group_308" data-name="Group 308" transform="translate(0 0)">
                                    <path id="Path_1674" data-name="Path 1674" d="M118.783,165.926l-10-9.433,8.883-4.066a1.31,1.31,0,0,0,.675-1.98,2.067,2.067,0,0,0-2.468-.542l-18.4,8.422-18.4-8.422a2.067,2.067,0,0,0-2.468.542,1.31,1.31,0,0,0,.675,1.98l8.883,4.066-10,9.433a1.263,1.263,0,0,0,.206,2.046,2.131,2.131,0,0,0,2.55-.165l10.443-9.85,7.218,3.3a2.2,2.2,0,0,0,1.793,0l7.218-3.3,10.443,9.85a2.131,2.131,0,0,0,2.55.165A1.263,1.263,0,0,0,118.783,165.926Z" transform="translate(-75.726 -149.716)" fill="#e80766"/>
                                  </g>
                                </g>
                                <g id="Group_311" data-name="Group 311" transform="translate(0 81)">
                                  <g id="Group_310" data-name="Group 310" transform="translate(0 0)">
                                    <path id="Path_1675" data-name="Path 1675" d="M53.033,81H5.11A4.9,4.9,0,0,0,0,85.646v26.842a4.9,4.9,0,0,0,5.11,4.646H53.033a4.9,4.9,0,0,0,5.11-4.646V85.646A4.9,4.9,0,0,0,53.033,81Zm1.7,31.487a1.633,1.633,0,0,1-1.7,1.549H5.11a1.633,1.633,0,0,1-1.7-1.549V85.646A1.633,1.633,0,0,1,5.11,84.1H53.033a1.633,1.633,0,0,1,1.7,1.549Z" transform="translate(0 -81)" fill="#e80766"/>
                                  </g>
                                </g>
                              </g>
                            </svg>
                            <span class="text-white mr-2">
                              example@gmail.com
                          </span>


                        </div>
                        <div class="col-md-12 mt-4">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                              <g id="google-plus-circular-button" opacity="0.8">
                                <g id="Group_11" data-name="Group 11">
                                  <path id="Path_64" data-name="Path 64" d="M23.173,27.438c0-2.914-1.688-4.351-3.546-5.914l-1.52-1.183a2.311,2.311,0,0,1-1.1-1.815,2.97,2.97,0,0,1,1.183-2.069c1.772-1.394,3.546-2.871,3.546-6a7.119,7.119,0,0,0-3-5.7h2.617l2.7-1.52h-8.7A11.512,11.512,0,0,0,7.8,5.562,7.591,7.591,0,0,0,5.1,11.22a6.677,6.677,0,0,0,7.008,6.63c.424,0,.886-.043,1.353-.084a3.792,3.792,0,0,0-.421,1.647,4.432,4.432,0,0,0,1.267,2.871c-1.9.127-5.447.338-8.064,1.942a6.079,6.079,0,0,0-3.252,5.153c0,3.125,2.957,6.039,9.08,6.039C19.33,35.418,23.173,31.4,23.173,27.438ZM14.094,16.67c-3.632,0-5.28-4.688-5.28-7.516A4.872,4.872,0,0,1,9.743,6.03a3.948,3.948,0,0,1,2.957-1.4c3.505,0,5.32,4.732,5.32,7.77a4.265,4.265,0,0,1-1.056,3.084A4.332,4.332,0,0,1,14.094,16.67Zm.043,16.973c-4.518,0-7.432-2.152-7.432-5.15s2.7-4.011,3.632-4.348a16.928,16.928,0,0,1,4.434-.678,6.679,6.679,0,0,1,.97.043c3.211,2.279,4.6,3.419,4.6,5.574C20.343,31.7,18.19,33.644,14.137,33.644Z" transform="translate(10.723 11.614)" fill="#fff"/>
                                  <path id="Path_65" data-name="Path 65" d="M7.476,12.088h4.572v4.569h2.285V12.088H18.9V9.8h-4.57V5.234H12.049V9.8H7.476Z" transform="translate(26.8 18.761)" fill="#fff"/>
                                  <path id="Path_66" data-name="Path 66" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" fill="#fff"/>
                                </g>
                              </g>
                            </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                              <g id="pinterest-social-visual-website-logotype" opacity="0.8">
                                <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
                                  <path id="Path_62" data-name="Path 62" d="M30.909,14.641c0-6.16-5.112-11.9-12.879-11.9-9.668,0-14.54,7.076-14.54,12.977,0,3.573,1.323,6.752,4.167,7.934a.7.7,0,0,0,1.018-.519c.092-.365.316-1.285.413-1.666A1.022,1.022,0,0,0,8.8,20.309a6.073,6.073,0,0,1-1.342-4.075A9.735,9.735,0,0,1,17.471,6.287c5.463,0,8.467,3.408,8.467,7.959,0,5.99-2.6,11.043-6.452,11.043a3.194,3.194,0,0,1-3.211-4c.61-2.63,1.8-5.472,1.8-7.37,0-1.7-.894-3.119-2.744-3.119-2.177,0-3.924,2.3-3.924,5.377a8.107,8.107,0,0,0,.651,3.287S9.825,29.1,9.436,30.782a18.528,18.528,0,0,0-.359,4.651c.149,1.28,1.388,2.323,2.463.918A17.412,17.412,0,0,0,13.531,32c.251-.924,1.431-5.709,1.431-5.709a5.8,5.8,0,0,0,4.972,2.59C26.472,28.876,30.909,22.788,30.909,14.641Z" transform="translate(12.509 9.827)" fill="#fff"/>
                                  <path id="Path_63" data-name="Path 63" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" transform="translate(0 0)" fill="#fff"/>
                                </g>
                              </g>
                            </svg></a>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                                  <g id="twitter-circular-button" opacity="0.8">
                                    <g id="Group_9" data-name="Group 9">
                                      <path id="Path_60" data-name="Path 60" d="M31.724,11.295c0-.3-.005-.6-.019-.891a13.494,13.494,0,0,0,3.276-3.522,12.577,12.577,0,0,1-3.77,1.032A6.737,6.737,0,0,0,34.1,4.143,12.606,12.606,0,0,1,29.93,5.75a6.53,6.53,0,0,0-4.791-2.26,6.632,6.632,0,0,0-6.563,6.841,7.294,7.294,0,0,0,.17,1.585A18.482,18.482,0,0,1,5.217,4.44a7.268,7.268,0,0,0-.888,3.511,7.229,7.229,0,0,0,2.919,5.866,6.282,6.282,0,0,1-2.973-.91V13A6.972,6.972,0,0,0,9.54,19.9a6.216,6.216,0,0,1-1.728.235A6,6,0,0,1,6.578,20a6.671,6.671,0,0,0,6.13,4.885,12.668,12.668,0,0,1-8.151,2.968,12.5,12.5,0,0,1-1.566-.1,17.707,17.707,0,0,0,10.063,3.154C25.123,30.915,31.724,20.409,31.724,11.295Z" transform="translate(10.722 12.506)" fill="#fff"/>
                                      <path id="Path_61" data-name="Path 61" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" fill="#fff"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>

                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" id="facebook-logo-in-circular-button-outlined-social-symbol" width="40" height="40" viewBox="0 0 63.631 63.631">
                              <g id="Group_8" data-name="Group 8">
                                <path id="Path_58" data-name="Path 58" d="M63.631,31.815A31.815,31.815,0,1,0,31.815,63.631,31.816,31.816,0,0,0,63.631,31.815Zm-60.738,0A28.923,28.923,0,1,1,31.815,60.738,28.922,28.922,0,0,1,2.892,31.815Z" fill="#fff"/>
                                <path id="Path_59" data-name="Path 59" d="M14.5,39.427V21.064h6.059l.957-6.085H14.5V11.927c0-1.588.521-3.1,2.8-3.1h4.555V2.75H15.392c-5.438,0-6.921,3.581-6.921,8.544v3.682H4.74v6.088H8.471V39.427Z" transform="translate(18.532 10.752)" fill="#fff"/>
                              </g>
                            </svg></a>
                        </div>
                        <div class="col-6 text-left">
                            <a>
                                <img src="{{ asset('newui/img/Group313.svg')}}" alt="" width="130" height="130">

                            </a>
                        </div>
                        <div class="col-6 p-0 text-right">
                            <a>
                                <img src="{{ asset('newui/img/Group314.svg')}}" alt="" width="130" height="130">


                            </a>

                        </div>
                    </div>
                </div>
            </div>


        </footer>
    </div>
    <script>
        $(window).on('load', function() {

            $('.loading').css('display', 'none');
        });
    </script>
    <script>
        var urlprovinces = '{{ asset('
        js / Provinces.json ') }}';
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('newui/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('js/ui.js')}}" defer></script>
    <script src="{{ asset('ui/js/scripts.js')}}"></script>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('newui/js/jquery.easy-autocomplete.min.js')}}"></script>


    <script>
        var options = {

            url: "{{ route('search') }}",

            categories: [{
                listLocation: "gamenets",
                maxNumberOfElements: 5,
                header: "گیم نت ها"
            }, {
                listLocation: "games",
                maxNumberOfElements: 3,
                header: "بازی ها"
            }, {
                listLocation: "emkanat",
                maxNumberOfElements: 3,
                header: "امکانات"
            }],


            getValue: function(element) {
                return element.title;
            },

            list: {
                maxNumberOfElements: 8,
                match: {
                    enabled: true
                },
                sort: {
                    enabled: true
                },
                onSelectItemEvent: function() {
                    // when hover item
                },
                onHideListEvent: function() {
                    $('.searchbar').css('border-bottom-right-radius', '30px');
                },
                onShowListEvent: function() {
                    $('.searchbar').css('border-bottom-right-radius', '0px');
                }
            },
            template: {
                type: "links",
                fields: {
                    link: "link"
                }
            },


            theme: "square"
        };

        $(".search_input").easyAutocomplete(options);
    </script>

</body>

</html>