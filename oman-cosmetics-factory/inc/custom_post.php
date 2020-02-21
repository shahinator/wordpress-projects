<?php 
// Register Custom Post Type
function oman_cosmetics_factory_custom_post() {
	
	//  slider post type
	$slider_labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Slider', 'application' ),
		'name_admin_bar'      => esc_html__( 'Slider', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Slider:', 'application' ),
		'all_items'           => esc_html__( 'All Slider', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Slider', 'application' ),
		'add_new'             => esc_html__( 'Add New Slider', 'application' ),
		'new_item'            => esc_html__( 'New Slider', 'application' ),
		'edit_item'           => esc_html__( 'Edit Slider', 'application' ),
		'update_item'         => esc_html__( 'Update Slider', 'application' ),
		'view_item'           => esc_html__( 'View Slider', 'application' ),
		'search_items'        => esc_html__( 'Search Slider', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$slider_args = array(
		'label'               => esc_html__( 'Slider', 'application' ),
		'description'         => esc_html__( 'Slider', 'application' ),
		'labels'              => $slider_labels,
		'supports'            => array( 'title', 'thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $slider_args );
	//  post featured type
	$featured_labels = array(
		'name'                => _x( 'featured', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'featured', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'featured', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'featured', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent featured:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All featured', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New featured', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New featured', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New featured', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit featured', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update featured', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View featured', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search featured', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);	
	$featured_args = array(
		'label'               => esc_html__( 'featured', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'featured', 'oman-cosmetics-factory' ),
		'labels'              => $featured_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-settings',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'oman_featured', $featured_args );


	
	//  capabilities post type
	$capabilities_labels = array(
		'name'                => _x( 'Capabilities', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'Capabilities', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'Capabilities', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'Capabilities', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent Capabilities:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All Capabilities', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New Capabilities', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New Capabilities', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New Capabilities', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit Capabilities', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update Capabilities', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View Capabilities', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search Capabilities', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);
	
	$capabilities_args = array(
		'label'               => esc_html__( 'Capabilities', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'Capabilities', 'oman-cosmetics-factory' ),
		'labels'              => $capabilities_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-page',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'capabilities', $capabilities_args );

	//  Why Choose Us post type
	$choose_labels = array(
		'name'                => _x( 'Mission and Vision', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'Mission and Vision', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'Mission and Vision', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'Mission and Vision', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent Mission and Vision:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All Mission and Vision', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New Mission and Vision', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New Mission and Vision', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New Mission and Vision', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit Mission and Vision', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update Mission and Vision', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View Mission and Vision', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search Mission and Vision', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);
	
	$choose_args = array(
		'label'               => esc_html__( 'Mission and Vision', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'Mission and Vision', 'oman-cosmetics-factory' ),
		'labels'              => $choose_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-contract',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'oman_choose', $choose_args );

	//  Team post type
	$team_labels = array(
		'name'                => _x( 'Message', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'Message', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'Message', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'Message', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent Message:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All Message', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New Message', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New Message', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New Message', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit Message', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update Message', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View Message', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search Message', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);
	
	$team_args = array(
		'label'               => esc_html__( 'Message', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'Message', 'oman-cosmetics-factory' ),
		'labels'              => $team_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-page',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'oman_team', $team_args );


	//  Gallry post type
	$features_labels = array(
		'name'                => _x( 'Features', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'Features', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'Features', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'Features', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent Features:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All Features', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New Features', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New Features', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New Features', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit Features', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update Features', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View Features', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search Features', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);
	
	$features_args = array(
		'label'               => esc_html__( 'Fetaures', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'Fetaures', 'oman-cosmetics-factory' ),
		'labels'              => $features_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'oman_cosmetics_factory_features', $features_args );



	//  Team Members post type
	$team_members_labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'oman-cosmetics-factory' ),
		'singular_name'       => _x( 'Team Members', 'Post Type Singular Name', 'oman-cosmetics-factory' ),
		'menu_name'           => esc_html__( 'Team Members', 'oman-cosmetics-factory' ),
		'name_admin_bar'      => esc_html__( 'Team Members', 'oman-cosmetics-factory' ),
		'parent_item_colon'   => esc_html__( 'Parent Team Members:', 'oman-cosmetics-factory' ),
		'all_items'           => esc_html__( 'All Team Members', 'oman-cosmetics-factory' ),
		'add_new_item'        => esc_html__( 'Add New Team Members', 'oman-cosmetics-factory' ),
		'add_new'             => esc_html__( 'Add New Team Members', 'oman-cosmetics-factory' ),
		'new_item'            => esc_html__( 'New Team Members', 'oman-cosmetics-factory' ),
		'edit_item'           => esc_html__( 'Edit Team Members', 'oman-cosmetics-factory' ),
		'update_item'         => esc_html__( 'Update Team Members', 'oman-cosmetics-factory' ),
		'view_item'           => esc_html__( 'View Team Members', 'oman-cosmetics-factory' ),
		'search_items'        => esc_html__( 'Search Team Members', 'oman-cosmetics-factory' ),
		'not_found'           => esc_html__( 'Not found', 'oman-cosmetics-factory' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'oman-cosmetics-factory' ),
	);
	
	$team_args = array(
		'label'               => esc_html__( 'Team Memvers', 'oman-cosmetics-factory' ),
		'description'         => esc_html__( 'Team Memvers', 'oman-cosmetics-factory' ),
		'labels'              => $team_members_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'oman_cosmetics_factory_team', $team_args );



	//  Product post type
	$product_labels = array(
		'name'                => _x( 'Product', 'Post Type General Name', 'parveen' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'parveen' ),
		'menu_name'           => esc_html__( 'Product', 'parveen' ),
		'name_admin_bar'      => esc_html__( 'Product', 'parveen' ),
		'parent_item_colon'   => esc_html__( 'Parent Product:', 'parveen' ),
		'all_items'           => esc_html__( 'All Product', 'parveen' ),
		'add_new_item'        => esc_html__( 'Add New Product', 'parveen' ),
		'add_new'             => esc_html__( 'Add New Product', 'parveen' ),
		'new_item'            => esc_html__( 'New Product', 'parveen' ),
		'edit_item'           => esc_html__( 'Edit Product', 'parveen' ),
		'update_item'         => esc_html__( 'Update Product', 'parveen' ),
		'view_item'           => esc_html__( 'View Product', 'parveen' ),
		'search_items'        => esc_html__( 'Search Product', 'parveen' ),
		'not_found'           => esc_html__( 'Not found', 'parveen' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'parveen' ),
	);
	
	$products_args = array(
		'label'               => esc_html__( 'Gallery', 'parveen' ),
		'description'         => esc_html__( 'Gallery', 'parveen' ),
		'labels'              => $product_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'parveen_gallry', $products_args );

	//  testimonial post type
	$testimonial_labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'parveen' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'parveen' ),
		'menu_name'           => esc_html__( 'Testimonial', 'parveen' ),
		'name_admin_bar'      => esc_html__( 'Testimonial', 'parveen' ),
		'parent_item_colon'   => esc_html__( 'Parent Testimonial:', 'parveen' ),
		'all_items'           => esc_html__( 'All Testimonial', 'parveen' ),
		'add_new_item'        => esc_html__( 'Add New Testimonial', 'parveen' ),
		'add_new'             => esc_html__( 'Add New Testimonial', 'parveen' ),
		'new_item'            => esc_html__( 'New Testimonial', 'parveen' ),
		'edit_item'           => esc_html__( 'Edit Testimonial', 'parveen' ),
		'update_item'         => esc_html__( 'Update Testimonial', 'parveen' ),
		'view_item'           => esc_html__( 'View Testimonial', 'parveen' ),
		'search_items'        => esc_html__( 'Search Testimonial', 'parveen' ),
		'not_found'           => esc_html__( 'Not found', 'parveen' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'parveen' ),
	);
	
	$products_args = array(
		'label'               => esc_html__( 'Testimonial', 'parveen' ),
		'description'         => esc_html__( 'Testimonial', 'parveen' ),
		'labels'              => $testimonial_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-quote',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $products_args );


		//  approach post type
		$approach_labels = array(
			'name'                => _x( 'Approach', 'Post Type General Name', 'parveen' ),
			'singular_name'       => _x( 'Approach', 'Post Type Singular Name', 'parveen' ),
			'menu_name'           => esc_html__( 'Approach', 'parveen' ),
			'name_admin_bar'      => esc_html__( 'Approach', 'parveen' ),
			'parent_item_colon'   => esc_html__( 'Parent Approach:', 'parveen' ),
			'all_items'           => esc_html__( 'All Approach', 'parveen' ),
			'add_new_item'        => esc_html__( 'Add New Approach', 'parveen' ),
			'add_new'             => esc_html__( 'Add New Approach', 'parveen' ),
			'new_item'            => esc_html__( 'New Approach', 'parveen' ),
			'edit_item'           => esc_html__( 'Edit Approach', 'parveen' ),
			'update_item'         => esc_html__( 'Update Approach', 'parveen' ),
			'view_item'           => esc_html__( 'View Approach', 'parveen' ),
			'search_items'        => esc_html__( 'Search Approach', 'parveen' ),
			'not_found'           => esc_html__( 'Not found', 'parveen' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'parveen' ),
		);
		
		$approach_args = array(
			'label'               => esc_html__( 'Approach', 'parveen' ),
			'description'         => esc_html__( 'Approach', 'parveen' ),
			'labels'              => $approach_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-controls-repeat',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'approach', $approach_args );


}
add_action( 'init', 'oman_cosmetics_factory_custom_post');



/*Custom Texonomy Start Here*/
register_taxonomy(
	'parveen_gallry_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'parveen_gallry',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Product Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'product', // This controls the base slug that will display before each term
			
			)
		)
);






