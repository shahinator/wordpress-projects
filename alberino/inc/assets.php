<?php

/**
 * Enqueue google fonts.
 */

function application_fonts_url(){

    $fonts_url = '';
    $Raleway = _x( 'on','Raleway: on or off', 'application' );


    if ( 'off' !== $Raleway ) {
        $font_families = array();
        if ( 'off' !== $Raleway ) {
            $font_families[] = 'Raleway:300,400,500,600,700,800,900';
        }
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext,cyrillic-ext,cyrillic,vietnamese,greek,greek-ext' ),
        );
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    return esc_url_raw( $fonts_url );
}


if (!defined('ABSPATH')) { die('Direct access forbidden.'); }
/**
 * Enqueue all theme scripts and styles
 *
 * ** REGISTERING THEME ASSETS
 * **
 * Enqueue styles.
 */
if (!is_admin()) {
    // dependencies | 3rd party components
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('gfonts',application_fonts_url(), array(), '1.0.0'); 
    //Theme CSS file Include Here  
    
    wp_enqueue_style('bootstrap', APPLICATION_CSS . '/bootstrap.min.css', '', null);
	wp_enqueue_style('animate', APPLICATION_CSS . '/animate.css', '', null);
	wp_enqueue_style('ui-min', APPLICATION_CSS . '/jquery-ui.min.css', '', null);
	wp_enqueue_style('font-awesome', APPLICATION_CSS . '/font-awesome.min.css', '', null);
	wp_enqueue_style('magnific-popup', APPLICATION_CSS . '/magnific-popup.css', '', null);
	wp_enqueue_style('owl.carousel-css', APPLICATION_CSS . '/owl.carousel.min.css', '', null);  
	wp_enqueue_style('owl.theme.default', APPLICATION_CSS . '/owl.theme.default.min.css', '', null);  
	wp_enqueue_style( 'application-style', get_stylesheet_uri() );
}

/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    //Theme JS file Include Here
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('bootstrap', APPLICATION_SCRIPTS . '/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('proper-js', APPLICATION_SCRIPTS . '/popper.min.js', array('jquery'), '', true);
	wp_enqueue_script('magnific-popup', APPLICATION_SCRIPTS . '/jquery.magnific-popup.min.js', array('jquery'), '', true);
	wp_enqueue_script('ui-css', APPLICATION_SCRIPTS . '/jquery-ui.min.js', array('jquery'), '', true);

    wp_enqueue_script('owl-carousel-js', APPLICATION_SCRIPTS . '/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('wow', APPLICATION_SCRIPTS . '/wow.min.js', array('jquery'), '', true);    
	wp_enqueue_script('imagesloaded-js', APPLICATION_SCRIPTS . '/imagesloaded.pkgd.min.js', array('jquery'), '', true);
	wp_enqueue_script('mixitup-js', APPLICATION_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), '', true);
	wp_enqueue_script('counterup-js', APPLICATION_SCRIPTS . '/jquery.counterup.min.js', array('jquery'), '', true);
	wp_enqueue_script('waypoints-js', APPLICATION_SCRIPTS . '/waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('main', APPLICATION_SCRIPTS . '/main.js', array('jquery'), '', true);
	wp_enqueue_script( 'application-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'application-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
