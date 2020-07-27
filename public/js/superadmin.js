

$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.view-gamenet', function () {
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
                console.log(res.fname);
                res = jQuery.parseJSON(res);
                $('#user_id').val(res.user_id);
                $('#gdfname').val(res.fname);
                $('#gdlname').val(res.lname);
                $('#gdusername').val(res.username);
                $('#gdmobile').val(res.mobile);
                $('#gdemail').val(res.email);
                $('#gdgamenet_name').val(res.title);
                $('#gdaddress').val(res.address);
                $('#tel').val(res.tel);
                $('#gddesc').val(res.description);
                glat = res.lat;
                glng = res.long;
                changeloc(glat , glng);
            }
        });

    });


    $("#btnconfirmation").click(function (e) {
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

});
