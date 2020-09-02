var jsonprovices;

function ajaxreturngamenets() {
    $('.loading').css('display', 'block');
    $.ajax({
        type: 'get',
        url: '/get/index/gamenets',
        data: {
            provinceId: localStorage.getItem('provinceId'),
            cityId: localStorage.getItem('cityId')
        },
        success: function(data) {
            var jsonData = JSON.parse(data);
            if (jsonData.status == 'true') {
                $('#gamnets_div').css('display', 'block');
                $('#message-not-found').css('display', 'none');
                $('.popular-gamenet').empty();
                $('.popular-gamenet').append(`<a href="/gamenet/${jsonData.best_gamenet.gamenet_id}/${jsonData.best_gamenet.title}">
          <div class="row w-100 p-3 m-0 popular justify-content-center ">
              <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center ">
                  <h1 class="text-white text-right mb-4 align-self-start">${jsonData.best_gamenet.title} </h1>
                  <div class="mb-3 d-flex w-100 text-right align-self-start">
                      <input type="hidden" class="rate-input">
                      <span class="text-white">امتیاز: </span>
                      <div class="stars text-right mr-2 float-center m-0 p-0 w-75" data-rate=${jsonData.best_gamenet.rate}>
    
                      </div>
                  </div>
                  <div class="d-flex mb-4 text-right ">
                      <span class="ml-1"> 
                          <img src="newui/img/pin.svg" alt="" width="25" height="25">
                      </span>

                      <span class="text-white  text-justify ">${jsonData.best_gamenet.address}<br > <hr class="text-white w-100" />${jsonData.best_gamenet.description}</span>

                  </div>
                  <div class="row justify-content-center">
                        ${jsonData.btn_bs}
    
                  </div>
    
              </div>
              <div class="col-lg-7 my-2 popular-img" style="background-image: url('${jsonData.best_gamenet.gamenet_image}')">
              </div>
          </div>
      </a>`);

                $('.g-introduce1').empty();
                $('.g-introduce1').append(`<a href="/gamenet/${jsonData.gamenets[0].gamenet_id}/${jsonData.gamenets[0].title}">
      <div class="row w-100 p-3 m-0  introduce ">
          <div class="col-12 introduce1-img "
              style="background-image:url(${jsonData.gamenets[0].gamenet_image})">
          </div>
          <div
              class="col-12 d-flex flex-column align-items-center justify-content-center  introduce1-data">

              <h1 class="text-white text-right my-4 align-self-start">${jsonData.gamenets[0].title}
              </h1>
              <div class="mb-3 d-flex w-100 text-right align-self-start">
                  <span class="text-white">امتیاز: </span>
                  <input type="hidden" class="rate-input" value="">
                  <div class="stars text-right mr-2 float-center m-0 p-0 w-75"
                      data-rate="${jsonData.gamenets[0].rate}">

                  </div>
              </div>
              <div class="w-100 d-flex mb-4 text-right ">
                  <span class="ml-1">
                      <img src="newui/img/pin.svg" alt="" width="25" height="25">
                  </span>


                  <span class="text-white text-justify ">${jsonData.gamenets[0].address}<br /><hr class="text-white w-100" />
                  ${jsonData.gamenets[0].description}</span>
              </div>
              <div class="row justify-content-center">
              ${jsonData.btn_bs}
              </div>

          </div>
      </div>
  </a>`);
                $('.g-introduce2').empty();
                $('.g-introduce2').append(`<a href="gamenet/${jsonData.gamenets[1].gamenet_id}/${jsonData.gamenets[1].title}">
                <div class="row w-100 p-3 m-0  introduce introduce1 ">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center  introduce2-data">

                        <h1 class="text-white text-right my-4 align-self-start">${jsonData.gamenets[1].title}</h1>
                        <div class="mb-3 d-flex w-100 text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                            <div class="stars text-right mr-2 float-center m-0 p-0 w-75" data-rate="${jsonData.gamenets[1].rate}" >
                                <div class="my-rating" dir="ltr" data-toggle="modal" href="#rate-modal"></div>
                            </div>
                        </div>

                        <div class="w-100 d-flex mb-4 text-right ">
                            <span class="ml-1"><img src="newui/img/pin.svg" alt="" width="25" height="25">
                        </span>



                            <span class="text-white text-justify">${jsonData.gamenets[1].address}<br /><hr class="text-white w-100" />
                            ${jsonData.gamenets[1].description}</span>
                        </div>
                        <div class="row justify-content-center">
                        ${jsonData.btn_bs}
                        </div>
                    </div>

                    <div class="col-lg-6 introduce2-img" style="background-image:url(${jsonData.gamenets[1].gamenet_image})" >
                    </div>
                </div>
                </a>`);
                $('.g-introduce3').empty();
                $('.g-introduce3').append(`<a href="gamenet/${jsonData.gamenets[2].gamenet_id}/${jsonData.gamenets[2].title}">
                <div class="row w-100 p-3 m-0  introduce introduce1 ">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center  introduce2-data">

                        <h1 class="text-white text-right my-4 align-self-start">${jsonData.gamenets[2].title}</h1>
                        <div class="mb-3 d-flex w-100 text-right align-self-start">
                            <span class="text-white">امتیاز: </span>
                            <div class="stars text-right mr-2 float-center m-0 p-0 w-75" data-rate="${jsonData.gamenets[2].rate}" >
                                <div class="my-rating" dir="ltr" data-toggle="modal" href="#rate-modal"></div>
                            </div>
                        </div>

                        <div class="w-100 d-flex mb-4 text-right ">
                            <span class="ml-1"><img src="newui/img/pin.svg" alt="" width="25" height="25">
                        </span>



                            <span class="text-white text-justify">${jsonData.gamenets[2].address}<br /><hr class="text-white w-100" />
                            ${jsonData.gamenets[2].description}</span>
                        </div>
                        <div class="row justify-content-center">
                        ${jsonData.btn_bs}
                        </div>
                    </div>

                    <div class="col-lg-6 introduce2-img" style="background-image:url(${jsonData.gamenets[2].gamenet_image})" >
                    </div>
                </div>
                </a>`);
                $('.g-introduce4').empty();
                $('.g-introduce4').append(`<a href="/gamenet/${jsonData.gamenets[3].gamenet_id}/${jsonData.gamenets[3].title}">
<div class="row w-100 p-3 m-0  introduce ">
<div class="col-12 introduce1-img "
style="background-image:url(${jsonData.gamenets[3].gamenet_image})">
</div>
<div
class="col-12 d-flex flex-column align-items-center justify-content-center  introduce1-data">

<h1 class="text-white text-right my-4 align-self-start">${jsonData.gamenets[3].title}
</h1>
<div class="mb-3 d-flex w-100 text-right align-self-start">
    <span class="text-white">امتیاز: </span>
    <input type="hidden" class="rate-input" value="">
    <div class="stars text-right mr-2 float-center m-0 p-0 w-75"
        data-rate="${jsonData.gamenets[3].rate}">

    </div>
</div>
<div class="w-100 d-flex mb-4 text-right ">
    <span class="ml-1">
        <img src="newui/img/pin.svg" alt="" width="25" height="25">
    </span>


    <span class="text-white text-justify ">${jsonData.gamenets[3].address}<br /><hr class="text-white w-100" />
    ${jsonData.gamenets[3].description}</span>
</div>
<div class="row justify-content-center">
${jsonData.btn_bs}
</div>

</div>
</div>
</a>`);

            } else {
                $('#gamnets_div').css('display', 'none');
                $('#message-not-found').css('display', 'block');
                let cityname = localStorage.getItem('city');
                let provincename = localStorage.getItem('province');


                $('#message-not-found p').text(" گیمنتی در استان " + provincename + " و شهرستان " + cityname + " ثبت نشده است.  ");

            }

            $('.stars').starRating({
                starSize: 25,
                readOnly: true
            });
        }
    }).done(function() {
        $('.loading').css('display', 'none');
    });
}

