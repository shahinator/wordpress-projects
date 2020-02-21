(function($) {

	"use strict";
    // Preloader
    $(window).on('load', function() {
      $('#preloader').delay(350).fadeOut('slow');
    })


    /*--------------------------
    One Page Navigatiopn active
    ---------------------------- */
    if ($('.navbar-nav').length > 0) {
        $('.navbar-nav').onePageNav({
            scrollOffset: 70
        });
    }

    //quick support jquery 
    $('.tooglequicksupport a').on('click',function(){
        $('.notification-bar').addClass( "highlight" );
    });
    $('.notification-close a').on('click',function(){
        $('.notification-bar').removeClass( "highlight" );
    });

    // menu toogle 
    //----------------------------------
    var togglebtn = $('.toggle-btn');
    if(togglebtn.length){
        $(".toggle-btn").on("click", function () {
            $(this).toggleClass("active");
            $(".navbar-nav").toggleClass("show-menu");
        });
    }

    // Header Navbar
    $(window).on('scroll', function(){
        if( $(window).scrollTop()>100 ){
            $('.main-header').addClass('scroll-to-fixed');
            } else {
            $('.main-header').removeClass('scroll-to-fixed');
        }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $(document).on('click', 'a.page-scroll', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });


    // Main Slider
    $('.main-slider').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            margin: 0,
            autoplay: true,
            autoplayTimeout:3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items:1
                },
                600:{
                    items:1
                },
                1000: {
                    items:1
                }
            }
        });

    // partner-slider
    if($('.partner-slider').length){
        $('.partner-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 700,
            navText: [
              '<i class="arrow_carrot-left"></i>',
              '<i class="arrow_carrot-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                575:{
                    items:1,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        })
    }



    // blog-slider
    if($('.blog-slider').length){
        $('.blog-slider').owlCarousel({
            center: true,
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            navText: [
              '<i class="arrow_left"></i>',
              '<i class="arrow_right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2,
                    center: false
                },
                992: {
                    items: 3
                    
                },
                1200: {
                    items: 3
                }
            }
        })
    }


    // blog-slider
    if($('.blog-slider-two').length){
        $('.blog-slider-two').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            navText: [
              '<i class="arrow_left"></i>',
              '<i class="arrow_right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2,
                    center: false
                },
                992: {
                    items: 3
                    
                },
                1200: {
                    items: 3
                }
            }
        })
    }


    // Portfolio Script
    function sortingGallery() {
        if ($(".sortable-gallery .gallery-filters").length) {
            var $container = $('.gallery-container');
            $container.isotope({
                filter:'*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".gallery-filters li a").on("click", function() {
                $('.gallery-filters li .active').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter:selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    sortingGallery();



    // Background Image Call Script
    if ($('.background-image').length > 0) {
        $('.background-image').each(function () {
            var src = $(this).attr('data-src');
            $(this).css({
                'background-image': 'url(' + src + ')'
            });
        });
    }

    // For Service Slider
    $('#demo').smSlider({
        autoPlay: true,
        delay : 4000,
        pagination: false,
        subMenu: true,
        flexible: true
    })


    // CounterUp
    $('.counter').counterUp({
          delay: 10,
          time: 1000
      });



    //Scroll-Up
    dyscrollup.init({
        showafter : 500,
        scrolldelay : 1000,
        position : 'right',
        shape : 'squre',
        width : "20",
        height : "20"
    });



})(window.jQuery);