(function ($) {
 "use strict";
 
//jquery select value change attributes

$('#nextBtn').on('click',function(){  
  var optionText = $("#konta_niben option:selected").text();  
  if( optionText == 'T-Shirts'){

    $('.T-Shirts').show();
    $('.Pullover').hide();
    $('.Set').hide();

  }else if(optionText == 'Pullover'){

    $('.Pullover').show();
    $('.T-Shirts').hide();
    $('.Set').hide();

  }else if(optionText == 'Set'){
    $('.Set').show();
    $('.Pullover').hide();
    $('.T-Shirts').hide();

  }
});


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
 
/*----------------------------
 Feature Product Carousel
------------------------------ */  
  $(".total-product").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [993,3],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  }); 
/*----------------------------
 Product testimonial Carousel
------------------------------ */  
  $(".total-product-testimonial").owlCarousel({
      autoPlay: true, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [993,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  }); 
/*----------------------------
New Arival Product Carousel
------------------------------ */  
  $(".total-new-arival").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [993,2],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  }); 
/*----------------------------
Testimonial Carousel
------------------------------ */  
  $(".testimonial").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:true,	  
      items : 1,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [993,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
Home Three Carousel
------------------------------ */  
  $(".new-arival-slider , .blog-slider").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [993,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
Team Slider
------------------------------ */  
  $(".team-slider").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [993,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });

/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) );    
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
/*-------------------------------------
Sidemenu Activation
---------------------------------------*/     

	$('.header-two .icon a').on('click',function(){
	  $('.side-menu').addClass( "show-box" );
	});
	$('.close').on('click',function(){
	   $('.side-menu').removeClass( "show-box" );
	});
	/*---------------------
	countdown
	--------------------- */
    var d = new Date();
    d.setDate(d.getDate() + 450);

    // default example
    simplyCountdown('.simply-countdown-one', {
    year: d.getFullYear(),
    month: d.getMonth() + 1,
    day: d.getDate()
    });
    /*-------------------------------
    Counter Up
    ---------------------------------*/
	$('.about-counter').counterUp({
		delay: 50,
		time: 3000
	});
	/*----------------------------
	testimonial-car
	------------------------------ */  
	  jQuery(".related-product").owlCarousel({
	      autoPlay: true, 
		  slideSpeed:2000,
		  pagination:false,
		  navigation:true,	  
	      items : 3,
		  /* transitionStyle : "fade", */    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	      itemsDesktop : [1199,3],
		  itemsDesktopSmall : [980,2],
		  itemsTablet: [768,1],
		  itemsMobile : [479,1],
	  });
	  
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

//team two mesonary 	
//=================
jQuery( function() {
  // now doc is ready, make selection
  // use another selector, not .isotope,
  // since that is dynamically added in Isotope v1
  var $container = jQuery('#list .row');
  // use imagesLoaded, instead of window.load
$container.imagesLoaded(function () {		
  $container.masonry( { itemSelector: '.item' } );
});
});

 
})(jQuery); 