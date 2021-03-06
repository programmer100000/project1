var jsonprovices;
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: urlprovinces,
        DataType: 'json',
        success: function(data) {
            jsonprovices = data.states;
            for (let i = 0; i < jsonprovices.length; i++) {
                let state = jsonprovices[i];
                $('.state').append(`<option value="${state.id}">${state.title}</option>`);
            };
        }
    });
});

function getCities(ostanID) {
    $('.city').empty();
    for (let i = 0; i < jsonprovices.length; i++) {
        let state = jsonprovices[i];
        if (state.id == ostanID) {
            for (let j = 0; j < state.cities.length; j++) {
                let city = state.cities[j];
                $('.city').append(`<option value="${city.id}">${city.title}</option>`);
            }

        }
    }
};
$(document).on('change', '.state', function() {
    let id = $(this).children("option:selected").attr("value");
    getCities(id);
})

$('#buffetid').change(function() {
    let value = $('#buffetid').val();
    let url = buffetcountroute;
    $("#buffetbuycount").empty();
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id: value
        }, // serializes the form's elements.
        success: function(data) {
            for (var i = 1; i <= data; i++) {
                $("#buffetbuycount").append(new Option(i, i));
            }

        },
        error: function(data) {
            Swal.fire('خطا', data.responseJSON.message, 'error');
        }
    });
});

$(document).on('focus', '.selectbuffet', function() {
    let count = $(this).closest('.row').find('.counts');
    let value = $('.selectbuffet').val();
    let url = buffetcountroute;
    count.empty();
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id: value
        }, // serializes the form's elements.
        success: function(data) {
            $('input').on('input', function() {
                var value = count.val();

                if ((value !== '') && (value.indexOf('.') === -1)) {

                    $(this).val(Math.max(Math.min(value, data), 1));
                }
            });

        },
        error: function(data) {
            Swal.fire('خطا', data.responseJSON.message, 'error');
        }
    });
});


$("#btnformbuybuffet").click(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this).closest('form');
    var url = form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            Swal.fire('با موفقیت ثبت شد');
            refresh_tbl_buffets();
        },
        error: function(data) {
            Swal.fire('خطا', data.responseJSON.message, 'error');
        }
    });
});

function refresh_tbl_buffets() {
    $.ajax({
        type: "POST",
        url: jsonbuffet,
        data: {}, // serializes the form's elements.
        success: function(data) {
            $('#tbl_buffets tbody').empty();
            var i = 1;
            data = JSON.parse(data);
            for (let index = 0; index < data.length; index++) {
                i = index + 1;
                let element = data[index];
                $('#tbl_buffets tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${ element.buffet_name }
                        </td>

                        <td>
                            ${ numberWithCommas(element.buffet_price)  }
                        </td>

                        <td>
                            ${ element.count }
                        </td>

                        <td>
                            <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-خروج-modal" data-id="${ element.gnet_buffet_id }" data-dtnid="${ element.gnet_buffet_id }" data-price="${ element.buffet_price }">ویرایش</button>
                            <button data-id="${ element.device_type_id }" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                        </td>
                    </tr>`);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
        }
    });
}