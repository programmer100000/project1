$(document).ready(function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#types_form_btn").click(function(e) {
        console.log('hi');
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this).closest('form');
    var url = form.attr('action');

$.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            location.reload();
        }
        });
    });

    $(document).on('click', '.remove-system', function(){
        let that = $(this);
        let data_id = that.attr('data-id');

        $("#remove-system").attr('data-id', data_id);

    });

    $(document).on('click', '#remove-system', function(){
        let that = $(this);
        let data_id = that.attr('data-id');
        let url = that.attr('data-url');

        $.ajax({
            type: "POST",
            url: url,
            data: {id : data_id}, // serializes the form's elements.
            success: function(data)
            {
                location.reload();
            }
        });
    });

    $(document).on('click', '.edit-system', function(){
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_device_type_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();
        console.log(test);

    });
    $("#editrow").click(function(e) {
        console.log('hi');
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this).closest('form');
    var url = form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            location.reload();
        }
        });
    });


    $(document).on('click', '.change-system', function(){
        let that = $(this);

        let modal_system_typs = $('#modal-system-typs');
        modal_system_typs.val(that.attr('data-dtnid'));

        let modal_system_price = $('#modal-system-price');
        modal_system_price.val(that.attr('data-price'));

        $("#frm_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '.add-buffet', function(){
        let that = $(this);
        $("#buffet_live_id").val(that.attr('data-id'));
        let test = $('#frm_device_type_id').val();

    });

    $(document).on('click', '#add-buffet', function(){
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

    $(document).on('click', '.remove-buffet', function(){
        let that = $(this);
        that.closest('.new-buffet').remove();
    });

    $("#submit_buffet_form").click(function(e) {
        console.log('hi');
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this).closest('form');
    var url = form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
        }
        });
    });
});



