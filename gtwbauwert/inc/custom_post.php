<?php 
// Register Custom Post Type
function application_custom_post() {


	
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

	//  Services post type
	$Services_labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Services', 'application' ),
		'name_admin_bar'      => esc_html__( 'Services', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Services:', 'application' ),
		'all_items'           => esc_html__( 'All Services', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Services', 'application' ),
		'add_new'             => esc_html__( 'Add New Services', 'application' ),
		'new_item'            => esc_html__( 'New Services', 'application' ),
		'edit_item'           => esc_html__( 'Edit Services', 'application' ),
		'update_item'         => esc_html__( 'Update Services', 'application' ),
		'view_item'           => esc_html__( 'View Services', 'application' ),
		'search_items'        => esc_html__( 'Search Services', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$Services_args = array(
		'label'               => esc_html__( 'Services', 'application' ),
		'description'         => esc_html__( 'Services', 'application' ),
		'labels'              => $Services_labels,
		'supports'            => array( 'title', 'thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-site-alt2',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'services', $Services_args );
	


	// testimonial post type
	$features_labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Testimonial', 'application' ),
		'name_admin_bar'      => esc_html__( 'Testimonial', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Testimonial:', 'application' ),
		'all_items'           => esc_html__( 'All Testimonial', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Testimonial', 'application' ),
		'add_new'             => esc_html__( 'Add New Testimonial', 'application' ),
		'new_item'            => esc_html__( 'New Testimonial', 'application' ),
		'edit_item'           => esc_html__( 'Edit Testimonial', 'application' ),
		'update_item'         => esc_html__( 'Update Testimonial', 'application' ),
		'view_item'           => esc_html__( 'View Testimonial', 'application' ),
		'search_items'        => esc_html__( 'Search Testimonial', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$features_args = array(
		'label'               => esc_html__( 'Testimonial', 'application' ),
		'description'         => esc_html__( 'Testimonial', 'application' ),
		'labels'              => $features_labels,
		'supports'            => array( 'title','editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-admin-multisite',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $features_args );

	//  products post type
	$products_labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Products', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Products', 'application' ),
		'name_admin_bar'      => esc_html__( 'Products', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Products:', 'application' ),
		'all_items'           => esc_html__( 'All Products', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Products', 'application' ),
		'add_new'             => esc_html__( 'Add New Products', 'application' ),
		'new_item'            => esc_html__( 'New Products', 'application' ),
		'edit_item'           => esc_html__( 'Edit Products', 'application' ),
		'update_item'         => esc_html__( 'Update Products', 'application' ),
		'view_item'           => esc_html__( 'View Products', 'application' ),
		'search_items'        => esc_html__( 'Search Products', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$products_args = array(
		'label'               => esc_html__( 'Products', 'application' ),
		'description'         => esc_html__( 'Products', 'application' ),
		'labels'              => $products_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-money',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'products', $products_args );


	//  logo post type
	$logo_labels = array(
		'name'                => _x( 'Partner Logo', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Partner Logo', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Partner Logo', 'application' ),
		'name_admin_bar'      => esc_html__( 'Partner Logo', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Partner Logo:', 'application' ),
		'all_items'           => esc_html__( 'All Partner Logo', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Partner Logo', 'application' ),
		'add_new'             => esc_html__( 'Add New Partner Logo', 'application' ),
		'new_item'            => esc_html__( 'New Partner Logo', 'application' ),
		'edit_item'           => esc_html__( 'Edit Partner Logo', 'application' ),
		'update_item'         => esc_html__( 'Update Partner Logo', 'application' ),
		'view_item'           => esc_html__( 'View Partner Logo', 'application' ),
		'search_items'        => esc_html__( 'Search Partner Logo', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$logo_args = array(
		'label'               => esc_html__( 'Partner Logo', 'application' ),
		'description'         => esc_html__( 'Partner Logo', 'application' ),
		'labels'              => $logo_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-money',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'logo', $logo_args );




}
add_action( 'init', 'application_custom_post');

/*Custom Texonomy Start Here*/
register_taxonomy(
	'gellary_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'gellary',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Gellary Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'gellary-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);

/*Custom Texonomy Start Here*/
register_taxonomy(
	'products_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'products',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Products Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'products-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);


