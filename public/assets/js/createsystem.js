function showMoney(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    $('.formdate').persianDatepicker({
        autoClose: true,
        altField: '#tarikh',
        altFormat: 'YYYY/MM/DD H:mm:ss',
        toolbox: {
            enabled: false,
            calendarSwitch: {
                enabled: false
            }
        },
        navigator: {
            scroll: {
                enabled: false
            }
        },
        maxDate: new persianDate().add('month', 3).valueOf(),
        minDate: new persianDate().subtract('month', 3).valueOf(),
        timePicker: {
            enabled: true,
            meridiem: {
                enabled: true
            }
        }
    });

    $("#types_form_btn").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });

    $("#lottery_user_btn").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');


        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });

    $("#lottery_form_btn").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var formdata = new FormData(form[0]);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: formdata,
            contentType: false,
            processData: false,
            // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', '.remove-system', function () {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#remove-system").attr('data-id', data_id);

    });

    $(document).on('click', '.add-user-lottery', function () {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#lottery-user-id").val(data_id);

    });

    $(document).on('click', '#remove-system', function () {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', '.editlottery', function () {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function (res) {
                res = JSON.parse(res)[0];
                $('#lottery_id').val(res.lottery_id);
                $('#lotteryname').val(res.lottery_name);
                $('#award').val(res.award_title);
                $('#price').val(res.lottery_price);
                $('#tarikh').val(res.date);
                $('#desc').val(res.lottery_desc);
                $('#gamename').val(res.game_title);
            }
        });
    });
    $(document).on('click', '.edit-system', function () {
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_device_type_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });
    $("#editrow").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });
    $("#changerow").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                location.reload();
            }
        });
    });


    $(document).on('click', '.change-system', function () {
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '.add-buffet', function () {
        let that = $(this);
        $("#buffet_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '#add-buffet', function () {
        let that = $(this);
        let div_buffet = $('#div-buffet');
        let new_buffet = $('<div class="new-buffet row"></div>');

        let div2 = $('#dbf-2').clone();
        div2.removeClass("col-md-6");
        div2.addClass("col-md-5");

        new_buffet.append($('#dbf-1').clone());
        new_buffet.append(div2);
        new_buffet.append(`
        <div class="col-md-1">
            <div class="form-group mb-3">
                <label>عملیات</label>
                <button type='button' class="btn btn-danger remove-buffet">-</button>
            </div>
        </div>
        `);

        div_buffet.append(new_buffet);


    });

    $(document).on('click', '.remove-buffet', function () {
        let that = $(this);
        that.closest('.new-buffet').remove();
    });

    $("#submit_buffet_form").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                $('#bcon-close-modal').modal('hide');
            }
        });
    });
    $("#finishfactor").click(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');
        let table_factor_livelogs = $('#table-factor-livelogs');
        let table_factor_buffets = $('#table-factor-buffets');
        table_factor_livelogs.find('tbody').html('');
        table_factor_buffets.find('tbody').html('');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                $('#con-close-modal').modal('hide');
                $('#ModalForm').modal('show');

                let livelogs = data.livelogs;
                let buffets = data.buffets;
                let invoice = data.invoice;

                $('#factor-number').html(invoice.invoice_num);

                for (let index = 0; index < livelogs.length; index++) {
                    let item = livelogs[index];
                    table_factor_livelogs.find('tbody').append(`
                    <tr>
                        <td>${item.device_name}</td>
                        <td>${item.joystick_count}</td>
                        <td>${item.start_time}</td>
                        <td>${item.end_time}</td>
                        <td>${showMoney(item.price)}</td>
                    </tr>
                `);
                }

                for (let index = 0; index < buffets.length; index++) {
                    let item = buffets[index];
                    table_factor_buffets.find('tbody').append(`
                    <tr>
                        <td>${item.buffet_name}</td>
                        <td>${item.count}</td>
                        <td>${showMoney(item.price)}</td>
                    </tr>
                `);
                }

                table_factor_buffets.after(`<p>جمع کل : ${showMoney(invoice.price)}</p>`);



            }
        });
    });

});
