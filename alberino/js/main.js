(function ($) {
 "use strict";



 $(window).on('load', function() {
    $('#Container .container-fluid .row').mixItUp();

}); // END load Function 


/*----------------------------
 jQuery MeanMenu
------------------------------ */

	  
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
    if ($('.hero-slider.owl-carousel').length > 0) {
        $('.hero-slider.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            nav: true,
            dots: false,            
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });
    }
    if ($('.our-offer-slider.owl-carousel').length > 0) {
        $('.our-offer-slider.owl-carousel').owlCarousel({
            margin: 30,
            loop: true,
            items: 3,
            autoplay: false,
            nav: true,
            dots: true,            
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsiveClass:true,
            lazyLoad: true,
            autoplayTimeout: 9000,
            smartSpeed: 900,
            responsive:{
                0:{
                    items:1,
                    margin: 30
                },
                600:{
                    items:2,
                    margin: 30
                },
                991:{
                  items:3,
                  margin: 30
                },
                1200:{
                  items:3,
                  margin: 30
                }
            }
            
        });
    }
    if ($('.team-slider.owl-carousel').length > 0) {
        $('.team-slider.owl-carousel').owlCarousel({
            margin: 30,
            loop: true,
            items: 3,
            autoplay: false,
            nav: true,
            dots: true,            
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsiveClass:true,
            lazyLoad: true,
            autoplayTimeout: 9000,
            smartSpeed: 900,
            responsive:{
                0:{
                    items:1,
                    margin: 30
                },
                600:{
                    items:2,
                    margin: 30
                },
                991:{
                  items:3,
                  margin: 30
                },
                1200:{
                  items:3,
                  margin: 30
                }
            }
            
        });
    }

    $('.testimoial-slider.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        nav: false,
        dots: true,            
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    })
    $('.logo-slider.owl-carousel').owlCarousel({
        loop: true,
        items: 4,
        margin:30,
        autoplay: true,
        nav: false,
        dots: false, 
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                margin: 30
            },
            600:{
                items:2,
                margin: 30
            },
            991:{
              items:3,
              margin: 30
            },
            1200:{
              items:4,
              margin: 30
            }
        }
    })

//video popup 
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
$('.popup-link').magnificPopup({
    type: 'image',
    gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },	
    });



/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();


/*-------------------------------
Counter Up
---------------------------------*/
$('.single-counter h3').counterUp({
    delay: 50,
    time: 3000
});

 
})(jQuery); 