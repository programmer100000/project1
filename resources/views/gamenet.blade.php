@extends('master')
@section('content')
<div class="wrapper-gamenet container-fluid m-0 p-0" dir="rtl">
    <div class="g-info row m-0 p-1">
        <div class="col-md-4 m-0 p-0">
            <div class="carousel" data-flickity='{ "wrapAround": true }'>

                <img class="carousel-cell" src="{{ url('/ui/img/test1.jpg') }}" alt="">

                <img class="carousel-cell" src="{{ url('/ui/img/test2.jpg') }}" alt="">
                <img class="carousel-cell" src="{{ url('/ui/img/test2.jpg') }}" alt="">
            </div>
        </div>
        <div class="peroperties col-md-7 m-0 p-0 text-right">
            <div class="item-header d-flex w-100 m-0 p-2">
                <div class="title text-right float-right m-0 p-0 w-50"><h2>پردیس</h2></div>
                <div class="stars text-left float-left m-0 p-0 w-50">
                    <form class="rating-form" action="#" method="post" name="rating-movie">
                        <fieldset class="form-group">
    
                            <legend class="form-legend">Rating:</legend>
    
                            <div class="form-item">
    
                                <input id="rating-5" name="rating" type="radio" value="5" />
                                <label for="rating-5" data-value="5">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">5</span>
                                </label>
                                <input id="rating-4" name="rating" type="radio" value="4" />
                                <label for="rating-4" data-value="4">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">4</span>
                                </label>
                                <input id="rating-3" name="rating" type="radio" value="3" />
                                <label for="rating-3" data-value="3">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">3</span>
                                </label>
                                <input id="rating-2" name="rating" type="radio" value="2" />
                                <label for="rating-2" data-value="2">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">2</span>
                                </label>
                                <input id="rating-1" name="rating" type="radio" value="1" />
                                <label for="rating-1" data-value="1">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">1</span>
                                </label>
                            </div>
    
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="desc-item">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و
                دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </div>
        </div>
        <div class="contact col-md-4 m-0 p-0">
            <div class="address">
                <i class="fa fa-home" aria-hidden="true"></i>
                ورامین خیابان شهید چمران ولیعصر ۳ پلاک ۵
            </div>
            <div class="phone">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                02136241852
            </div>
        </div>
        <div class="empty-div col-md-2 m-0 p-0 ">

        </div>
        <div class="map col-md-4 m-0 p-0">
        <img src="{{ url('/ui/img/testmap.png') }}" width="200" height="150" style="border-radius:50%;" alt="">
        </div>
    </div>
    <div class="row mt-4" dir="rtl">
        <div class="col-12">
            <div class="card card-white post text-right">
                <div class="post-heading">
                    <div class="float-right image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar"
                            alt="user profile image">
                    </div>
                    <div class="float-right mr-2 meta">
                        <div class="title h5">
                            <a href="#"><b class="text-white">محمدرضا طاهری</b></a>
                        </div>
                        <p class="mt-2">به نظرم مهراب یکی از بهترین برنامه نویس های حال حاضر دنیاست و میشه روش خیلی زیاد حساب کرد</p>
                        <h6 class="text-muted time">۱ دقیقه پیش</h6>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
@endsection
