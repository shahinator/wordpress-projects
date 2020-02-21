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

	wp_enqueue_style( 'application-style', get_stylesheet_uri() );
}

/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    //Theme JS file Include Here
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker'); 
	wp_enqueue_script( 'application-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'application-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
