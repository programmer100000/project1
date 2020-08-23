$(document).ready(function() {

});

// if ($('.my-rating').length > 0) {
//     $(".my-rating").starRating({
//         starSize: 25,
//         callback: function(currentRating, $el) {
//             // make a server cal l here
//         }
//     });
// }
// if (typeof(ratestatus) !== 'undefined') {
//     if (ratestatus != 0) {
//         if ($('.my-rating').length > 0) {
//             $('.my-rating').starRating('setRating', ratestatus);
//             $('.my-rating').starRating('setReadOnly', true);
//         }
//     }
// }
// $(document).on('click', '#btnrate', function() {
//     let that = $(this);
//     let data_id = that.attr('data-id');
//     let url = that.attr('data-url');
//     let data_csrf = that.attr('data-csrf');
//     let rate = $('.my-rating').starRating('getRating');

//     $.ajax({
//         type: "POST",
//         url: url,
//         data: {
//             "_token": data_csrf,
//             id: data_id,
//             rate: rate
//         }, // serializes the form's elements.
//         success: function(data) {
//             location.reload();
//         }
//     });
// });
// $(".reply-comment-button").click(function() {
//     $(".reply-comment-form").toggleClass("show-reply-comment-form");
// });
$(document).on('click', '.favourite-button', function(e) {
    e.stopPropagation();
    e.preventDefault();
    let that = $(this);
    let csrf = that.attr('data-csrf');
    let gnet_id = that.attr('data-gnet-id');
    let url = that.attr('data-url');
    $.ajax({
        type: "POST",
        url: url,
        data: {
            _token: csrf,
            gamenet_id: gnet_id
        }, // serializes the form's elements.
        success: function(data) {
            if (that.text() == 'دنبال کردن') {
                that.text('دنبال شده');
            } else {
                that.text('دنبال کردن');
            }
        }
    });
});