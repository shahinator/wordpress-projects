(function($) {
"use strict";


/* 1.window load functionality
=============================================*/
$(window).on('load', function() {

});


/* 2.document ready load functionality
=============================================*/
$(document).ready(function() {


/*--------------------------
	menu jquery mobile code
	---------------------------- */
	$(function() {
		$('#menu').cookcodesmenu({
			brand: '<a href="http://samharam.estringoman.com/"><img src="http://samharam.estringoman.com/wp-content/themes/samharam/images/logo.png"></a>'
		});
    });


    if ($('.bv-video').length > 0) {


        const backgroundVideo = new BackgroundVideo('.bv-video', {
            src: [
                'http://samharam.estringoman.com/wp-content/uploads/2019/04/video.mp4'
            ]
        });
    }


    if ($('.bg_video_two').length > 0) {

        var videoBackground = new vidbg('.bg_video_two', {
            mp4: 'http://samharam.estringoman.com/wp-content/uploads/2019/05/samharam_video.mp4',
            webm: 'http://samharam.estringoman.com/wp-content/uploads/2019/05/samharam_video.mp4',
            poster: 'http://samharam.estringoman.com/wp-content/uploads/2019/05/samharam_video.mp4',
            overlay: true
        }, {

        })
    }




    // Data images
    //----------------------------------
    if ($('.background-image').length > 0) {
        $('.background-image').each(function () {
            var src = $(this).attr('data-src');
            $(this).css({
                'background-image': 'url(' + src + ')'
            });
        });
    }

    /*slider one active code
    =================================================*/
    if ($('.slider-one-area.owl-carousel').length > 0) {
        $('.slider-one-area.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: false,
            nav: false,
            dots: false,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        });
    }
    /*slider one active code
    =================================================*/
    if ($('.banner_slider.owl-carousel').length > 0) {
        $('.banner_slider.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            nav: false,
            dots: false,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        });
    }
    /*testimonail active code
    =================================================*/
    if ($('.testimonail-slider.owl-carousel').length > 0) {
        $('.testimonail-slider.owl-carousel').owlCarousel({
            loop: true,
            items: 2,
            autoplay: true,
            nav: true,
            dots: true,
            margin: 30,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items: 1,
                    center: false,
                    margin:0
                },
                600: {
                    items: 1,
                    center: false,
                    margin:0
                },
                768: {
                    items: 1,
                    center: false,
                    margin:0
                },
                992: {
                    items: 2

                },
                1200: {
                    items: 2
                }
            }
        });
    }
    if ($('.testimonial-two-slider.owl-carousel').length > 0) {
        $('.testimonial-two-slider.owl-carousel').owlCarousel({
            loop: true,
            items: 2,
            autoplay: true,
            nav: false,
            dots: false,
            margin: 30,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items: 1,
                    center: false,
                    margin:0
                },
                600: {
                    items: 1,
                    center: false,
                    margin:0
                },
                768: {
                    items: 2,
                    center: false
                },
                992: {
                    items: 2

                },
                1200: {
                    items: 2
                }
            }
        });
    }
    /*team members active code
    =================================================*/
    if ($('.team_member_sliders.owl-carousel').length > 0) {
        $('.team_member_sliders.owl-carousel').owlCarousel({
            loop: true,
            items: 3,
            autoplay: true,
            nav: false,
            dots: true,
            margin: 30,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items: 1,
                    center: false,
                    margin:0
                },
                600: {
                    items: 1,
                    center: false,
                    margin:0
                },
                768: {
                    items: 2,
                    center: false
                },
                992: {
                    items: 2

                },
                1200: {
                    items: 3
                }
            }
        });
    }
    /* wow js active code
    =================================================*/
    new WOW().init();


    // image and video popup activation code
    //----------------------------------

    $('.popup-link').magnificPopup({
        type: 'image',
        gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0,1]
            },
        });
        if ($('.video-popup').length > 0) {
          $('.video-popup').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false
          });
      }



    //team active code
    //----------------------------------
     if ($('.board_trustees_slider.owl-carousel').length > 0) {
        $('.board_trustees_slider.owl-carousel').owlCarousel({
            loop: true,
            items: 3,
            autoplay: false,
            //nav: true,
            //dots: true,
            //navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    margin:0
                },
                480:{
                  items:1,
                  margin:0
                },
                767:{
                    items:2,
                    margin:30
                },
                991:{
                  items:3,
                },
                1200:{
                  items:3
                }
            }
        });
    }



	/*----------------------------
	mixitup active
	------------------------------ */
    $('#Container').mixItUp();

    //scrollup
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });




});

/* 3. scroll load functionality
=============================================*/
$(window).on('scroll', function() {

    if( $(window).scrollTop()>100 ){
        $('#sticky').addClass('stick');
        } else {
        $('#sticky').removeClass('stick');
    }


});


/* 4. resize load functionality
=============================================*/
$(window).on('resize', function() {

}); // End Resize

})(jQuery);