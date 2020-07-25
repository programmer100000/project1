@extends('master')
@section('content')

<div class="container panel-container">
<div class="row welcome-text">
    <div class="col-md-6">
        <p>.کاربر گرامی خوش آمدید</p>
    </div>
</div>
<div class="row user-panel  m-auto my-10 px-2">
    <div class="col-md-2 py-5">
        <div class="list-group user-panel-list-tab" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#user-fav" role="tab" aria-controls="profile">علاقه مندی ها</a>
            <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#user-info" role="tab" aria-controls="home">اطلاعات</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#user-fav" role="tab" aria-controls="profile">خروج</a>
        </div>
    </div>
    <div class="col-md-10 py-5">
        <div class="tab-content user-panel-tab-content pt-0" id="nav-tabContent">
            <div class="tab-pane fade " id="user-info" role="tabpanel" aria-labelledby="list-home-list">
                <!-- <h3 class="user-panel-heading">اطلاعات کاربری</h3> -->
                <form class="user-panel-form">
                    <div class='row'>

                        <div class=' form-group col-md-6 col-sm-12 '>
                            <label>نام </label>
                            <input type='text' class='form-control' placeholder='مهراب' />
                        </div>
                        <div class=' form-group col-md-6 col-sm-12 '>
                            <label>نام خانوادگی </label>
                            <input type='text' class='form-control' placeholder='کرد بچه' />
                        </div>

                    </div>

                    <div class='row'>
                        <div class=' form-group col-md-6 col-sm-12 '>
                            <label>نام کاربری</label>
                            <input type='text' class='form-control' placeholder='مهراب' />
                        </div>

                        <div class='form-group col-md-6 col-sm-12 '>
                            <label>ایمیل</label>
                            <input type='text' class='form-control' placeholder='test@gmail.com' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class=' form-group col-md-9 col-sm-12 '>
                            <label>شماره موبایل</label>
                            <input type='text' class='form-control' placeholder='09128882345' readonly />
                        </div>
                        <div class=' form-group col-md-3 col-sm-12 submit-button'>
                            <button type='submit' class='btn btn-success edite-button'>
                                ویرایش اطلاعات
                            </button>
                        </div>
                    </div>


                </form>
            </div>
            <div class="tab-pane fade show active" id="user-fav" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4  text-center" dir="rtl">

                        <a href="/gamenet/1/دستگاه گارانتی شده ">
                        </a>
                        <div class="card">
                            <a href="/gamenet/1/دستگاه گارانتی شده " class="card-img">
                                <img src="http://localhost:8000/ui/img/test1.jpg" alt="" class="card-img-top p-2">
                            </a>
                            <div class="card-body text-white"><a href="/gamenet/1/دستگاه گارانتی شده ">
                                    <h5 class="card-title m-0">دستگاه گارانتی شده</h5>

                                </a>
                                <a href="" class="btn btn-outline-info ml-2  float-left btn-sm bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4  text-center" dir="rtl">

                        <a href="/gamenet/1/دستگاه گارانتی شده ">
                        </a>
                        <div class="card">
                            <a href="/gamenet/1/دستگاه گارانتی شده " class="card-img">
                                <img src="http://localhost:8000/ui/img/test1.jpg" alt="" class="card-img-top p-2">
                            </a>
                            <div class="card-body text-white"><a href="/gamenet/1/دستگاه گارانتی شده ">
                                    <h5 class="card-title m-0">دستگاه گارانتی شده</h5>

                                </a>
                                <a href="" class="btn btn-outline-info ml-2  float-left btn-sm bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>



@endsection