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

var xxx;

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    if ($().persianDatepicker) {
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
    }


    $("#add_invoice").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('با موفقیت ثبت شد');
                refresh_tbl_livelogs();
            },
            error: function(data) {
                Swal.fire('خطا');
            }
        });
    });
    $(document).on('click', '#types_form_btn', function(e) {
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

    $(document).on('click', '#game_form_btn', function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('با موفقیت ثبت شد');
                refresh_tbl_games();

            },
            error: function(data) {
                Swal.fire('خطا', data.responseJSON.message, 'error');
            }
        });
    });


    $(document).on('click', '#btn-submit-device', function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('با موفقیت ثبت شد');
                refresh_tbl_devices();
            },
            error: function(data) {
                Swal.fire('خطا', data.responseJSON.message, 'error');
            }
        });
    });


    $(document).on('click', '#btn-add-system', function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                // Swal.fire('با موفقیت ثبت شد');
                Swal.fire('ثبت شد', data.message, 'success');
                // tbl-createsystems
                refresh_tbl_createsystems();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', jqXHR.responseJSON.message, 'error');
            }
        });
    });

    function refresh_tbl_livelogs() {
        $.ajax({
            type: "POST",
            url: livelogurlajax,
            data: {}, // serializes the form's elements.
            success: function(data) {
                $('#tbllivelogs tbody').empty();
                var i = 1;
                data = JSON.parse(data);
                for (let index = 0; index < data.length; index++) {
                    i = index + 1;
                    let element = data[index];
                    let t = new Date(element.created_at);
                    var ti = t.getHours() + ':' + t.getMinutes() + ':' + t.getSeconds();
                    $('#tbllivelogs tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${element.device_name}
                        </td>
 <td>

                                        <span id="livetime"> ${ti}</span>
                                            <button type="button"
                                                class="edit-system btn btn-success waves-effect waves-light"
                                                data-toggle="modal" data-target="#con-close-modal"
                                                data-id="${element.gnet_live_id}   ">تمام</button>
                                            <button type="button"
                                                class="change-system btn btn-success waves-effect waves-light"
                                                data-toggle="modal" data-target="#chcon-close-modal"
                                                data-id="${element.gnet_live_id}">انتقال</button>

                                                <button type="button"
                                                        class="add-buffet btn btn-success waves-effect waves-light"
                                                        data-toggle="modal" data-target="#bcon-close-modal"
                                                        data-id="${element.gnet_live_id}">افزودن خوراکی</button>


                                            <button data-id="${element.gnet_live_id}" type="button"
                                                class="btn btn-danger remove-system" data-toggle="modal"
                                                data-target="#danger-alert-modal">حذف</button>
                                        </td>
                    </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
            }
        });
    }

    function refresh_tbl_createsystems() {
        $.ajax({
            type: "POST",
            url: json_system,
            data: {}, // serializes the form's elements.
            success: function(data) {
                $('#tbl-createsystems tbody').empty();
                var i = 1;
                data = JSON.parse(data);
                for (let index = 0; index < data.length; index++) {
                    i = index + 1;
                    let element = data[index];
                    $('#tbl-createsystems tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${element.type_name}
                        </td>

                        <td>
                            ${element.joystick_count}
                        </td>

                        <td>
                            ${numberWithCommas(element.type_price)}
                        </td>

                        <td>
                            <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-خروج-modal" data-id="${element.device_type_id}" data-dtnid="${element.device_type_name_id}" data-price="${element.type_price}">ویرایش</button>
                            <button data-id="${element.device_type_id}" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                        </td>
                    </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
            }
        });
    }

    function refresh_tbl_devices() {
        $.ajax({
            type: "POST",
            url: url_device_live,
            data: {}, // serializes the form's elements.
            success: function(data) {
                $('#tbl-devices tbody').empty();
                var i = 1;
                data = JSON.parse(data);
                for (let index = 0; index < data.length; index++) {
                    i = index + 1;
                    let element = data[index];
                    $('#tbl-devices tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${element.device_name}
                        </td>

                        <td>
                            ${element.type_name}
                        </td>
                        <td>
                                <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-خروج-modal" data-id="${element.gnet_device_id}" data-dtnid="${element.device_type_id }" data-price="${element.device_name}">ویرایش</button>
                                            <button data-id="${element.gnet_device_id }" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                        </td>
                    </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
            }
        });
    }

    function refresh_tbl_games() {
        $.ajax({
            type: "POST",
            url: url_game_live,
            data: {}, // serializes the form's elements.
            success: function(data) {
                $('#tbl-games tbody').empty();
                var i = 1;
                data = JSON.parse(data);
                for (let index = 0; index < data.length; index++) {
                    i = index + 1;
                    let element = data[index];
                    $('#tbl-games tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${element.game_name}
                        </td>
                        <td>
                        <button type="button" class="edit-system btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-خروج-modal" data-id="${element.gnet_game_id }">ویرایش</button>
                        <button data-id="${element.gnet_game_id }" type="button" class="btn btn-danger remove-system" data-toggle="modal" data-target="#danger-alert-modal">حذف</button>
                     </td>
                    </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
            }
        });
    }

    function refresh_tbl_possibility() {
        $.ajax({
            type: "POST",
            url: possibility_url,
            data: {}, // serializes the form's elements.
            success: function(data) {
                $('#tbl_possibility tbody').empty();
                var i = 1;
                data = JSON.parse(data);
                for (let index = 0; index < data.length; index++) {
                    i = index + 1;
                    let element = data[index];
                    $('#tbl_possibility tbody').append(`<tr>
                        <td>
                            ${i}
                        </td>

                        <td>
                            ${element.text}
                        </td>
                        <td>
                        <button type="button" class="edit-possibility btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-modal" data-id="${element.possibility_id }">ویرایش</button>
                        <button data-id="${element.possibility_id }" type="button" class="btn btn-danger remove-possibility" data-toggle="modal" data-target="#danger-modal">حذف</button>
                     </td>
                    </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire('خطا', 'خطایی پیش امده لطفا دوباره امتحان کنید', 'error');
            }
        });
    }





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

    $("#btnformpossibility").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('با موفقیت ثبت شد');
                refresh_tbl_possibility();

            },
            error: function(data) {
                Swal.fire('خطا', data.responseJSON.message, 'error');
            }
        });
    });



    $("#lottery_user_btn").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');


        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                location.reload();
            }
        });
    });

    $("#lottery_form_btn").click(function(e) {
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
            success: function(data) {
                location.reload();
            }
        });
    });

    $(document).on('click', '.remove-system', function() {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#remove-system").attr('data-id', data_id);

    });
    $(document).on('click', '.remove-possibility', function() {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#remove-possibility").attr('data-id', data_id);

    });
    $(document).on('click', '.edit-possibility', function() {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#possibilityid").val(data_id);



    });
    $(document).on('click', '.edit-buffet', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = buffetlivename;

        $("#buffet_edit_id").val(data_id);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            },
            success: function(data) {
                $('#buffetnameedit').val(data.buffet_name);
                $('#buffetcountedit').val(data.count);
                $('#modal-system-price').val(data.buffet_price);

            }
        })
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image_show').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#lottery_image").change(function() {
        readURL(this);
    });
    $(document).on('click', '.remove-user-lottery', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        console.log(data_id);
        $("#remove-user-lottery").attr('data-id', data_id);

    });
    $(document).on('click', '#remove-possibility', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');
        console.log(data_id);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function(data) {
                refresh_tbl_possibility();
            }
        });
    });

    $(document).on('click', '#remove-user-lottery', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');
        console.log(data_id);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function(data) {
                location.reload();
            }
        });
    });

    $(document).on('click', '#livelog-excel', function() {
        let that = $(this);
        let url = that.attr('data-url');
        console.log(url);
        $.ajax({
            type: "GET",
            url: url,
            success: function(data) {

            }
        });
    });

    $(document).on('click', '#btn-create-match', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');
        console.log(data_id);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function(data) {
                console.log(data);
            }
        });
    });



    $(document).on('click', '.add-user-lottery', function() {
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#lottery-user-id").val(data_id);

    });

    $(document).on('click', '#remove-system', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function(data) {
                refresh_tbl_devices();
                refresh_tbl_createsystems();
                refresh_tbl_games();

            }
        });
    });

    $(document).on('click', '.editlottery', function() {
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: data_id
            }, // serializes the form's elements.
            success: function(res) {
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

    $(document).on('click', '.edit-system', function() {
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_device_type_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });
    $(document).on('click', '.edituserlottery', function() {
        let that = $(this);
        $("#edituserlottery").val(that.attr('data-id'));
    });

    $("#editrow").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('ثبت', 'با موفقیت ثبت شد');
                refresh_tbl_createsystems();
                refresh_tbl_games();
                refresh_tbl_buffets();
            }
        });
    });

    $("#editdevice").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('ثبت', 'با موفقیت ثبت شد');
                refresh_tbl_devices();
            }
        });
    });

    $("#editpossibility").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('ثبت', 'با موفقیت ثبت شد');
                refresh_tbl_possibility();
            }
        });
    });

    $("#changerow").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                Swal.fire('ثبت', 'با موفقیت ثبت شد ');
                refresh_tbl_livelogs();
            }
        });
    });
    $("#edit-profile-btn").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                location.reload();
            }
        });
    });


    $(document).on('click', '.change-system', function() {
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '.add-buffet', function() {
        let that = $(this);
        $("#buffet_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '#add-buffet', function() {
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

    $(document).on('click', '.remove-buffet', function() {
        let that = $(this);
        that.closest('.new-buffet').remove();
    });

    $("#submit_buffet_form").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $('#bcon-close-modal').modal('hide');
            }
        });
    });
    $("#finishfactor").click(function(e) {
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
            success: function(data) {
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


                refresh_tbl_livelogs();

            }
        });
    });



    if ($().bracket) {
        function saveFn(data, userData) {
            var json = JSON.stringify(data);

            console.log('====================================');
            console.log(json);
            console.log('====================================');

        }
        // var minimalData = {
        //     teams: [

        //         ["Team 1", "Team 2"], /* first matchup */
        //         ["Team 3", "Team 4"], /* second matchup */
        //         ["Team 5", "Team 6"], /* second matchup */
        //         ["Team 7", "Team 8"] /* second matchup */
        //     ],
        //     results: [
        //         [
        //             [0, 0],
        //             [0, 0],
        //             [0, 0],
        //             [0, 0]
        //         ]
        //     ]
        // }
        $(function() {

            $('#bracket .demo').bracket({
                init: minimalData,
                save: saveFn,
            });


             
            var ss = $('#bracket .demo').bracket('data');




        });
    }
});