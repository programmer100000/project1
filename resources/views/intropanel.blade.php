@extends('newui/master')
@section('content')
<div class=" content">
    <div class="row w-100 m-0 p-0 slider-secttion ">
        <div class="inneeer-slider col d-flex justify-content-center align-items-center ">
            <div class="row w-100 p-0 m-0 justify-content-center gm-header-text">
                <div class="col-md-6 text-center gmt-header-text">
                    حرفه ای بازی کن !
                </div>
            </div>

        </div>

        <div class="row w-100 m-0 plan-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="1944" height="774" viewBox="0 0 1944 774">
                <path id="Path_1645" data-name="Path 1645"
                    d="M0,0S331.681,322,1007.612,279.333,1944,0,1944,0V774s-450.388-182-936.388-182S0,774,0,774Z"
                    fill="#231553" />
            </svg>
            <div class="col-12 inner-plan-header mx-auto p-0 position-absolute ">
                <div class="title text-center">
                    <img src="{{ asset('newui/img/rahnamatitle.png')}}" alt="" class="title-img">
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center p-0 hadaf-row">
        <div class="col-md-10 p-0 mx-auto">
            <div class="row w-100 p-3 m-0  introduce introduce1 introduce-gamenets ">
                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center  introduce-data">
                    <div class="mb-3 d-flex text-right align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="54"
                            height="56" viewBox="0 0 54 56">
                            <defs>
                                <filter id="Ellipse_80" x="2" y="5" width="51" height="51" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feFlood flood-color="#e80766" />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g id="Group_515" data-name="Group 515" transform="translate(-175 -1492)">
                                <g id="Ellipse_79" data-name="Ellipse 79" transform="translate(175 1492)" fill="#e80766"
                                    stroke="#707070" stroke-width="1" opacity="0.33">
                                    <circle cx="27" cy="27" r="27" stroke="none" />
                                    <circle cx="27" cy="27" r="26.5" fill="none" />
                                </g>
                                <g transform="matrix(1, 0, 0, 1, 175, 1492)" filter="url(#Ellipse_80)">
                                    <circle id="Ellipse_80-2" data-name="Ellipse 80" cx="16.5" cy="16.5" r="16.5"
                                        transform="translate(11 11)" fill="#e80766" />
                                </g>
                            </g>
                        </svg>
                        <span class="hadafe-ma">هدف ما </span>
                    </div>
                    <div class="d-flex mb-4 text-right ">

                        <span class="text-white text-justify">به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی
                            گرافیک گفته می‌شود.طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و
                            ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</span>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-primary main-form-btn px-4">ثبت نام s</button>
                    </div>
                </div>

                <div class="col-md-6 introduce2-img">
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0 testsvg">
        <div class="col-md-10  mx-auto text-center mazaya-row p-0">
            <div class="row text-center m-0 p-0">
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/1.svg') }}" alt="">
                    <span> ارائه خدمات در سریع ترین زمان ممکن</span>
                </div>
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/2.svg') }}" alt="">
                    <span>معرفی سریع به مخاطبین بیشتر</span>
                </div>
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/3.svg') }}" alt="">
                    <span>تایید کار شناسان با بیشترین سرعت</span>
                </div>
            </div>
            <div class="row mt-5 text-center m-0 p-0">
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/4.svg') }}" alt="">
                    <span>برگذاری کمپین مسابقاتی</span>
                </div>
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/5.svg') }}" alt="">
                    <span>ارائه خدمات رایگان به مدت سه روزه</span>
                </div>
                <div class="col-md mx-5 p-0 mazaya-back">
                    <img src="{{ asset('/newui/img/6.svg') }}" alt="">
                    <span>کاهش هزینه های تبلیغاتی</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0 ">
        <div class="col-md-12 text-center m-0 p-0">
            <img src="{{ asset('newui/img/farayand-title.png') }}" alt="">
            <img src="{{ asset('newui/img/rahnama.png')}}" alt="">
            <img src="{{ asset('newui/img/soalat.png') }}" alt="">
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
    </div>

</div>
@endsection
@section('footersvg')

@endsection
