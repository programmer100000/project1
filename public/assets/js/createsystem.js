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
});



