(function($) {
"use strict";


/* 1.window load functionality
=============================================*/
$(window).on('load', function() {
	/*----------------------------
	mixitup active
	------------------------------ */  
	$('#Container .row').mixItUp();

    setTimeout(() => {
		$('#preloader').fadeOut(900);
	}, 1000);
}); // END load Function 


/* 2.document ready load functionality
=============================================*/
$(document).ready(function() {
    // user change pass
    $('.filter').on('click', function(e){
        e.preventDefault();
       var cat_id = $(this).attr( "data-id" );
        var self_form = $(this);
        $.ajax({
            url: thurls .thajaxurl,
            type:'POST',
            //dataType: 'json',
            data: "action=custom_filter_cat&categroyr=" + cat_id
        }).done(function(data) {
            $('.subcat').html(data);
        });
    });

/*--------------------------
	menu jquery mobile code
	---------------------------- */
	$(function() {
		$('#menu').cookcodesmenu({
			brand: ' '
		});
    });

    //Search trigger
    $(".search img").on("click", function(e) {
        e.stopPropagation();		
        $(".search-box").toggle("");
    });

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
/*--------------------------
5.Home slider
---------------------------- */
if ($('.hero-slider.owl-carousel').length > 0) {
    $('.hero-slider.owl-carousel').owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        items: 1,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 9000,
        smartSpeed: 900,
        nav: true,
        dots: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });
}
    /*slider one active code
    =================================================*/
    if ($('.capabilities-slide.owl-carousel , .product-slider.owl-carousel').length > 0) {
        $('.capabilities-slide.owl-carousel , .product-slider.owl-carousel').owlCarousel({
            loop: true,
            items: 4,
            autoplay: true,
            nav: false,
            dots: false,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],                        
            margin: 30,
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
                    center: false,
                    margin:0
                },
                992: {
                    items: 3,
                    center: false,
                    margin:0
                    
                },
                1200: {
                    items: 4,                                
                    margin: 30,
                }
            }
        });
    }
    /*slider one active code
    =================================================*/
    if ($('.partner-logo.owl-carousel').length > 0) {
        $('.partner-logo.owl-carousel').owlCarousel({
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
    if ($('.testimonial-area-slider.owl-carousel').length > 0) {
        $('.testimonial-area-slider.owl-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            nav: false,
            dots: true, 
            items: 1,           
            margin: 0,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],

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
            items: 4,
            autoplay: false,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
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
                  items:4
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

    $('.our_topper_students_area .nav-tabs li,.our_topper_students_area .nav-tabs >li.first_items').on('click', function () {
        $(".our_topper_students_area .nav-tabs >li, .our_topper_students_area .nav-tabs >li.first_items").addClass('selected');
    });

    $('.our_topper_students_area .nav-tabs >li.not_selected').on('click', function () {
        $(".our_topper_students_area .nav-tabs >li.selected").removeClass('selected');
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