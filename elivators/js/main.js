(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */

      
    $('.slider-area .sticky-icons ul li .form i').on('click', function (e) {
        e.stopPropagation();
        $(".slider-area .slider-form").toggleClass('form-show');
    });
    $('.slider-area .slider-form h2 span').on('click', function () {
        $(".slider-area .slider-form").removeClass('form-show');
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

    /*slider one active code
    =================================================*/
    if ($('.hero-slider.owl-carousel').length > 0) {
        $('.hero-slider.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            nav: false,
            dots: false,            
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });
    }


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

/*--------------------------
5.Home slider
---------------------------- */
if ($('.hero-slider.owl-carousel, .blog-slide.owl-carousel').length > 0) {
    $('.hero-slider.owl-carousel, .blog-slide.owl-carousel').owlCarousel({
		loop: true,
        items: 1,
        autoplay: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });
}

	  
	  //social sharing custom css 
	  $(function () {
        $(document).shareButtons({
            // Main Settings
            url: 'https://musetemplatespro.com', // URL to share
            buttonSize: '50px', // Size of the share buttons. Min: 25px
            buttonsAlign: 'vertical', // Buttons layout: horizontal, vertical
            spaceBetweenButtons: '3px', // Space between the buttons
            radius: '0px', // Buttons corner radius

            // Icons Settings
            iconSize: '35px', // Size of the social networks icons. Min: 15px
            iconColor: '#fff', // Color of the social networks icons
            iconColorOnHover: '#fff', // Color of the social networks icons on hover

            // Facebook Button Settings
            showFacebookBtn: 'show',  // Display button: show, hide
            facebookBgr: '#4a6ea9', // Button background color
            facebookBgrOnHover: '#385a97', // Button background color on hover

            // Twitter Button Settings
            showTwitterBtn: 'show', // Display button: show, hide
            tweetMessage: 'Your message goes here', // Default tweet message (URL is added to the message automatically)
            twitterBgr: '#2aaae0', // Button background color
            twitterBgrOnHover: '#197bbd', // Button background color on hover 

            // Pinterest Button Settings
            showPinterestBtn: 'show', // Display button: show, hide
            pinterestBgr: '#e30b2c', // Button background color
            pinterestBgrOnHover: '#d3132a', // Button background color on hover

            // LinkedIn Button Settings
            showLinkedinBtn: 'show', // Display button: show, hide
            linkedinBgr: '#007bb6', // Button background color
            linkedinBgrOnHover: '#0e67b0', // Button background color on hover

            // VKontakte Button Settings
            showVkBtn: 'show', // Display button: show, hide
            vkBgr: '#5b88bd', // Button background color
            vkBgrOnHover: '#688fb2', // Button background color on hover

            // WhatsApp Button Settings (this button works on mobile devices only)
            showWaBtn: 'show', // Display button: show, hide
            waBgr: '#37d350', // Button background color
            waBgrOnHover: '#25e47a', // Button background color on hover

            // Viber Button Settings (this button works on mobile devices only)
            showViberBtn: 'show', // Display button: show, hide
            viberBgr: '#665eaa', // Button background color
            viberBgrOnHover: '#675fa7', // Button background color on hover

            // Email Button Settings
            showEmailBtn: 'show', // Display button: show, hide
            emailBgr: '#888888', // Button background color
            emailBgrOnHover: '#7a7a7a', // Button background color on hover

            // Print Button Settings
            showPrintBtn: 'show', // Display button: show, hide
            printBgr: '#888888', // Button background color
            printBgrOnHover: '#7a7a7a', // Button background color on hover
        })
    });
 
})(jQuery); 