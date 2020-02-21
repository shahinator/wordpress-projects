<?php
/**
 * Application functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Application
 */

define('APPLICATION_THEME', 'Application - WordPress Theme');
define('APPLICATION_VERSION', '1.0.0');
define('APPLICATION_THEMEROOT', get_template_directory_uri());
define('APPLICATION_THEMEROOT_DIR', get_template_directory());
define('APPLICATION_IMAGES', APPLICATION_THEMEROOT . '/assets/images');
define('APPLICATION_IMAGES_DIR', APPLICATION_THEMEROOT_DIR . '/assets/images');
define('APPLICATION_CSS', APPLICATION_THEMEROOT . '/assets/css');
define('APPLICATION_CSS_DIR', APPLICATION_THEMEROOT_DIR . '/assets/css');
define('APPLICATION_SCRIPTS', APPLICATION_THEMEROOT . '/assets/js');
define('APPLICATION_SCRIPTS_DIR', APPLICATION_THEMEROOT_DIR . '/assets/js');
if ( ! function_exists( 'application_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function application_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Application, use a find and replace
		 * to change 'application' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'application', get_template_directory() . '/languages' );

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
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header' => esc_html__( 'Header Menu', 'application' ),
			'footer' => esc_html__( 'Footer Menu', 'application' ),
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
		add_theme_support( 'custom-background', apply_filters( 'application_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'application_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function application_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'application_content_width', 640 );
}
add_action( 'after_setup_theme', 'application_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function application_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'application' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'application' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Content', 'application' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add Footer Content Here.', 'application' ),
		'before_widget' => '<div class="col col-lg-3 col-md-3 col-sm-6"><div class="widget address-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => ' <div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Features Content', 'application' ),
		'id'            => 'features_content',
		'description'   => esc_html__( 'Add Features Content Here.', 'application' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 style="display:none>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'application_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* TGM
*/


require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm-plugin/required-plugins.php';
/**
 * theme additions.
 */

require get_template_directory() . '/inc/resizer.php';
require get_template_directory() . '/inc/theme_config.php';
require get_template_directory() . '/inc/custom_post.php';
require get_template_directory() . '/inc/assets.php';

function application_make_slug($str) {
    $patterns = array(
        "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
        "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
        "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
    );
    $replacements = array(
        "", 
        "", 
        "-" 
    );

    $str = preg_replace($patterns, $replacements, strip_tags($str));
    return strtolower(trim($str, '-'));
}

function my_multi_col($content){


 }