<?php

if ( ! function_exists('xander_custompost_registration') ) {
	function xander_custompost_registration() {
		//custom post for section
		register_post_type('xander_section', array(
			'labels' => array(
				'name'                  => _x( 'Sections', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Section', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Sections', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Sections', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Section:', 'xander' ),
				'all_items'             => esc_html__( 'All Sections', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Section', 'xander' ),
				'add_new'               => esc_html__( 'Add Section', 'xander' ),
				'new_item'              => esc_html__( 'New Section', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Section', 'xander' ),
				'update_item'           => esc_html__( 'Update Section', 'xander' ),
				'view_item'             => esc_html__( 'View Section', 'xander' ),
				'search_items'          => esc_html__( 'Search Section', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-portfolio',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post slider
		register_post_type('xanderSlider', array(
			'labels' => array(
				'name'                  => _x( 'Sliders', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Sliders', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Sliders', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Slider:', 'xander' ),
				'all_items'             => esc_html__( 'All Sliders', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Slider', 'xander' ),
				'add_new'               => esc_html__( 'Add Slider', 'xander' ),
				'new_item'              => esc_html__( 'New Slider', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Slider', 'xander' ),
				'update_item'           => esc_html__( 'Update Slider', 'xander' ),
				'view_item'             => esc_html__( 'View Slider', 'xander' ),
				'search_items'          => esc_html__( 'Search Slider', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor'),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-admin-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Services
		register_post_type('xanderServices', array(
			'labels' => array(
				'name'                  => _x( 'Services', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Services', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Services', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Service:', 'xander' ),
				'all_items'             => esc_html__( 'All Services', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Service', 'xander' ),
				'add_new'               => esc_html__( 'Add Service', 'xander' ),
				'new_item'              => esc_html__( 'New Service', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Service', 'xander' ),
				'update_item'           => esc_html__( 'Update Service', 'xander' ),
				'view_item'             => esc_html__( 'View Service', 'xander' ),
				'search_items'          => esc_html__( 'Search Service', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-align-left',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Teams
		register_post_type('xanderTeams', array(
			'labels' => array(
				'name'                  => _x( 'Teams', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Teams', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Teams', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Team:', 'xander' ),
				'all_items'             => esc_html__( 'All Teams', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Team', 'xander' ),
				'add_new'               => esc_html__( 'Add Team', 'xander' ),
				'new_item'              => esc_html__( 'New Team', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Team', 'xander' ),
				'update_item'           => esc_html__( 'Update Team', 'xander' ),
				'view_item'             => esc_html__( 'View Team', 'xander' ),
				'search_items'          => esc_html__( 'Search Team', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Testimonials
		register_post_type('xanderTestimonials', array(
			'labels' => array(
				'name'                  => _x( 'Testimonials', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Testimonials', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Testimonials', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Testimonial:', 'xander' ),
				'all_items'             => esc_html__( 'All Testimonials', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Testimonial', 'xander' ),
				'add_new'               => esc_html__( 'Add Testimonial', 'xander' ),
				'new_item'              => esc_html__( 'New Testimonial', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Testimonial', 'xander' ),
				'update_item'           => esc_html__( 'Update Testimonial', 'xander' ),
				'view_item'             => esc_html__( 'View Testimonial', 'xander' ),
				'search_items'          => esc_html__( 'Search Testimonial', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-editor-quote',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Works
		register_post_type('xanderWorks', array(
			'labels' => array(
				'name'                  => _x( 'Works', 'Post Type General Name', 'xander' ),
				'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'xander' ),
				'menu_name'             => esc_html__( 'Works', 'xander' ),
				'name_admin_bar'        => esc_html__( 'Works', 'xander' ),
				'parent_item_colon'     => esc_html__( 'Parent Work:', 'xander' ),
				'all_items'             => esc_html__( 'All Works', 'xander' ),
				'add_new_item'          => esc_html__( 'Add New Work', 'xander' ),
				'add_new'               => esc_html__( 'Add Work', 'xander' ),
				'new_item'              => esc_html__( 'New Work', 'xander' ),
				'edit_item'             => esc_html__( 'Edit Work', 'xander' ),
				'update_item'           => esc_html__( 'Update Work', 'xander' ),
				'view_item'             => esc_html__( 'View Work', 'xander' ),
				'search_items'          => esc_html__( 'Search Work', 'xander' ),
				'not_found'             => esc_html__( 'Not found', 'xander' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'xander' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-images-alt2',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);



	}
	add_action('init', 'xander_custompost_registration');
}


/*Custom Texonomy Portfolio Start Here*/
add_action( 'init', 'custom_taxonomy' );

function custom_taxonomy() {
	register_taxonomy(
		'xanderworks_cat',
		'xanderworks',
		array(
			'hierarchical'          => true,
			'label'                         => 'Work Categories',  //Display name
			'query_var'             => true,
			'rewrite'                       => array(
				'slug'                  => 'work-category', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);
}


/**
 *  Builder auto activate for certain post types
 *  @internal
 */

function xander_section_thz_filter_auto_activate_builder() {

    $auto = array(
        'post' => true,
        'page' => true,
        'xander_section' => true,
    );

    return  $auto;
}
add_filter( 'fw_ext_page_builder_settings_options_post_types_default_value', 'xander_section_thz_filter_auto_activate_builder' );
function xander_admin_menu() {
	if (defined('FW')) {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu(array('id' => 'xander_ext', 'title' => '  Extensions', 'href' => admin_url('admin.php?page=fw-extensions')));
	}
}

add_action('admin_bar_menu', 'xander_admin_menu',2000);





