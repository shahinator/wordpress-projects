<?php 
// Register Custom Post Type
function application_custom_post() {

	//  offers post type
	$offers_labels = array(
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
	
	$offers_args = array(
		'label'               => esc_html__( 'Slider', 'application' ),
		'description'         => esc_html__( 'Slider', 'application' ),
		'labels'              => $offers_labels,
		'supports'            => array( 'title', 'thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'slider'
		),
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
	register_post_type( 'slider', $offers_args );
	
	// property post type
	$property_labels = array(
		'name'                => _x( 'property', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'property', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'property', 'application' ),
		'name_admin_bar'      => esc_html__( 'property', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent property:', 'application' ),
		'all_items'           => esc_html__( 'All property', 'application' ),
		'add_new_item'        => esc_html__( 'Add New property', 'application' ),
		'add_new'             => esc_html__( 'Add New property', 'application' ),
		'new_item'            => esc_html__( 'New property', 'application' ),
		'edit_item'           => esc_html__( 'Edit property', 'application' ),
		'update_item'         => esc_html__( 'Update property', 'application' ),
		'view_item'           => esc_html__( 'View property', 'application' ),
		'search_items'        => esc_html__( 'Search property', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$property_args = array(
		'label'               => esc_html__( 'property', 'application' ),
		'description'         => esc_html__( 'property', 'application' ),
		'labels'              => $property_labels,
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
	register_post_type( 'property', $property_args );

	// logo post type
	$logo_labels = array(
		'name'                => _x( 'Logo', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Logo', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Logo', 'application' ),
		'name_admin_bar'      => esc_html__( 'Logo', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Logo:', 'application' ),
		'all_items'           => esc_html__( 'All Logo', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Logo', 'application' ),
		'add_new'             => esc_html__( 'Add New Logo', 'application' ),
		'new_item'            => esc_html__( 'New Logo', 'application' ),
		'edit_item'           => esc_html__( 'Edit Logo', 'application' ),
		'update_item'         => esc_html__( 'Update Logo', 'application' ),
		'view_item'           => esc_html__( 'View logo', 'application' ),
		'search_items'        => esc_html__( 'Search Logo', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$logo_args = array(
		'label'               => esc_html__( 'Logo', 'application' ),
		'description'         => esc_html__( 'Logo', 'application' ),
		'labels'              => $logo_labels,
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
	register_post_type( 'logo', $logo_args );

	//  testimonial post type
	$testimonial_labels = array(
		'name'                => _x( 'testimonial', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'testimonial', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'testimonial', 'application' ),
		'name_admin_bar'      => esc_html__( 'testimonial', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent testimonial:', 'application' ),
		'all_items'           => esc_html__( 'All testimonial', 'application' ),
		'add_new_item'        => esc_html__( 'Add New testimonial', 'application' ),
		'add_new'             => esc_html__( 'Add New testimonial', 'application' ),
		'new_item'            => esc_html__( 'New testimonial', 'application' ),
		'edit_item'           => esc_html__( 'Edit testimonial', 'application' ),
		'update_item'         => esc_html__( 'Update testimonial', 'application' ),
		'view_item'           => esc_html__( 'View testimonial', 'application' ),
		'search_items'        => esc_html__( 'Search testimonial', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$testimonial_args = array(
		'label'               => esc_html__( 'testimonial', 'application' ),
		'description'         => esc_html__( 'testimonial', 'application' ),
		'labels'              => $testimonial_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'testimonial'
		),
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
	register_post_type( 'testimonial', $testimonial_args );








}
add_action( 'init', 'application_custom_post');

/*Custom Texonomy Start Here*/
register_taxonomy(
	'property_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'property',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Property Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'property-category', // This controls the base slug that will display before each term
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
			'slug'                  => 'product-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);


