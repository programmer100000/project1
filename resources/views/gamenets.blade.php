@extends('master')
@section('content')
<div class="wrapper-gamenets container-fluid m-0 p-0" dir="rtl">

    <div class="container gamenets-container">
        <div class="row">
            @foreach($gamenets as $g)
                
            <div class="col-md-4 mb-4 p-2 text-center" dir="rtl">
                <a href="/gamenet/1/دستگاه گارانتی شده ">
                </a>
                <div class="card"><a href="/gamenet/1/دستگاه گارانتی شده ">
                        <div class="glassback m-0 p-0">
                            <div class="stars">
                                <!-- RATING - Form -->
                                <span>
                                    ★
                                    {{ $g->rate }}
                                </span>
                            </div>
                            <div class="status w-50 m-0 p-0">
                                @if($g->status == 1)
                                        <button class="btn btn-success">باز</button>
                                    @else
                                        <button class="btn btn-danger">بسته</button>
                                    @endif
                            </div>
                        </div> <img src="{{ url($g->gamenet_image) }}" alt="" class="card-img-top">
                    </a>
                    <div class="card-body text-white"><a href="/gamenet/1/دستگاه گارانتی شده ">
                            <h5 class="card-title m-0">{{ $g->title }}</h5>
                            <p class="card-text text-right mt-1">{{ $g->description }} </p>
                        </a>  
                        <a href="" class="btn btn-outline-info ml-2  float-left btn-sm bookmark"><svg class="svg-inline--fa fa-bookmark fa-w-12" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm0 428.43l-144-84-144 84V54a6 6 0 0 1 6-6h276c3.314 0 6 2.683 6 5.996V428.43z">
                                </path>
                            </svg><!-- <i class="far fa-bookmark" aria-hidden="true"></i> --></a>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="row pagination-row pt-8">
            
            <div class='pagination-container '>
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">صفحه قبلی</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">صفحه بعدی</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</div>

@endsection