$(document).ready(function() {
    if (localStorage.getItem('cityId') == null) {
        $('.pr-title').text('استان ها');
    } else {
        let cityname = localStorage.getItem('city');
        let provincename = localStorage.getItem('province');
        $('.pr-title').text(provincename + ',' + cityname);
        ajaxreturngamenets();
    }

    window.onclick = function() {
        $(".Provinces").removeClass("show");
    }
    $.ajax({
        url: urlprovinces,
        DataType: 'json',
        success: function(data) {
            jsonprovices = data.states;
            for (let i = 0; i < jsonprovices.length; i++) {
                let state = jsonprovices[i];
                $('.Provinces').append(`<div class="row text-right m-0 p-1 province">
                <div class="col-11 m-0 p-0 name" data-id="${state.id}">
                  <span>${state.title}</span>
                </div>
                <div class="col-1 m-0 p-0 text-center icon">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
              </div>`);
            };
        }
    });

});



function getprovinces() {
    $('.Provinces').empty();
    for (let i = 0; i < jsonprovices.length; i++) {
        let state = jsonprovices[i];
        $('.Provinces').append(`<div class="row text-right m-0 p-1 province">
        <div class="col-11 m-0 p-0 name" data-id="${state.id}">
          <span>${state.title}</span>
        </div>
        <div class="col-1 m-0 p-0 text-center icon">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
      </div>`);
    }
}

function getCities(ostanID) {
    $('.Provinces').empty();
    $(".Provinces").addClass("show");
    $('.Provinces').append(`<div class="row text-right m-0 p-1 back">
    <div class="col-11 m-0 p-0 text-right name">
      <span>  بازگشت به استان ها</span>
    </div>
    <div class="col-1 m-0 p-0 text-center icon">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>
  </div>`);
    for (let i = 0; i < jsonprovices.length; i++) {
        let state = jsonprovices[i];
        if (state.id == ostanID) {
            for (let j = 0; j < state.cities.length; j++) {
                let city = state.cities[j];
                $('.Provinces').append(`<div class="row text-right m-0 p-2 city">
                <div class="col-md-10 m-0 p-0 name" data-id="${city.id}">
                  <span>${city.title}</span>
                </div>
               
              </div>`);
            }

        }
    }
};

$(document).on('click', '.Provinces .province', function(e) {
    e.preventDefault();
    e.stopPropagation();
    document.getElementsByClassName('Provinces')[0].scrollTo(0, 0);
    let that = $(this);
    let data_id = that.find('.name').attr("data-id");
    $('.pr-title').text(that.find('.name').find("span").text());
    getCities(data_id);
});

$(document).on('click', '.Provinces .city', function(e) {
    e.preventDefault();
    e.stopPropagation();
    let that = $(this);
    let data_id = that.find('.name').attr("data-id");
    let province_name = $('.pr-title').text();
    localStorage.setItem("cityId", data_id);
    $('.pr-title').text(province_name + ',' + that.find('.name').find("span").text());
    $('.Provinces').empty();
    localStorage.setItem('province', province_name);
    localStorage.setItem('city', that.find('.name').find("span").text());
    getprovinces();
    $(".Provinces").removeClass("show");
    ajaxreturngamenets();
});

$(document).on('click', '.Provinces .back', function(e) {
    e.stopPropagation();
    e.preventDefault();
    getprovinces();
});

$('#provinces-dropdown').on('hide.bs.dropdown', function(e) {
    document.getElementsByClassName('Provinces')[0].scrollTo(0, 0);
    getprovinces();
})