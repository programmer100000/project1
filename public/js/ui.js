var jsonprovices;

function ajaxreturngamenets() {
    $.ajax({
        type: 'get',
        url: '/get/index/gamenets',
        data: {
            provinceId: localStorage.getItem('provinceId'),
            cityId: localStorage.getItem('cityId')
        },
        success: function(data) {
            var jsonData = JSON.parse(data);
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
                  <span class="text-white  text-justify ">${jsonData.best_gamenet.address}<br > <hr class="text-white" />${jsonData.best_gamenet.description}</span>
              </div>
              <div class="row justify-content-center">
                    ${jsonData.btn_bs}

              </div>

          </div>
          <div class="col-lg-7 my-2 popular-img" style="background-image: url('${jsonData.best_gamenet.gamenet_image}')">
          </div>
      </div>
  </a>`);
            $('.stars').starRating({
                starSize: 25,
                readOnly: true
            });
        }
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
    localStorage.setItem("provinceId", data_id);
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