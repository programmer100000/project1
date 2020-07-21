@extends('master')
@section('content')
<header id="particles-js" class=" bg-primary text-white text-center" style="position: relative">
    {{-- <h1 class="animate__animated animate__fadeIn" id="finter-header-text">Game Waze</h1> --}}
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio back-dark" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0">پلان ها</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="demo m-auto w-100">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow animate__slideInLeft" data-wow-duration="3s">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <span class="amount">100</span>
                                        <span class="month">هزار تومان</span>
                                    </div>
                                </div>
                                <div class="icon">12</div>
                                <div class="pricing-content">
                                    <h3 class="title">استاندارد</h3>
                                    <ul>
                                        <li>عنوان یک</li>
                                        <li>عنوان دو</li>
                                        <li>عنوان سه</li>
                                        <li>عنوان چهار</li>
                                        <li>عنوان پنج</li>
                                    </ul>

                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                                        <defs>
                                            <filter id="filter-glitch-1">
                                                <feTurbulence type="fractalNoise" baseFrequency="0.000001"
                                                    numOctaves="1" result="warp" />
                                                <feOffset dx="-90" dy="-90" result="warpOffset" />
                                                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30"
                                                    in="SourceGraphic" in2="warpOffset" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <a href=""><button id="component-5"
                                            class="button button--5 pricingTable-signup">سفارش</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow animate__slideInLeft" data-wow-duration="1s">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <span class="amount">100</span>
                                        <span class="month">هزار تومان</span>
                                    </div>
                                </div>
                                <div class="icon">9</div>
                                <div class="pricing-content">
                                    <h3 class="title">استاندارد</h3>
                                    <ul>
                                        <li>عنوان یک</li>
                                        <li>عنوان دو</li>
                                        <li>عنوان سه</li>
                                        <li>عنوان چهار</li>
                                        <li>عنوان پنج</li>
                                    </ul>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                                        <defs>
                                            <filter id="filter-glitch-1">
                                                <feTurbulence type="fractalNoise" baseFrequency="0.000001"
                                                    numOctaves="1" result="warp" />
                                                <feOffset dx="-90" dy="-90" result="warpOffset" />
                                                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30"
                                                    in="SourceGraphic" in2="warpOffset" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <a href=""><button id="component-5"
                                            class="button button--5 pricingTable-signup">سفارش</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow animate__slideInRight" data-wow-duration="1s">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <span class="amount">100</span>
                                        <span class="month">هزار تومان</span>
                                    </div>
                                </div>
                                <div class="icon">3</div>
                                <div class="pricing-content">
                                    <h3 class="title">استاندارد</h3>
                                    <ul>
                                        <li>عنوان یک</li>
                                        <li>عنوان دو</li>
                                        <li>عنوان سه</li>
                                        <li>عنوان چهار</li>
                                        <li>عنوان پنج</li>
                                    </ul>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                                        <defs>
                                            <filter id="filter-glitch-1">
                                                <feTurbulence type="fractalNoise" baseFrequency="0.000001"
                                                    numOctaves="1" result="warp" />
                                                <feOffset dx="-90" dy="-90" result="warpOffset" />
                                                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30"
                                                    in="SourceGraphic" in2="warpOffset" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <a href=""><button id="component-5"
                                            class="button button--5 pricingTable-signup">سفارش</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow animate__slideInRight" data-wow-duration="3s">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <span class="amount">$20</span>
                                        <span class="month">هزار تومان</span>
                                    </div>
                                </div>
                                <div class="icon">1</div>
                                <div class="pricing-content">
                                    <h3 class="title">استاندارد</h3>
                                    <ul>
                                        <li>عنوان یک</li>
                                        <li>عنوان دو</li>
                                        <li>عنوان سه</li>
                                        <li>عنوان چهار</li>
                                        <li>عنوان پنج</li>
                                    </ul>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                                        <defs>
                                            <filter id="filter-glitch-1">
                                                <feTurbulence type="fractalNoise" baseFrequency="0.000001"
                                                    numOctaves="1" result="warp" />
                                                <feOffset dx="-90" dy="-90" result="warpOffset" />
                                                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30"
                                                    in="SourceGraphic" in2="warpOffset" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <a href=""><button id="component-5"
                                            class="button button--5 pricingTable-signup">سفارش</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section slider back-dark" id="gamenets">
    <div class="row m-0 p-0">
        @foreach($gamenets_active as $ga)
            <a href="/gamenet/{{ $ga->gamenet_id }}/{{ $ga->title }} ">
                <div class="col-lg-4 mb-4 text-center" dir="rtl">
                    <div class="card">
                        <div class="glassback m-0 p-0">
                            <div class="stars">
                                <!-- RATING - Form -->
                                <span>
                                    ★
                                    {{ $ga->rate }}
                                </span>
                            </div>
                            <div class="status w-50 m-0 p-0">
                                @if($ga->status == 1)
                                    <button class="btn btn-success">باز</button>
                                @else
                                    <button class="btn btn-danger">بسته</button>
                                @endif
                            </div>
                        </div> <img src="{{ url($ga->gamenet_image) }}" alt="" class="card-img-top">
                        <div class="card-body text-white">
                            <h5 class="card-title m-0">{{ $ga->title }}</h5>
                            <p class="card-text text-right mt-1">{{ $ga->description }}</p>
                            <a href="" class="btn btn-outline-danger float-left btn-sm like"><i
                                    class="far fa-heart"></i></a>
                            <a href="" class="btn btn-outline-info ml-2  float-left btn-sm bookmark"><i class="far fa-bookmark" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
<script src="{{ asset('ui/js/wow.min.js') }}" defer></script>
<script src="{{ asset('ui/js/particles.js') }}" defer></script>
@endsection
