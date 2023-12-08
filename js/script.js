$(document).ready(function () {
    $(window).scroll(function () {
        //Sticky header
        if ($(this).scrollTop() > 200) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
        //Back to top
        // if ($(this).scrollTop() > 800) {
        //     $('.back-to-top').addClass('visibe-back-to-top');
        // } else {
        //     $('.back-to-top').removeClass('visibe-back-to-top');
        // }

    });



    var latest_news_swiper_carousel_home = new Swiper(".latest-news-swiper-carousel-home", {
        slidesPerView: 1.2,
        centeredSlides: true,
        freeMode: false,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            type: 'bullets'
        },

        breakpoints: {
            768: {
                slidesPerView: 2.2,
                centeredSlides: false,
                freeMode: false,
                slidesPerGroup: 1,
                spaceBetween: 20,
                grabCursor: true,
            },
            1200: {
                slidesPerView: 3,
                centeredSlides: false,
                freeMode: true,
                slidesPerGroup: 1,
                spaceBetween: 20,
                grabCursor: true,
            }
        },



    });

});