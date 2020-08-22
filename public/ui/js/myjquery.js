// $(document).ready(function() {
//     particlesJS("particles-js", {
//         "particles": {
//             "number": {
//                 "value": 150,
//                 "density": {
//                     "enable": true,
//                     "value_area": 800
//                 }
//             },
//             "color": {
//                 "value": "#fff"
//             },
//             "shape": {
//                 "type": "circle",
//                 "stroke": {
//                     "width": 0,
//                     "color": "#000000"
//                 },
//                 "polygon": {
//                     "nb_sides": 5
//                 },
//                 "image": {
//                     "src": "img/github.svg",
//                     "width": 100,
//                     "height": 100
//                 }
//             },
//             "opacity": {
//                 "value": 0.5,
//                 "random": false,
//                 "anim": {
//                     "enable": false,
//                     "speed": 1,
//                     "opacity_min": 0.1,
//                     "sync": false
//                 }
//             },
//             "size": {
//                 "value": 3,
//                 "random": true,
//                 "anim": {
//                     "enable": false,
//                     "speed": 40,
//                     "size_min": 0.1,
//                     "sync": false
//                 }
//             },
//             "line_linked": {
//                 "enable": true,
//                 "distance": 150,
//                 "color": "#fff",
//                 "opacity": 1,
//                 "width": 1
//             },
//             "move": {
//                 "enable": true,
//                 "speed": 6,
//                 "direction": "none",
//                 "random": false,
//                 "straight": false,
//                 "out_mode": "out",
//                 "bounce": false,
//                 "attract": {
//                     "enable": false,
//                     "rotateX": 600,
//                     "rotateY": 1200
//                 }
//             }
//         },
//         "interactivity": {
//             "detect_on": "canvas",
//             "events": {
//                 "onhover": {
//                     "enable": true,
//                     "mode": "repulse"
//                 },
//                 "onclick": {
//                     "enable": true,
//                     "mode": "push"
//                 },
//                 "resize": true
//             },
//             "modes": {
//                 "grab": {
//                     "distance": 400,
//                     "line_linked": {
//                         "opacity": 1
//                     }
//                 },
//                 "bubble": {
//                     "distance": 400,
//                     "size": 40,
//                     "duration": 2,
//                     "opacity": 8,
//                     "speed": 3
//                 },
//                 "repulse": {
//                     "distance": 200,
//                     "duration": 0.4
//                 },
//                 "push": {
//                     "particles_nb": 4
//                 },
//                 "remove": {
//                     "particles_nb": 2
//                 }
//             }
//         },
//         "retina_detect": true
//     });
//     var count_particles, stats, update;
//     // stats = new Stats;
//     // stats.setMode(0);
//     // stats.domElement.style.position = 'absolute';
//     // stats.domElement.style.left = '0px';
//     // stats.domElement.style.top = '0px';
//     // document.body.appendChild(stats.domElement);
//     count_particles = document.querySelector('.js-count-particles');
//     update = function() {
//         // stats.begin();
//         // stats.end();
//         // if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
//         //     count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//         // }
//         requestAnimationFrame(update);
//     };
//     requestAnimationFrame(update);
// });

$('.stars').starRating({
    starSize: 25,
    readOnly: true
});

$('.stars').each(function(index) {
    let this_star = $(this).attr('data-rate');
    $(this).starRating('setRating', this_star);
});

if ($('.my-rating').length > 0) {
    $(".my-rating").starRating({
        starSize: 25,
        callback: function(currentRating, $el) {
            // make a server call here
        }
    });
}
if (typeof(ratestatus) !== 'undefined') {
    if (ratestatus != 0) {
        if ($('.my-rating').length > 0) {
            $('.my-rating').starRating('setRating', ratestatus);
            $('.my-rating').starRating('setReadOnly', true);
        }
    }
}
$(document).on('click', '#btnrate', function() {
    let that = $(this);
    let data_id = that.attr('data-id');
    let url = that.attr('data-url');
    let data_csrf = that.attr('data-csrf');
    let rate = $('.my-rating').starRating('getRating');

    $.ajax({
        type: "POST",
        url: url,
        data: {
            "_token": data_csrf,
            id: data_id,
            rate: rate
        }, // serializes the form's elements.
        success: function(data) {
            // location.reload();
        }
    });
});
$(".reply-comment-button").click(function() {
    $(".reply-comment-form").toggleClass("show-reply-comment-form");
});