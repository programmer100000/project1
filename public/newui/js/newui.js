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