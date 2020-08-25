@extends('newui.master') @section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('/ui/css/star-rating-svg.css') }}"> @endsection @section('content')
<div class=" content">
    <div class="row w-100 m-0 p-0 slider-secttion">
        <div class="inner-slider col d-flex justify-content-center align-items-center ">

            <div class="row w-100 p-0 m-0 justify-content-center ">
                <div class=" col-8 col-md-4 p-0    typeahead__container " dir="rtl">
                    <div class="typeahead__field searchbar d-flex justify-content-center align-items-center" dir="rtl">
                    <input class="search_input js-typeahead-country_v1 border-0" type="text" name="" placeholder="جستجو...">
                    <a href="#" class="search_icon d-flex justify-content-center text-white align-items-center typeahead__button"><i class="fa fa-search"></i></a>
                    </div>

                </div>
            </div>

        </div>
        <div class="row w-100 m-0 plan-header main-page-plan-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="774" viewBox="0 0 1944 774">
            <path id="Path_1645" width="100%"  data-name="Path 1645" d="M0,0S331.681,322,1007.612,279.333,1944,0,1944,0V774s-450.388-182-936.388-182S0,774,0,774Z" fill="#231553"/>
          </svg>
            <div class="col-12 inner-plan-header mx-auto p-0 position-absolute ">
                <div class="title text-center">
                    <img src="{{ asset('newui/img/title.png')}}" alt="" class=" plan-header-img ">
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0 mb-5 p-0 plan-secttion">

        <div class="row plan-body w-100  m-0  justify-content-center">
            <div class="col-md-8 d-flex justify-content-center p-0">
                <div class="row w-100 p-4 m-0 justify-content-center">
                    <div class="col-lg mx-lg-3 mx-0 my-5 my-lg-0   d-flex align-items-stretch p-0 justify-content-center">
                        <div class="plan first-plan d-block text-center">
                            <div class="header">
                                <img src="{{ asset('newui/img/khorshid.svg')}}" alt="">
                                <h3 class="text-white">خورشید</h3>
                            </div>
                            <div class="row m-0 plan-item ">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_312" data-name="Group 312" transform="translate(-341.389 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.889 642)" fill="none" stroke="#f8bc53" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#f8bc53"/>
                  </g>
                </svg>
                                </div>
                                <div class="col-10 m-0 p-0 text-right text-white text-info-plan">
                                    یک ماهه
                                </div>
                            </div>
                            <div class="row m-0 plan-item ">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_312" data-name="Group 312" transform="translate(-341.389 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.889 642)" fill="none" stroke="#f8bc53" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#f8bc53"/>
                  </g>
                </svg>
                                </div>
                                <div class="col-10 m-0 p-0 text-right text-white text-info-plan">
                                    گزارش روزانه، هفتگی و ماهیانه
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_312" data-name="Group 312" transform="translate(-341.389 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.889 642)" fill="none" stroke="#f8bc53" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#f8bc53"/>
                  </g>
                </svg>
                                </div>
                                <div class="col-10 m-0 p-0 text-right text-white text-info-plan">
                                    گزارش بوفه و خدمات
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_312" data-name="Group 312" transform="translate(-341.389 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.889 642)" fill="none" stroke="#f8bc53" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#f8bc53"/>
                  </g>
                </svg>
                                </div>
                                <div class="col-10 m-0 p-0 text-right text-white text-info-plan">
                                    ثبت دستگاه ها
                                </div>
                            </div>
                            <div class="row m-0 p-0 justify-content-center">
                            <a type="button" class=" plan-btn khorshid" href="{{ route('admin.register') }}/#plan1">خرید</a>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg mx-lg-3 mx-0 my-5 my-lg-0 p-0 d-flex align-items-stretch justify-content-center">
                        <div class="plan d-block text-center">
                            <div class="header">
                                <img src="{{ asset('newui/img/svg2.svg')}}" alt="">
                                <h3 class="text-white">الماس</h3>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_313" data-name="Group 313" transform="translate(-341.444 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.944 642)" fill="none" stroke="#3897ec" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#3899ee"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    شش ماهه
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_313" data-name="Group 313" transform="translate(-341.444 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.944 642)" fill="none" stroke="#3897ec" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#3899ee"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    گزارش روزانه، هفتگی و ماهیانه
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_313" data-name="Group 313" transform="translate(-341.444 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.944 642)" fill="none" stroke="#3897ec" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#3899ee"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    گزارش بوفه و خدمات
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_313" data-name="Group 313" transform="translate(-341.444 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.944 642)" fill="none" stroke="#3897ec" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#3899ee"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    ثبت دستگاه ها
                                </div>


                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_313" data-name="Group 313" transform="translate(-341.444 -640.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(342.944 642)" fill="none" stroke="#3897ec" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 649.548) rotate(45)" fill="#3899ee"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    کمپین مسابقات
                                </div>


                            </div>
                            <div class="row m-0 p-0 justify-content-center">

                                <a type="button" class=" plan-btn almas" href="{{ route('admin.register') }}/#plan2">خرید</a>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg mx-lg-3 mx-0 my-5 my-lg-0 p-0 d-flex align-items-stretch justify-content-center">
                        <div class="plan d-block text-center">
                            <div class="header">
                                <img src="{{ asset('newui/img/kahkeshan.svg')}}" alt="">
                                <h3 class="text-white">کهکشان</h3>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    دوازده ماهه
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    گزارش روزانه، هفتگی و ماهیانه
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    گزارش بوفه و خدمات
                                </div>
                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    ثبت دستگاه ها
                                </div>


                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    کمپین مسابقات
                                </div>


                            </div>
                            <div class="row m-0 plan-item">
                                <div class="col-2 m-0 p-0 icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                  <g id="Group_314" data-name="Group 314" transform="translate(-341.5 -432.5)">
                    <circle id="Oval" cx="20.5" cy="20.5" r="20.5" transform="translate(343 434)" fill="none" stroke="#c454fa" stroke-miterlimit="10" stroke-width="3"/>
                    <path id="Combined_Shape" data-name="Combined Shape" d="M10.236,17.742H2.048a2.047,2.047,0,1,1,0-4.094H8.188V2.048a2.048,2.048,0,1,1,4.1,0V15.694a2.047,2.047,0,0,1-2.047,2.048Z" transform="translate(366.321 441.627) rotate(45)" fill="#8f4eab"/>
                  </g>
                </svg>

                                </div>
                                <div class="col-10 text-right m-0 p-0 text-white text-info-plan">
                                    ارائه تیزر تبلیغاتی
                                </div>


                            </div>
                            <div class="row m-0 p-0 justify-content-center">

                                <a type="button" class=" plan-btn kahkeshan" href="{{ route('admin.register') }}/#plan3">خرید</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="row w-100 m-0 mb-5 p-0 popular-secttion">
        <div class="row popular-header w-100 m-0 p-0 mx-auto ">
            <div class="title text-center mx-auto">
                <img src="{{ asset('newui/img/bestgamenet.png')}}" alt="" class="title-img">
            </div>
        </div>

        <div class="row w-100 p-4 m-0  justify-content-center">
            <div class="col-md-8 p-0">
                <a href="/gamenet/{{ $best_gamenet->gamenet_id }}/{{$best_gamenet->title}}">
                    <div class="row w-100 p-3 m-0 popular justify-content-center ">
                        <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center ">

                        <h1 class="text-white text-right mb-4 align-self-start">{{ $best_gamenet->title}} </h1>
                            <div class="mb-3 d-flex text-right align-self-start">
                                <input type="hidden" class="rate-input">
                                <span class="text-white">امتیاز: </span>
                                <div class="stars text-left float-left m-0 p-0 w-75" data-rate = {{ $best_gamenet->rate }}>

                                </div>
                            </div>
                            <div class="d-flex mb-4 text-right ">
                                <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.715 67.879">

                          <g id="pin" transform="translate(-60.962 0)">
                              <g id="Group_263" data-name="Group 263" transform="translate(60.962 0)">
                                <g id="Group_262" data-name="Group 262" transform="translate(0 0)">
                                  <path id="Path_1503" data-name="Path 1503" d="M111.419,17.644A25.193,25.193,0,0,0,95.014,1.237,26.385,26.385,0,0,0,71.491,5.006,25.976,25.976,0,0,0,60.962,25.833a25.636,25.636,0,0,0,5.162,15.5l20.7,26.543,20.7-26.545A26.14,26.14,0,0,0,111.419,17.644Zm-24.6,22.113a13.925,13.925,0,1,1,13.925-13.925A13.941,13.941,0,0,1,86.822,39.757Z" transform="translate(-60.962 0)" fill="#e80766"/>
                                </g>
                              </g>
                              <g id="Group_265" data-name="Group 265" transform="translate(76.876 15.913)">
                                <g id="Group_264" data-name="Group 264">
                                  <path id="Path_1504" data-name="Path 1504" d="M190.944,120.027a9.933,9.933,0,1,0,9.946,9.92A9.935,9.935,0,0,0,190.944,120.027Z" transform="translate(-180.998 -120.027)" fill="#e80766"/>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </span>

                    <span class="text-white  text-justify ">{{ $best_gamenet->description }}</span>
                            </div>
                            <div class="row justify-content-center">
                                @if (Auth::check())
                                @php
                                $user = Auth::user();
                                $fav = App\favourite::where([['user_id' , $user->user_id] , ['gnet_id' , $best_gamenet->gamenet_id]])->first();
                            @endphp

                            @if ($fav == null)
                            <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                            data-url = {{ route('add.favourite')}} data-gnet-id = {{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>
                            @else
                            <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                             data-url = {{ route('add.favourite')}} data-gnet-id = {{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال شده</button>
                            @endif
                            @else
                            <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                            data-url = {{ route('add.favourite')}} data-gnet-id = {{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>
                                @endif

                                </div>

                        </div>
                        <div class="col-lg-7 my-2 popular-img" style="background-image: url({{ $best_gamenet->gamenet_image }})">
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="row w-100 m-0 mb-5 p-0 introduce-secttion">
        <div class="row introduce-header w-100 m-0 p-0">
            <div class="title text-center mx-auto">
                <img src="{{ asset('newui/img/introgamenet.png')}}" alt="" class="title-img">
            </div>
        </div>
        <div class="row introduce-body w-100 p-4 pt-4 m-0  justify-content-center">
            <div class="col-md-8 col-lg-3 col-md-8 p-0 m-3">
            <a href="/gamenet/{{ $gamenets_active[0]->gamenet_id }}/{{ $gamenets_active[0]->title}}">
                <div class="row w-100 p-3 m-0  introduce ">
                <div class="col-12 introduce1-img " style="background-image:url({{ $gamenets_active[0]->gamenet_image }})">
                    </div>
                    <div class="col-12 d-flex flex-column align-items-center justify-content-center  introduce1-data">

                    <h1 class="text-white text-right my-4 align-self-start">{{ $gamenets_active[0]->title }}</h1>
                        <div class="mb-3 d-flex text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                            <input type="hidden" class="rate-input" value="">
                        <div class="stars text-left float-left m-0 p-0 w-75" data-rate="{{$gamenets_active[0]->rate }}">

                            </div>
                        </div>
                        <div class="d-flex mb-4 text-right ">
                            <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.715 67.879">
                    <g id="pin" transform="translate(-60.962 0)">
                        <g id="Group_263" data-name="Group 263" transform="translate(60.962 0)">
                          <g id="Group_262" data-name="Group 262" transform="translate(0 0)">
                            <path id="Path_1503" data-name="Path 1503" d="M111.419,17.644A25.193,25.193,0,0,0,95.014,1.237,26.385,26.385,0,0,0,71.491,5.006,25.976,25.976,0,0,0,60.962,25.833a25.636,25.636,0,0,0,5.162,15.5l20.7,26.543,20.7-26.545A26.14,26.14,0,0,0,111.419,17.644Zm-24.6,22.113a13.925,13.925,0,1,1,13.925-13.925A13.941,13.941,0,0,1,86.822,39.757Z" transform="translate(-60.962 0)" fill="#e80766"/>
                          </g>
                        </g>
                        <g id="Group_265" data-name="Group 265" transform="translate(76.876 15.913)">
                          <g id="Group_264" data-name="Group 264">
                            <path id="Path_1504" data-name="Path 1504" d="M190.944,120.027a9.933,9.933,0,1,0,9.946,9.92A9.935,9.935,0,0,0,190.944,120.027Z" transform="translate(-180.998 -120.027)" fill="#e80766"/>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>


                <span class="text-white text-justify ">{{ $gamenets_active[0]->address }}<br /> {{ $gamenets_active[0]->description }}</span>
                        </div>
                        <div class="row justify-content-center">
                            @if (Auth::check())
                            @php
                            $user = Auth::user();
                            $fav = App\favourite::where([['user_id' , $user->user_id] , ['gnet_id' , $best_gamenet->gamenet_id]])->first();
                        @endphp

                        @if ($fav == null)
                        <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                        data-url = {{ route('add.favourite')}} data-gnet-id = {{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>
                        @else
                        <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                         data-url = {{ route('add.favourite')}} data-gnet-id = {{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال شده</button>
                        @endif
                        @else
                        <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                        data-url = {{ route('add.favourite')}} data-gnet-id = {{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>
                            @endif

                        </div>

                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-8 col-lg-5 p-0 m-3">
            <a href="gamenet/{{ $gamenets_active[1]->gamenet_id }}/{{ $gamenets_active[1]->title }}"></a>
                <div class="row w-100 p-3 m-0  introduce introduce1 ">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center  introduce2-data">

                    <h1 class="text-white text-right my-4 align-self-start">{{ $gamenets_active[1]->title }}</h1>
                        <div class="mb-3 d-flex text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                            <div class="stars text-left float-left m-0 p-0 w-75">
                                <div class="my-rating" dir="ltr" data-toggle="modal" href="#rate-modal"></div>
                            </div>
                        </div>
                        <div class="d-flex mb-4 text-right ">
                            <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.715 67.879">


                          <g id="pin" transform="translate(-60.962 0)">
                              <g id="Group_263" data-name="Group 263" transform="translate(60.962 0)">
                                <g id="Group_262" data-name="Group 262" transform="translate(0 0)">
                                  <path id="Path_1503" data-name="Path 1503" d="M111.419,17.644A25.193,25.193,0,0,0,95.014,1.237,26.385,26.385,0,0,0,71.491,5.006,25.976,25.976,0,0,0,60.962,25.833a25.636,25.636,0,0,0,5.162,15.5l20.7,26.543,20.7-26.545A26.14,26.14,0,0,0,111.419,17.644Zm-24.6,22.113a13.925,13.925,0,1,1,13.925-13.925A13.941,13.941,0,0,1,86.822,39.757Z" transform="translate(-60.962 0)" fill="#e80766"/>
                                </g>
                              </g>
                              <g id="Group_265" data-name="Group 265" transform="translate(76.876 15.913)">
                                <g id="Group_264" data-name="Group 264">
                                  <path id="Path_1504" data-name="Path 1504" d="M190.944,120.027a9.933,9.933,0,1,0,9.946,9.92A9.935,9.935,0,0,0,190.944,120.027Z" transform="translate(-180.998 -120.027)" fill="#e80766"/>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </span>


                            <span class="text-white text-justify">به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</span>
                        </div>
                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-primary main-form-btn px-4">دنبال کردن</button>
                        </div>
                    </div>

                    <div class="col-lg-6 introduce2-img">
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-8 col-lg-5 p-0 m-3">
                <div class="row w-100 p-3 m-0  introduce introduce1">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center  introduce2-data">

                        <h1 class="text-white text-right my-4 align-self-start">گیمنت ایرانیان</h1>
                        <div class="mb-3 text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                        </div>
                        <div class="d-flex mb-4 text-right ">
                            <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.715 67.879">
                      <g id="pin" transform="translate(-60.962 0)">
                          <g id="Group_263" data-name="Group 263" transform="translate(60.962 0)">
                            <g id="Group_262" data-name="Group 262" transform="translate(0 0)">
                              <path id="Path_1503" data-name="Path 1503" d="M111.419,17.644A25.193,25.193,0,0,0,95.014,1.237,26.385,26.385,0,0,0,71.491,5.006,25.976,25.976,0,0,0,60.962,25.833a25.636,25.636,0,0,0,5.162,15.5l20.7,26.543,20.7-26.545A26.14,26.14,0,0,0,111.419,17.644Zm-24.6,22.113a13.925,13.925,0,1,1,13.925-13.925A13.941,13.941,0,0,1,86.822,39.757Z" transform="translate(-60.962 0)" fill="#e80766"/>

                            </g>
                            <g id="Group_265" data-name="Group 265" transform="translate(76.876 15.913)">
                              <g id="Group_264" data-name="Group 264">
                                <path id="Path_1504" data-name="Path 1504" d="M190.944,120.027a9.933,9.933,0,1,0,9.946,9.92A9.935,9.935,0,0,0,190.944,120.027Z" transform="translate(-180.998 -120.027)" fill="#e80766"/>
                              </g>
                            </g>
                          </g>

                        </g>
                      </svg>
                    </span>
                            <span class="text-white text-justify">به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</span>
                        </div>
                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-primary main-form-btn px-4">دنبال کردن</button>
                        </div>
                    </div>
                    <div class="col-lg-6 introduce2-img">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-3 p-0 m-3">
                <div class="row w-100 p-3 m-0 introduce ">
                    <div class="col-12 introduce1-img ">
                    </div>
                    <div class="col-12 d-flex flex-column align-items-center justify-content-center  introduce1-data ">

                        <h1 class="text-white text-right my-4 align-self-start">گیمنت آرشام</h1>
                        <div class="mb-3 text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                        </div>
                        <div class="d-flex mb-4 text-right ">
                            <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.715 67.879">
                      <g id="pin" transform="translate(-60.962 0)">
                          <g id="Group_263" data-name="Group 263" transform="translate(60.962 0)">
                            <g id="Group_262" data-name="Group 262" transform="translate(0 0)">
                              <path id="Path_1503" data-name="Path 1503" d="M111.419,17.644A25.193,25.193,0,0,0,95.014,1.237,26.385,26.385,0,0,0,71.491,5.006,25.976,25.976,0,0,0,60.962,25.833a25.636,25.636,0,0,0,5.162,15.5l20.7,26.543,20.7-26.545A26.14,26.14,0,0,0,111.419,17.644Zm-24.6,22.113a13.925,13.925,0,1,1,13.925-13.925A13.941,13.941,0,0,1,86.822,39.757Z" transform="translate(-60.962 0)" fill="#e80766"/>
                            </g>
                          </g>
                          <g id="Group_265" data-name="Group 265" transform="translate(76.876 15.913)">
                            <g id="Group_264" data-name="Group 264">
                              <path id="Path_1504" data-name="Path 1504" d="M190.944,120.027a9.933,9.933,0,1,0,9.946,9.92A9.935,9.935,0,0,0,190.944,120.027Z" transform="translate(-180.998 -120.027)" fill="#e80766"/>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </span>
                            <span class="text-white text-justify">به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</span>
                        </div>
                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-primary main-form-btn px-4">دنبال کردن</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0 mb-5 p-0 about-secttion">
        <div class="row about-header w-100 m-0 mb-5 p-0">
            <div class="title text-center mx-auto">
                <img src="{{ asset('newui/img/about.png')}}" alt="" class="title-img">
            </div>
        </div>
        <div class="row about-body w-100 p-4 pt-4 m-0  ">
            <div class="col-md-7 p-4  about top-about ">
                <h2 class="text-white text-right mb-4">
                    معرفی ما
                </h2>
                <div class=" text-justify text-white">
                    به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع
                    و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند
                </div>
            </div>
            <div class="col-md-7 p-4  about bottom-about ">
                <h2 class="text-white text-right mb-4">
                    اهداف ما
                </h2>
                <div class="text-right mb-4">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 113 113">
                      <defs>
                        <clipPath id="clip-Artboard_3">
                          <rect width="113" height="113"/>
                        </clipPath>
                      </defs>
                      <g id="Artboard_3" data-name="Artboard – 3" clip-path="url(#clip-Artboard_3)">
                        <g id="podium" transform="matrix(1, -0.017, 0.017, 1, 20.547, 8.387)">
                          <circle id="Ellipse_72" data-name="Ellipse 72" cx="55.5" cy="55.5" r="55.5" transform="translate(-20.182 -7.123)" fill="#3d2d77"/>
                          <g id="Group_298" data-name="Group 298" transform="translate(0 0)">
                            <path id="Path_1646" data-name="Path 1646" d="M103.5,265.172H85.389v-8.231A4.944,4.944,0,0,0,80.451,252H63.988a4.944,4.944,0,0,0-4.939,4.939v1.646H40.941A4.944,4.944,0,0,0,36,263.526v29.633a1.646,1.646,0,0,0,1.646,1.646h69.142a1.646,1.646,0,0,0,1.646-1.646V270.111A4.944,4.944,0,0,0,103.5,265.172Zm-21.4,26.34H62.342V287.4a1.646,1.646,0,0,0-3.292,0v4.116H39.295V263.526a1.648,1.648,0,0,1,1.646-1.646H59.049v10.7a1.646,1.646,0,0,0,3.292,0V256.941a1.648,1.648,0,0,1,1.646-1.646H80.451a1.648,1.648,0,0,1,1.646,1.646Zm23.047,0H85.389V268.465H103.5a1.648,1.648,0,0,1,1.646,1.646Z" transform="translate(-36.002 -210.516)" fill="#afa2e0"/>
                            <path id="Path_1647" data-name="Path 1647" d="M375.059,376.942a4.92,4.92,0,0,0-8.664-3.211,1.646,1.646,0,1,0,2.5,2.138,1.638,1.638,0,1,1,2.375,2.252,1.646,1.646,0,0,0,.229,2.534,2.473,2.473,0,0,1-1.368,4.519,2.414,2.414,0,0,1-1.485-.5,1.646,1.646,0,1,0-2.008,2.61,5.679,5.679,0,0,0,3.492,1.188,5.766,5.766,0,0,0,4.45-9.4A4.932,4.932,0,0,0,375.059,376.942Z" transform="translate(-311.675 -310.762)" fill="#afa2e0"/>
                            <path id="Path_1648" data-name="Path 1648" d="M94.234,345.158H90.267c.363-.333.817-.69,1.347-1.1,1.883-1.453,4.226-3.261,4.266-6.666a5.275,5.275,0,0,0-3.89-5.253,4.79,4.79,0,0,0-5.509,2.572,1.646,1.646,0,0,0,2.909,1.543,1.5,1.5,0,0,1,1.786-.924,1.966,1.966,0,0,1,1.411,2.024c-.02,1.689-1.141,2.675-2.985,4.1-1.687,1.3-3.6,2.778-3.6,5.352a1.646,1.646,0,0,0,1.646,1.646h6.584a1.646,1.646,0,0,0,0-3.293Z" transform="translate(-77.772 -277.332)" fill="#afa2e0"/>
                            <path id="Path_1649" data-name="Path 1649" d="M240.21,305.173h-.179V293.649a1.646,1.646,0,0,0-2.469-1.426l-1.825,1.054a1.646,1.646,0,0,0,1,3.063v8.833h-.179a1.646,1.646,0,1,0,0,3.292h3.65a1.646,1.646,0,1,0,0-3.292Z" transform="translate(-202.168 -243.932)" fill="#afa2e0"/>
                            <path id="Path_1650" data-name="Path 1650" d="M159.914,40.919l-.825,6.292a4.226,4.226,0,0,0,.356,2.661,4.266,4.266,0,0,0,5.7,1.968l5.787-2.817,5.946,2.833a4.265,4.265,0,0,0,6.057-4.437l-.892-6.381,4.393-4.634a4.266,4.266,0,0,0-2.215-7.28L177.881,28l-3.144-5.783h0a4.258,4.258,0,0,0-7.5.033l-3.028,5.684-6.37,1.184a4.261,4.261,0,0,0-2.4,7.163Zm-2.075-8.292a.96.96,0,0,1,.525-.26l.056-.009,7.174-1.333a1.646,1.646,0,0,0,1.152-.845l3.4-6.383a.965.965,0,0,1,1.7-.008l3.522,6.479a1.646,1.646,0,0,0,1.159.835l7.126,1.262a.973.973,0,0,1,.5,1.669q-.037.034-.072.071l-4.969,5.241a1.646,1.646,0,0,0-.436,1.36l1,7.164a.976.976,0,0,1-1.378,1.012l-6.663-3.174a1.646,1.646,0,0,0-1.428.006l-6.5,3.164a.974.974,0,0,1-1.3-.449.963.963,0,0,1-.079-.621q.012-.059.02-.118l.935-7.131a1.646,1.646,0,0,0-.447-1.357L157.813,34a.968.968,0,0,1,.026-1.368Z" transform="translate(-134.783 -16.701)" fill="#e80766"/>
                            <path id="Path_1651" data-name="Path 1651" d="M95.324,3.072l6.5,3.752a1.646,1.646,0,0,0,1.646-2.851L96.97.221a1.646,1.646,0,1,0-1.646,2.851Z" transform="translate(-84.87 0)" fill="#afa2e0"/>
                            <path id="Path_1652" data-name="Path 1652" d="M62.3,116.356a1.688,1.688,0,0,0,.239-.017l7.425-1.08A1.646,1.646,0,0,0,69.491,112l-7.425,1.08a1.646,1.646,0,0,0,.235,3.276Z" transform="translate(-56.598 -93.548)" fill="#afa2e0"/>
                            <path id="Path_1653" data-name="Path 1653" d="M109.983,196.95l-5.306,5.306a1.646,1.646,0,1,0,2.328,2.328l5.306-5.306a1.646,1.646,0,0,0-2.328-2.328Z" transform="translate(-92.969 -164.124)" fill="#afa2e0"/>
                            <path id="Path_1654" data-name="Path 1654" d="M359.675,7.045a1.64,1.64,0,0,0,.822-.221L367,3.072A1.646,1.646,0,1,0,365.349.221l-6.5,3.752a1.646,1.646,0,0,0,.825,3.072Z" transform="translate(-305.014 0)" fill="#afa2e0"/>
                            <path id="Path_1655" data-name="Path 1655" d="M386.257,113.392a1.646,1.646,0,0,0,1.392,1.866l7.425,1.08a1.646,1.646,0,0,0,.474-3.258L388.123,112a1.647,1.647,0,0,0-1.866,1.392Z" transform="translate(-328.582 -93.547)" fill="#afa2e0"/>
                            <path id="Path_1656" data-name="Path 1656" d="M356.06,196.95a1.647,1.647,0,0,0,0,2.328l5.306,5.306a1.646,1.646,0,1,0,2.328-2.328l-5.306-5.306A1.646,1.646,0,0,0,356.06,196.95Z" transform="translate(-302.968 -164.125)" fill="#afa2e0"/>
                            <path id="Path_1657" data-name="Path 1657" d="M177.648,412a1.646,1.646,0,1,0,1.646,1.647h0A1.646,1.646,0,0,0,177.648,412Z" transform="translate(-152.955 -344.175)" fill="#afa2e0"/>
                          </g>
                        </g>
                      </g>
                    </svg>
                </span>
                    <span class="text-white mb-4">معرفی برترین گیم نت</span>
                </div>
                <div class="text-right">
                    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 115 116">
                    <defs>
                      <clipPath id="clip-Artboard_4">
                        <rect width="115" height="116"/>
                      </clipPath>
                    </defs>
                    <g id="Artboard_4" data-name="Artboard – 4" clip-path="url(#clip-Artboard_4)">
                      <g id="game-controller" transform="matrix(1, -0.017, 0.017, 1, 8.527, 15.659)">
                        <ellipse id="Ellipse_70" data-name="Ellipse 70" cx="57.36" cy="57.36" rx="57.36" ry="57.36" transform="translate(-8.589 -14.11)" fill="#3d2d77"/>
                        <path id="Path_1658" data-name="Path 1658" d="M87.361,28.5a22.035,22.035,0,0,0-16-6.8h-23.2V15.65a5.745,5.745,0,0,0-5.738-5.738H38.511A3,3,0,0,1,35.519,6.92V1.373a1.373,1.373,0,1,0-2.746,0V6.92a5.745,5.745,0,0,0,5.738,5.738h3.913a3,3,0,0,1,2.992,2.992V21.7H32.064a1.373,1.373,0,1,0,0,2.746h39.3A19.472,19.472,0,0,1,72.1,63.372,15.4,15.4,0,0,0,56.334,56.3c-.373-.453-.73-.924-1.06-1.407a4.146,4.146,0,0,0-3.417-1.819H41.718a4.127,4.127,0,0,0-3.407,1.807A19.473,19.473,0,1,1,22.444,24.443h2.68a1.373,1.373,0,0,0,0-2.746h-2.68A22.373,22.373,0,0,0,0,43.836,22.219,22.219,0,0,0,40.579,56.427a1.383,1.383,0,0,1,1.14-.61H51.858a1.4,1.4,0,0,1,1.15.623c.149.218.3.433.461.646a15.44,15.44,0,1,0,13.6,27.578,1.373,1.373,0,1,0-1.44-2.338,12.689,12.689,0,1,1,4.236-4.277,1.373,1.373,0,0,0,2.352,1.417,15.434,15.434,0,0,0,1.2-13.427A22.219,22.219,0,0,0,87.361,28.5Z" transform="translate(0)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1659" data-name="Path 1659" d="M4.767,0A4.767,4.767,0,1,0,9.534,4.767,4.773,4.773,0,0,0,4.767,0Zm0,6.789A2.022,2.022,0,1,1,6.789,4.767,2.024,2.024,0,0,1,4.767,6.789Z" transform="translate(66.763 30.452)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1660" data-name="Path 1660" d="M4.767,0A4.767,4.767,0,1,0,9.534,4.767,4.773,4.773,0,0,0,4.767,0Zm0,6.789A2.022,2.022,0,1,1,6.789,4.767,2.024,2.024,0,0,1,4.767,6.789Z" transform="translate(66.763 47.606)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1661" data-name="Path 1661" d="M4.767,9.535A4.767,4.767,0,1,0,0,4.767,4.773,4.773,0,0,0,4.767,9.535Zm0-6.789A2.022,2.022,0,1,1,2.746,4.767,2.024,2.024,0,0,1,4.767,2.746Z" transform="translate(75.34 39.029)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1662" data-name="Path 1662" d="M4.767,0A4.767,4.767,0,1,0,9.535,4.767,4.773,4.773,0,0,0,4.767,0Zm0,6.789A2.022,2.022,0,1,1,6.789,4.767,2.024,2.024,0,0,1,4.767,6.789Z" transform="translate(58.186 39.029)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1663" data-name="Path 1663" d="M12.877.007A4.874,4.874,0,0,0,7.85,4.855v3H4.932A4.875,4.875,0,0,0,0,12.532a1.373,1.373,0,1,0,2.744.1A2.166,2.166,0,0,1,4.932,10.6H8.49A2.108,2.108,0,0,0,10.6,8.5V4.855a2.115,2.115,0,0,1,2.183-2.1,2.167,2.167,0,0,1,2.027,2.187V8.5A2.108,2.108,0,0,0,16.911,10.6H20.47a2.166,2.166,0,0,1,2.187,2.027,2.115,2.115,0,0,1-2.1,2.183H16.911a2.108,2.108,0,0,0-2.105,2.105V20.56a2.116,2.116,0,0,1-2.183,2.1A2.167,2.167,0,0,1,10.6,20.476V16.918A2.108,2.108,0,0,0,8.49,14.813H7.037a1.373,1.373,0,0,0,0,2.746H7.85v2.918a4.851,4.851,0,1,0,9.7.083v-3h3a4.851,4.851,0,1,0-.083-9.7H17.552V4.939A4.876,4.876,0,0,0,12.877.007Z" transform="translate(9.215 30.807)" fill="#afa2e0" stroke="#afa2e0" stroke-width="1"/>
                        <path id="Path_1664" data-name="Path 1664" d="M7.1,14.209a1.373,1.373,0,0,0,1.373-1.373V8.478h4.359a1.373,1.373,0,0,0,0-2.746H8.477V1.373a1.373,1.373,0,0,0-2.746,0V5.732H1.373a1.373,1.373,0,1,0,0,2.746H5.732v4.359A1.373,1.373,0,0,0,7.1,14.209Z" transform="translate(51.878 64.442)" fill="#e80766" stroke="#e80766" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>

                </span>
                    <span class="text-white ">معرفی گیم نت ها</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row w-100 m-0 mb-5 p-0 faq-secttion">
        <div class="row faq-header w-100 m-0 p-0">

            <div class="col-md-12">
                <h1 class="text-center text-white">سوالات متداول</h1>
            </div>
        </div>
        <div class="row faq-body w-100 p-4 m-0  justify-content-center">
            <div class="col-md-8">

                <div id="accordion">
                    <div class="card m-1">
                        <div class="card-header text-right">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <a class="card-link text-white" data-toggle="collapse" href="#collapseOne">
                            Accordion #1
                         </a>
                        </div>

                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body text-right text-white">Content for Accordion #1.</div>
                        </div>
                    </div>

                    <div class="card m-1">
                        <div class="card-header text-right">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseTwo">
                            Accordion #2
                         </a>
                        </div>

                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body text-right text-white">Content for Accordion #2.</div>
                        </div>
                    </div>

                    <div class="card m-1">
                        <div class="card-header text-right">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseThree">
                            Accordion #3
                         </a>
                        </div>

                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body text-right text-white"> Content for Accordion #3.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 mx-0 contact-secttion d-flex justify-content-center align-items-center">
        <div class="col-md-8 col-lg-4  ">
            <h1 class="text-white text-right">ارتباط با ما</h1>
            <p class="text-white text-justify">برای ارتباط با ما پیغام خود را برای ما ارسال کنید.همکاران ما در اولین فرصت پاسخگوی شما هستند.</p>
        </div>
        <div class="col-md-8 col-lg-4  p-3 main-contact ">
            <form class="main-contact-form">
                <input type="text" class="form-control mb-4 text-white" id="name" placeholder="نام و نام خانوادگی" name="name">

                <input type="text" class="form-control mb-4 text-white" id="email" placeholder="ایمیل/شماره موبایل" name="email">
                <textarea class="form-control mb-4" rows="5" id="comment" placeholder="متن مورد نظر"></textarea>
                <div class="row mb-4">
                    <div class="col-8">
                        <input type="text" class="form-control  text-white" id="captcha" placeholder="کد کپچا" name="captcha">

                    </div>
                    <div class="col-4 captcha align-items-center">
                        <p class="mb-0 text-white text-center h-100">
                            EDs43N
                        </p>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary main-form-btn px-5">ارسال</button>
                </div>

            </form>
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
                    <button id="btnrate" data-csrf={{ csrf_token() }} data-url="{{ route('gamenet.rate') }}" type="button" class="btn btn-light my-2" data-dismiss="modal">ثبت‌</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src="{{ asset('/ui/js/jquery.star-rating-svg.js') }}" defer></script>
<script src="{{ asset('/newui/js/newui.js') }}" defer></script>
<script src="{{ asset('/ui/js/myjquery.js') }}" defer></script>
<script>

</script>
@endsection
@section('footersvg')
<svg xmlns="http://www.w3.org/2000/svg" width="1944" height="774" viewBox="0 0 1944 774">
  <path id="Path_1645" data-name="Path 1645" d="M0,0S331.681,322,1007.612,279.333,1944,0,1944,0V774s-450.388-182-936.388-182S0,774,0,774Z" fill="#231553"></path>
</svg> @endsection
