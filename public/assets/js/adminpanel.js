$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

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

        },
        error: function(data) {
            Swal.fire('خطا', data.responseJSON.message, 'error');
        }
    });
});