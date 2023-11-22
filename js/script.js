$(document).ready(function() {
    $(window).scroll(function() {
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
});