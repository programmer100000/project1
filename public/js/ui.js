var jsonprovices;
$(document).ready(function() {
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
    $(".Provinces").removeClass("show")
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