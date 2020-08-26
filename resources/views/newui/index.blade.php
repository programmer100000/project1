@extends('newui.master') @section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('/ui/css/star-rating-svg.css') }}"> @endsection @section('content')
<div class=" content">
    <div class="row w-100 m-0 p-0 slider-secttion">
        <div class="inner-slider col d-flex justify-content-center align-items-center ">
            <div class="row w-100 p-0 m-0 justify-content-center">
                <div class=" col-8 col-md-4 p-0  searchbar d-flex justify-content-center align-items-center" dir="rtl">
                    <input class="search_input border-0" type="text" name="" placeholder="جستجو...">
                    <a href="#" class="search_icon d-flex justify-content-center text-white align-items-center"><i class="fa fa-search"></i></a>
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
                                <div class="stars text-left float-left m-0 p-0 w-75" data-rate={ { $best_gamenet->rate }}>

                                </div>
                            </div>
                            <div class="d-flex mb-4 text-right ">
                                <span class="ml-1"> 
                                    <img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25">

                        </span>

                                <span class="text-white  text-justify ">{{ $best_gamenet->description }}</span>
                            </div>
                            <div class="row justify-content-center">
                                @if (Auth::check()) @php $user = Auth::user(); $fav = App\favourite::where([['user_id' , $user->user_id] , ['gnet_id' , $best_gamenet->gamenet_id]])->first(); @endphp @if ($fav == null)
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url="{{ route('add.favourite')}}" data-gnet-id={{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button> @else
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url="{{ route('add.favourite')}}" data-gnet-id={{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال شده</button> @endif
                                @else
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url="{{ route('add.favourite')}}" data-gnet-id={{ $best_gamenet->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button> @endif

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
                                <span class="ml-1">
                                    <img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25">
                  </span>


                                <span class="text-white text-justify ">{{ $gamenets_active[0]->address }}<br /> {{ $gamenets_active[0]->description }}</span>
                            </div>
                            <div class="row justify-content-center">
                                @if (Auth::check()) @php $user = Auth::user(); $fav = App\favourite::where([['user_id' , $user->user_id] , ['gnet_id' , $best_gamenet->gamenet_id]])->first(); @endphp @if ($fav == null)
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url={{ route( 'add.favourite')}} data-gnet-id={{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>                                @else
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url={{ route( 'add.favourite')}} data-gnet-id={{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال شده</button>                                @endif @else
                                <button type="button" class="btn btn-primary main-form-btn px-4 favourite-button" data-url={{ route( 'add.favourite')}} data-gnet-id={{ $gamenets_active[0]->gamenet_id }} data-csrf= {{ csrf_token() }}>دنبال کردن</button>                                @endif

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
                            <span class="ml-1"><img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25">
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
                            <span class="ml-1"><img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25">
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
                            <span class="ml-1"><img src="{{ asset('newui/img/pin.svg') }}" alt="" width="25" height="25">
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
                    <img src="{{ asset('newui/img/Artboard33.svg') }}" alt="" width="35" height="35">
                   
                </span>
                    <span class="text-white mb-4">معرفی برترین گیم نت</span>
                </div>
                <div class="text-right">
                    <span>
                    <img src="{{ asset('newui/img/Artboard44.svg') }}" alt="" width="35" height="35">
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
<script src="{{ asset('newui/js/jquery.easy-autocomplete.min.js')}}" defer></script>
<script>
    $(document).ready(function() {

        var options = {

            url: "countries.json",

            getValue: "name",

            list: {
                match: {
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

            theme: "square"
        };

        $(".search_input").easyAutocomplete(options);
    });
</script>
@endsection @section('footersvg')
<img src="{{ asset('newui/img/ph.svg') }}" alt="" width="100%">
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="1944" height="774" viewBox="0 0 1944 774">
  <path id="Path_1645" data-name="Path 1645" d="M0,0S331.681,322,1007.612,279.333,1944,0,1944,0V774s-450.388-182-936.388-182S0,774,0,774Z" fill="#231553"></path>
</svg> -->
@endsection