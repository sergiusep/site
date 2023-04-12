$(document).ready(function () {

    // navigare toggle bar
    $('#navbar-toggler').click(function () {
        $('.navbar-collapse').slideToggle(400);
    });

    // navbar bg change la scroll
    $(window).scroll(function () {
        let pos = $(window).scrollTop();
        if (pos >= 100) {
            $('.navbar').addClass('cng-navbar');
        } else {
            $('.navbar').removeClass('cng-navbar');
        }
    });

    // echipa carousel
    // $('.echipa .owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     autoplay: true,
    //     dots: true,
    //     nav: false,
    //     responsiveClass: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 2
    //         },
    //         1000: {
    //             items: 3
    //         }
    //     }
    // });

    // reviews carousel
    $('.testimonial .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1
    });
});