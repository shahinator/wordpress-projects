<?php

if (!defined('ABSPATH')) { die('Direct access forbidden.'); }
/**
 * Enqueue all theme scripts and styles
 *
 * ** REGISTERING THEME ASSETS
 * **
 * Enqueue styles.
 */


/**
 * Enqueue google fonts.
 */
function xander_fonts_url(){
	$fonts_url = '';
	 
	/* Translators: If there are characters in your language that are not
	* supported by Droid Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$ubuntu = _x( 'on', 'Ubuntu font: on or off', 'xander' );
	$roboto = _x( 'on', 'Roboto font: on or off', 'xander' );
	
	 
	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	if ( 'off' !== $ubuntu || 'off' !== $roboto ) {
	$font_families = array();
	
	if ( 'off' !== $ubuntu ) {
	$font_families[] = 'Ubuntu:400,500,700';
	}
	 
	if ( 'off' !== $roboto ) {
	$font_families[] = 'Roboto:300,400,500,700';
	}
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),	
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );	

}



if (!is_admin()) {
    // dependencies | 3rd party components
	// Add custom fonts, used in the main stylesheet.
    //wp_enqueue_style('gfonts',xander_fonts_url(), array(), '1.0.0'); 
    wp_enqueue_style( 'xander-fonts', xander_fonts_url(), array(), null );	
    //Theme CSS file Include Here  
    
    wp_enqueue_style('bootstrap', XANDER_CSS . '/bootstrap.min.css', '', null);
	wp_enqueue_style('font-awesome-css', XANDER_CSS . '/font-awesome.min.css', '', null);
	wp_enqueue_style('elegant-Icons', XANDER_CSS . '/elegant.css', '', null);
    wp_enqueue_style( 'animate.min-css', XANDER_CSS . '/animate.min.css');
    wp_enqueue_style( 'owl-css', XANDER_CSS . '/owl.css');
    wp_enqueue_style( 'smslider-css', XANDER_CSS . '/smslider.css');
    wp_enqueue_style( 'theme-fw-utility', XANDER_CSS . '/theme-fw-utility.css');
    wp_enqueue_style( 'theme-wp-utility', XANDER_CSS . '/theme-wp-utility.css');
	wp_enqueue_style('typography-core', XANDER_CSS . '/typography.css', '', XANDER_VERSION);
	wp_enqueue_style('theme-core', XANDER_CSS . '/core-style.css', '', XANDER_VERSION);
	wp_enqueue_style( 'xander-style', get_stylesheet_uri() );
	wp_style_add_data( 'xander-style', 'rtl', 'replace' );
	wp_enqueue_style('responsive-css', XANDER_CSS . '/responsive.css', '', XANDER_VERSION);

}

/**
 * Enqueue scripts.
 */
if (!is_admin()) {
	//Theme JS file Include Here
	



    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('popper', XANDER_SCRIPTS . '/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', XANDER_SCRIPTS . '/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints-js', XANDER_SCRIPTS . '/jquery.waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('countup', XANDER_SCRIPTS . '/jquery.countup.min.js', array('jquery'), '', true);
	wp_enqueue_script('dyscrollup-js', XANDER_SCRIPTS . '/dyscrollup.js', array('jquery'), '', true);
	wp_enqueue_script('isotope-js', XANDER_SCRIPTS . '/isotope.pkgd.min.js', array('jquery'), '', true);
	wp_enqueue_script('owl.carousel-js', XANDER_SCRIPTS . '/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('easing-js', XANDER_SCRIPTS . '/jquery.easing.min.js', array('jquery'), '', true);
	wp_enqueue_script('froogaloop2-js', XANDER_SCRIPTS . '/froogaloop2.min.js', array('jquery'), '', true);
	wp_enqueue_script('html5lightbox-js', XANDER_SCRIPTS . '/html5lightbox.js', array('jquery'), '', true);      
	wp_enqueue_script('fw-form-helpers', XANDER_SCRIPTS . '/fw-form-helpers.js', array('jquery'), '', true);
	wp_enqueue_script('smslider-js', XANDER_SCRIPTS . '/jquery.smslider.min.js', array('jquery'), '', true);
	wp_enqueue_script('jav-js', XANDER_SCRIPTS . '/jquery.nav.js', array('jquery'), '', true);
    wp_enqueue_script('main-js', XANDER_SCRIPTS . '/main.js', array('jquery'), '', true);
	wp_enqueue_script( 'xander-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'xander-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}



}
