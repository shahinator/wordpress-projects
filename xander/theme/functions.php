<?php
/**
 * Xander functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xander
 */
define('XANDER_THEME', 'Xander');
define('XANDER_VERSION', '1.1.0');
define('XANDER_THEMEROOT', get_template_directory_uri());
define('XANDER_THEMEROOT_DIR', get_template_directory());
define('XANDER_IMAGES', XANDER_THEMEROOT . '/images');
define('XANDER_DIR', XANDER_THEMEROOT_DIR . '/images');
define('XANDER_CSS', XANDER_THEMEROOT . '/css');
define('XANDER_CSS_DIR', XANDER_THEMEROOT_DIR . '/css');
define('XANDER_SCRIPTS', XANDER_THEMEROOT . '/js');
define('XANDER_SCRIPTS_DIR', XANDER_THEMEROOT_DIR . '/js');
define('XANDER_REMOTE_CONTENT', 'https://irs-soft.com/remote-content/xander/');


if ( ! function_exists( 'xander_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xander_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Xander, use a find and replace
		 * to change 'xander' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'xander', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'blog-thumb', 730, 450, true ); // (cropped)

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'xander' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'xander_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );



		$args = array(
			'width'         => 1920,
			'height'        => 400,
			'default-image' => XANDER_IMAGES . '/banner.jpg',
		);
		add_theme_support( 'custom-header', $args );



	}
endif;
add_action( 'after_setup_theme', 'xander_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xander_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'xander_content_width', 640 );
}
add_action( 'after_setup_theme', 'xander_content_width', 0 );


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* 
Core file Include
*/
require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm-plugin/required-plugins.php';
require get_template_directory() . '/inc/theme-metabox.php';
require get_template_directory() . '/inc/theme-options.php';
require get_template_directory() . '/inc/Xander_Comment_Walker.php';



function cleanhit_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'cleanhit_add_editor_styles' );

