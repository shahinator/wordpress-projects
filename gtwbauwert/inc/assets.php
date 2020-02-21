<?php

if (!defined('ABSPATH')) { die('Direct access forbidden.'); }
/**
 * Enqueue all theme scripts and styles
 *
 * ** REGISTERING THEME ASSETS
 * **
 * Enqueue styles.
 */
if (!is_admin()) {
    //Theme CSS file Include Here      
    wp_enqueue_style('themify-icons', APPLICATION_CSS . '/themify-icons.css', '', null);
    wp_enqueue_style('flaticon', APPLICATION_CSS . '/flaticon.css', '', null);
    wp_enqueue_style('bootstrap', APPLICATION_CSS . '/bootstrap.min.css', '', null);
	wp_enqueue_style('animate', APPLICATION_CSS . '/animate.css', '', null);
	wp_enqueue_style('owl.carousel', APPLICATION_CSS . '/owl.carousel.css', '', null);  
	wp_enqueue_style('owl.theme', APPLICATION_CSS . '/owl.theme.css', '', null);  
	wp_enqueue_style('owl.transitions', APPLICATION_CSS . '/owl.transitions.css', '', null);  
	wp_enqueue_style('slick-css', APPLICATION_CSS . '/slick.css', '', null);  
	wp_enqueue_style('slick-theme', APPLICATION_CSS . '/slick-theme.css', '', null);  
	wp_enqueue_style('fancybox-css', APPLICATION_CSS . '/jquery.fancybox.css', '', null);  
	wp_enqueue_style('perfect-scrollbar-css', APPLICATION_CSS . '/perfect-scrollbar.css', '', null);  
	wp_enqueue_style('ui-min', APPLICATION_CSS . '/jquery-ui.min.css', '', null);
	wp_enqueue_style('font-awesome', APPLICATION_CSS . '/font-awesome.min.css', '', null); 
	wp_enqueue_style('theme-style', APPLICATION_CSS . '/style.css', '', null);  
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
    wp_enqueue_script('jquery-plugin-collection', APPLICATION_SCRIPTS . '/jquery-plugin-collection.js', array('jquery'), '', true);
    wp_enqueue_script('script.js-js', APPLICATION_SCRIPTS . '/script.js', array('jquery'), '', true);
	wp_enqueue_script( 'application-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'application-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
