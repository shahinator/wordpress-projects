<?php
/**
 * samharam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package samharam
 */


define('SAMHARAM_THEME', 'samharam - WordPress Theme');
define('SAMHARAM_VERSION', '1.0.0');
define('SAMHARAM_THEMEROOT', get_template_directory_uri());
define('SAMHARAM_THEMEROOT_DIR', get_template_directory());
define('SAMHARAM_IMAGES', SAMHARAM_THEMEROOT . '/images');
define('SAMHARAM_IMAGES_DIR', SAMHARAM_THEMEROOT_DIR . '/images');
define('SAMHARAM_CSS', SAMHARAM_THEMEROOT . '/css');
define('SAMHARAM_CSS_DIR', SAMHARAM_THEMEROOT_DIR . '/css');
define('SAMHARAM_SCRIPTS', SAMHARAM_THEMEROOT . '/js');
define('SAMHARAM_SCRIPTS_DIR', SAMHARAM_THEMEROOT_DIR . '/js');



if ( ! function_exists( 'samharam_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function samharam_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on samharam, use a find and replace
		 * to change 'samharam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'samharam', get_template_directory() . '/languages' );

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
			'header' => esc_html__( 'Header Menu', 'samharam' ),
			'footer' => esc_html__( 'Footer Menu', 'samharam' ),
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
		add_theme_support( 'custom-background', apply_filters( 'samharam_custom_background_args', array(
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
add_action( 'after_setup_theme', 'samharam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function samharam_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'samharam_content_width', 640 );
}
add_action( 'after_setup_theme', 'samharam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function samharam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'samharam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'samharam' ),
		'id'            => 'footer_one',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'samharam' ),
		'id'            => 'footer_two',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'samharam' ),
		'id'            => 'footer_three',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'samharam' ),
		'id'            => 'footer_four',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Five', 'samharam' ),
		'id'            => 'footer_five',
		'description'   => esc_html__( 'Add widgets here.', 'samharam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'samharam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function samharam_scripts() {




	// dependencies | 3rd party components
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900', false );
    wp_enqueue_style('bootstrap', SAMHARAM_CSS . '/bootstrap.min.css', null, SAMHARAM_VERSION);
    wp_enqueue_style('linearicons', SAMHARAM_CSS . '/linearicons-fonts.css', null, SAMHARAM_VERSION);
    wp_enqueue_style('fontawesome', SAMHARAM_CSS . '/font-awesome.min.css', null, SAMHARAM_VERSION);
	wp_enqueue_style('animate', SAMHARAM_CSS . '/animate.css', null, SAMHARAM_VERSION);
	wp_enqueue_style('magnific', SAMHARAM_CSS . '/magnific-popup.css', null, SAMHARAM_VERSION);
    // meanmenu
    wp_enqueue_style('meanmenu', SAMHARAM_CSS . '/cookcodesmenu.css', null, SAMHARAM_VERSION);
    // owl.carousel
    wp_enqueue_style('owl.carousel', SAMHARAM_CSS . '/owl.carousel.min.css', null, SAMHARAM_VERSION);
    // owl.theme
    wp_enqueue_style('owl.theme', SAMHARAM_CSS . '/owl.theme.default.min.css', null, SAMHARAM_VERSION);	
    wp_enqueue_style('fullscreenDemo-js', SAMHARAM_CSS . '/fullscreenDemo.css', null, SAMHARAM_VERSION);	
    wp_enqueue_style('vidbg-js', SAMHARAM_CSS . '/vidbg.css', null, SAMHARAM_VERSION);	




	wp_enqueue_style( 'samharam-style', get_stylesheet_uri() );



	// dependencies | 3rd party components
    wp_enqueue_script('bootstrap', SAMHARAM_SCRIPTS . '/bootstrap.min.js', array('jquery'), SAMHARAM_VERSION, true);
    wp_enqueue_script('plugins', SAMHARAM_SCRIPTS . '/plugins.js', array('jquery'), SAMHARAM_VERSION, true);   
    wp_enqueue_script('magnific', SAMHARAM_SCRIPTS . '/jquery.magnific-popup.min.js', array('jquery'), SAMHARAM_VERSION, true);   
    wp_enqueue_script('meanmenu', SAMHARAM_SCRIPTS . '/jquery.cookcodesmenu.js', array('jquery'), SAMHARAM_VERSION, true);    
    wp_enqueue_script('owl.carousel', SAMHARAM_SCRIPTS . '/owl.carousel.min.js', array('jquery'), SAMHARAM_VERSION, true);
    wp_enqueue_script('plugins', SAMHARAM_SCRIPTS . '/plugins.js', array('jquery'), SAMHARAM_VERSION, true);
    wp_enqueue_script('jquery.mixitup', SAMHARAM_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), SAMHARAM_VERSION, true);  
    wp_enqueue_script('jquery.background', SAMHARAM_SCRIPTS . '/background.js', array('jquery'), SAMHARAM_VERSION, true);  
    wp_enqueue_script('vidbg-js', SAMHARAM_SCRIPTS . '/vidbg.js', array('jquery'), SAMHARAM_VERSION, true);  
    // theme scripts
	wp_enqueue_script('parveen-custom', SAMHARAM_SCRIPTS . '/main.js', array('jquery'), SAMHARAM_VERSION, true);

	wp_enqueue_script( 'samharam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'samharam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'samharam_scripts' );

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


//custom options 
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm-plugin/required-plugins.php';
require get_template_directory() . '/inc/custom_post.php';
require get_template_directory() . '/inc/image_resizer.php';
require get_template_directory() . '/inc/settings_panel.php';
require get_template_directory() . '/inc/theme_config.php';

function samharam_logo_url( $default){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if ( has_custom_logo() ) {
	        $default = $logo[0];
	}
	
	return $default; 
}


// samharam blog title
function samharam_blog_title(){
	global $samharam_opt;
	if(isset($samharam_opt)) { 
		echo esc_html($samharam_opt['samharam_blog_header_text']); 
	} 
	else { 
		esc_html_e('Blog', 'samharam');
	}
}

// samharam Single blog details
function samharam_blog_header_details(){
	global $samharam_opt;
	if(isset($samharam_opt)) { 
		echo esc_html($samharam_opt['samharam_blog_header_details']); 
	} 
	else { 
		esc_html_e('Blog Details', 'samharam');
	}
}

// Main Menu
function samharam_main_menu(){    
    wp_nav_menu(array(
        'menu' => 'header',
        'theme_location' => 'header',
        'container' => 'div',
        'container_class' => 'main-menu',
        'container_id' => 'zaraat_main_menu',
        'menu_class' => '',
        'menu_id' => 'menu'
        )
    );
}

//make slug 
function samharam_make_slug($str) {
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


add_action('get_header', 'my_filter_head');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
}
