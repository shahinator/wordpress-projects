(function($) {

	"use strict";

	  
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
    /*------------------------------------------
        = FUNCTIONS
    -------------------------------------------*/
    // Check ie and version
    function isIE () {
        var myNav = navigator.userAgent.toLowerCase();
        return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1], 10) : false;
    }


    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $(".navigation-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-holder .close-navbar");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            return false;
        })
    }

    toggleMobileNavigation();


    // Function for toggle a class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = $("#navbar > ul");

        if (windowWidth <= 991) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    toggleClassForSmallNav();


    // Function for small menu
    function smallNavFunctionality() {
        var windowWidth = window.innerWidth;
        var mainNav = $(".navigation-holder");
        var smallNav = $(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function(e) {
                var $this = $(this);
                $this.siblings().slideToggle();
                 e.preventDefault();
                e.stopImmediatePropagation();
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var doParallax = -(resize/5);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }


    // Hero slider background setting
    function sliderBgSetting() {
        if ($(".hero-slider .slide").length) {
            $(".hero-slider .slide").each(function() {
                var $this = $(this);
                var img = $this.find(".slider-bg").attr("src");
                var sliderBg = $this.find(".slider-image");

                sliderBg.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }


    //Setting hero slider
    function heroSlider() {
        if ($(".hero-slider").length) {
            var $status = $('.pagi-info');

            $(".hero-slider").on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                var i = (currentSlide ? currentSlide : 0) + 1;

                if(i < 10) {
                    i = '0' + i;
                }

                if(slick.slideCount < 10) {
                    var slideCount = '0' + slick.slideCount;
                } else {
                    var slideCount = slick.slideCount;
                }

                $status.text(i + ' / ' + slideCount);
            });

            $(".hero-slider").slick({
                autoplay: true,
                autoplaySpeed: 6000,
                arrows: false,
                dots: true,
                speed: 1000,
                cssEase: 'cubic-bezier(.4,.72,.22,.99)',
                draggable: false
            });
        }
    }

    //Active heor slider
    heroSlider();


    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function() {

                //active wow
                wow.init();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    });


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect  : "elastic",
            closeEffect : "elastic",
            wrapCSS     : "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function(){
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title'         : this.title,
                helpers     : {
                    title : { type : 'inside' },
                    media : {}
                },

                beforeShow : function(){
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
              enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
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
                $('.gallery-filters li .current').removeClass('current');
                $(this).addClass('current');
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


    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if ($('.masonry-gallery').length) {
            var $grid =  $('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });
        }
    }

    // masonryGridSetting();



    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.site-header .navigation').length) {
        cloneNavForSticyMenu($('.site-header .navigation'), "sticky-header");
    }

    var lastScrollTop = '';

    function stickyMenu($targetMenu, $toggleClass) {
        var st = $(window).scrollTop();
        var mainMenuTop = $('.site-header .navigation');

        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scroll down
                $targetMenu.removeClass($toggleClass);

            } else {
                // active sticky menu on scroll up
                $targetMenu.addClass($toggleClass);
            }

        } else {
            $targetMenu.removeClass($toggleClass);
        }

        lastScrollTop = st;
    }


    // HEADER STYLE 1 TOGGLE NAVIGATION SUBMENUS
    if($(".header-style-1").length) {
        var menuItem = $(".navigation-holder > ul .menu-item-has-children > a");
        var menuItemParent = menuItem.parent();

        menuItem.on("click", function(e) {
            e.preventDefault();
            var $this = $(this);
            $this.next(".sub-menu").toggleClass("open-submenu");
            $this.parent().siblings().find(".sub-menu").removeClass("open-submenu");
        })

        var navigationHolder = $(".header-style-1 .navigation-holder");
        var menuOpenBtn = $(".header-style-1 .menu-open-btn");
        var menuClosenBtn = $(".header-style-1 .close-navbar-2");

        menuOpenBtn.on("click", function() {
            navigationHolder.addClass("open-navigation-menu");
        });

        menuClosenBtn.on("click", function() {
            navigationHolder.removeClass("open-navigation-menu");
        });
    }


    /*------------------------------------------
        = Header shopping cart toggle
    -------------------------------------------*/
    if($(".mini-cart").length) {
        var cartToggleBtn = $(".cart-toggle-btn");
        var cartContent = $(".mini-cart-content");
        var body = $("body");

        cartToggleBtn.on("click", function(e) {
            cartContent.toggleClass("mini-cart-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function() {
            cartContent.removeClass("mini-cart-content-toggle");
        }).find(cartContent).on("click", function(e) {
            e.stopPropagation();
        });
    }

    /*------------------------------------------
        = Header search toggle
    -------------------------------------------*/
    if($(".header-search-form-wrapper").length) {
        var searchToggleBtn = $(".search-toggle-btn");
        var searchContent = $(".header-search-form");
        var body = $("body");

        searchToggleBtn.on("click", function(e) {
            searchContent.toggleClass("header-search-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function() {
            searchContent.removeClass("header-search-content-toggle");
        }).find(searchContent).on("click", function(e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = SERVICE SLIDER
    -------------------------------------------*/
    if ($(".service-slider").length) {
        $(".service-slider").owlCarousel({
            smartSpeed: 500,
            margin: 5,
            loop:true,
            autoplayHoverPause:true,
            dots: false,
            nav: true,
            navText: ['<i class="fi flaticon-slim-left"></i>','<i class="fi flaticon-slim-right"></i>'],
            responsive: {
                0 : {
                    items: 1
                },

                550 : {
                    items: 2
                }
            }
        });
    }


    /*------------------------------------------
        = SERVICE SLIDER S2
    -------------------------------------------*/
    if ($(".service-slider-s2").length) {
        $(".service-slider-s2").owlCarousel({
            smartSpeed: 500,
            margin: 5,
            loop:true,
            autoplayHoverPause:true,
            dots: false,
            nav: true,
            navText: ['<i class="fi flaticon-slim-left"></i>','<i class="fi flaticon-slim-right"></i>'],
            responsive: {
                0 : {
                    items: 1
                },

                550 : {
                    items: 2
                },

                992 : {
                    items: 3
                }
            }
        });
    }


    /*------------------------------------------
        = PROJECTS SLIDER
    -------------------------------------------*/
    if ($(".projects-slider").length) {
        $(".projects-slider").owlCarousel({
            loop:true,
            autoplayHoverPause:true,
            responsive: {
                0 : {
                    items: 1
                },
                550 : {
                    items: 2
                },
                992 : {
                    items: 3
                },
                1200 : {
                    items: 4
                },
                1600 : {
                    items: 5
                }
            }
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if($(".testimonial-slider".length)) {
        $(".testimonial-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 1000,
            loop:true,
            items: 1
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER S2
    -------------------------------------------*/
    if ($(".testimonial-slider-s2").length) {
        $(".testimonial-slider-s2").owlCarousel({
            //autoplay:true,
            smartSpeed: 300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            nav: true,
            navText: ['PREV  &nbsp; / &nbsp; ','NEXT'],
            dots: false,
            responsive: {
                0 : {
                    items: 1
                },

                992 : {
                    items: 2
                }
            }
        });
    }


    /*------------------------------------------
        = PARTNERS SLIDER
    -------------------------------------------*/
    if ($(".partners-slider").length) {
        $(".partners-slider").owlCarousel({
            autoplay:true,
            smartSpeed: 300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            dots: false,
            responsive: {
                0 : {
                    items: 2
                },

                550 : {
                    items: 3
                },

                992 : {
                    items: 4
                },

                1200 : {
                    items: 5
                }
            }
        });
    }


    /*------------------------------------------
        = FUNFACE
    -------------------------------------------*/
    if ($(".odometer").length) {
        $('.odometer').appear();
        $(document.body).on('appear', '.odometer', function(e) {
            var odo = $(".odometer");
            odo.each(function() {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }


/*------------------------------------------
        = PROJECT SINGLE SLIDER
    -------------------------------------------*/
    if($(".project-single-slider".length)) {
        $(".project-single-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 1000,
            loop:true,
            items: 1,
            dots: false,
            nav: true,
            navText: ['<i class="fi flaticon-slim-left"></i>','<i class="fi flaticon-slim-right"></i>'],
        });
    }


    /*------------------------------------------
        = TOUCHSPIN FOR PRODUCT SINGLE PAGE
    -------------------------------------------*/
    if ($("input[name='product-count']").length) {
        $("input[name='product-count']").TouchSpin({
            verticalbuttons: true
        });
    }


    /*------------------------------------------
        = SHOP DETAILS PAGE PRODUCT SLIDER
    -------------------------------------------*/
    if ($(".shop-single-slider").length) {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            focusOnSelect: true,
            prevArrow: '<i class="nav-btn nav-btn-lt ti-arrow-left"></i>',
            nextArrow: '<i class="nav-btn nav-btn-rt ti-arrow-right"></i>',

            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                    slidesToShow: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]

        });
    }


    /*------------------------------------------
        = POST SLIDER
    -------------------------------------------*/
    if($(".post-slider".length)) {
        $(".post-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 1000,
            loop:true,
            nav: true,
            navText: ['<i class="ti-arrow-left"></i>','<i class="ti-arrow-right"></i>'],
            dots: false,
            items: 1
        });
    }


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",

                subject: "required"
            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email address",
                subject: "Please enter contact subject"
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }


    // side menu scrollbar
    if($(".header-style-1").length) {
        new PerfectScrollbar('.header-style-1 .navbar-nav');
    }


    // Mouse pointer event style
    $(".page-wrapper").prepend("<div class='mouse-follower'></div>");

    function showCoords(event) {
        var x = event.pageX;
        var y = event.pageY;
        var follower = $(".mouse-follower");
        follower.css({
            left: x + (-12.5) + "px",
            top: y + (-12.5) + "px",
        });

    }

    $(window).on("mousemove", function(event) {
        showCoords(event);
    });

    $("li, a, button, input, textarea, .navbar-toggles").mouseenter(function () {
        $(".mouse-follower").css("opacity", "0");
        $("li, a, button, input, textarea, .navbar-toggles").mouseleave(function () {
            $(".mouse-follower").css("opacity", "1");
        });
    });



    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
        $(window).on('load', function() {

            preloader();

            sliderBgSetting();

            toggleMobileNavigation();

            smallNavFunctionality();

            sortingGallery();

        });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {
		if ($(".site-header").length) {
            stickyMenu( $('.site-header .navigation'), "sticky-on" );
        }
    });


    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function() {

        toggleClassForSmallNav();

        clearTimeout($.data(this, 'resizeTimer'));

        $.data(this, 'resizeTimer', setTimeout(function() {
            smallNavFunctionality();
        }, 200));

    });

})(window.jQuery);
