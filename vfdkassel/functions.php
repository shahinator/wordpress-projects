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
define('APPLICATION_IMAGES', APPLICATION_THEMEROOT . '/images');
define('APPLICATION_IMAGES_DIR', APPLICATION_THEMEROOT_DIR . '/images');
define('APPLICATION_CSS', APPLICATION_THEMEROOT . '/css');
define('APPLICATION_CSS_DIR', APPLICATION_THEMEROOT_DIR . '/css');
define('APPLICATION_SCRIPTS', APPLICATION_THEMEROOT . '/js');
define('APPLICATION_SCRIPTS_DIR', APPLICATION_THEMEROOT_DIR . '/js');
define('APPLICATION_DATABASE_DIR', APPLICATION_THEMEROOT_DIR . '/database');
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
		'before_widget' => '<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"><div class="widget"><div class="single-footer">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Topper', 'application' ),
		'id'            => 'topper',
		'description'   => esc_html__( 'Add Footer Topper Here.', 'application' ),
		'before_widget' => '<div class="inner-map">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="display:none">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Google Map', 'application' ),
		'id'            => 'map',
		'description'   => esc_html__( 'Add Google Map Here.', 'application' ),
		'before_widget' => '<div class="inner-map">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="display:none">',
		'after_title'   => '</h2>',
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

function vdf_review_shortcode(){
	ob_start();?>
	<div class="module module-blue review-area">
		<div class="container rating">
			<div class="row">
				<div class="col-lg-4 mx-auto text-center">
					<h3>Rezension </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<div class="mystars">
						<ul class="custome-icons-area">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
	
						<div class="review owl-carousel">
							<?php
								global $wpdb;
								$customers = $wpdb->get_results("SELECT * FROM wp_review");
							?>
							<?php 
	
	
							foreach($customers as $customer){ 
								if( $customer->status == 'fav'){
							?>                       
								<div class="item">
									<blockquote>„ <?php echo $customer ->text; ?>“
									<footer><?php echo $customer ->name; ?></footer>
									</blockquote>
								</div>   
	
							<?php 
								}
								} 
							?>                         
						</div>
				</div>
	
			</div>
		</div>
	</div>
	<?php
	$review= ob_get_clean();
	return $review;
	}
add_shortcode('review','vdf_review_shortcode' );
//logo shortcode 
function vdf_logo_shortcode(){
	ob_start();?>
	<div class="partner-logo-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-slider owl-carousel">
						<?php 
							$slider = new WP_Query(array(
							'post_type' => 'partners',
							'posts_per_page'=> -1,
							'order' => 'ASC'
							));	
							while($slider -> have_posts()): $slider->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
						?>
						<div class="single-logo">
							<a href="<?php the_field('compnay_url'); ?>" target="_blank">
								<img src="<?php echo $url; ?>" alt="<?php the_title();?>">
							</a>
						</div>
						<?php
							endwhile; // End of the loop.
							wp_reset_query();
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$logo= ob_get_clean();
	return $logo;
	}
add_shortcode('partners_logo','vdf_logo_shortcode' );

//php data submit
if(isset($_POST['BtnSubmit'])){
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	global $wpdb;	
	$data_array = array(
		'star'=>$_POST['rating'],
		'title'=>$_POST['title'],
		'text'=>$_POST['text'],
		//'email'=>$_POST['email'],
		'name'=>$_POST['name']
	);

	//print_r($data_array);
	//die;



	$table_name ='wp_review';

	$rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);

	//echo '<pre>';

	//print_r($data_array);
	//print_r($rowResult);
//	var_dump($rowResult);
	//exit;

	//$rowResult return 1
	if($rowResult ==1){
		
		$location = get_site_url() . "/danke-fuer-ihre-bewertung";
		wp_redirect( $location, 301 );
		exit;
	}else{
		echo "Errror";
	}


}


// KLICKTIPP API INTEGRATION WITH DATABASE 

// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
// 	return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Hier Anfordern</span></button>";
	
// 	//echo "Welcome";
// }

	


// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
	

// 	if(!empty($_POST)) {
// 		require get_template_directory(). '/database/contact-all-campaign_v3.php';
// 	}
		
// 		return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Send Us</span></button>";
// 	}

add_filter( 'gform_submit_button', 'add_onclick', 10, 2 );
function add_onclick( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $onclick = $input->getAttribute( 'onclick' );
    $onclick .= " addAdditionalAction('Additional Action');"; // Here's the JS function we're calling on click.
    $input->setAttribute( 'onclick', $onclick );
	return $dom->saveHtml( $input );
	return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Send Us</span></button>";
	if($button) {
		require get_template_directory(). '/database/contact-all-campaign_v3.php';
	}
}


add_action( 'gform_after_submission', 'gform_submit_button', 10, 2 );
function gform_submit_button( $button, $form ) {
	return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Send Us</span></button>";
	if($button) {
		require get_template_directory(). '/database/contact-all-campaign_v3.php';
	}   
}