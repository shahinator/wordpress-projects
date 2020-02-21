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
	//  Partners post type
	$partners_labels = array(
		'name'                => _x( 'Logos', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Logos', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Logos', 'application' ),
		'name_admin_bar'      => esc_html__( 'Logos', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Logos:', 'application' ),
		'all_items'           => esc_html__( 'All Logos', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Logos', 'application' ),
		'add_new'             => esc_html__( 'Add New Logos', 'application' ),
		'new_item'            => esc_html__( 'New Logos', 'application' ),
		'edit_item'           => esc_html__( 'Edit Logos', 'application' ),
		'update_item'         => esc_html__( 'Update Logos', 'application' ),
		'view_item'           => esc_html__( 'View Logos', 'application' ),
		'search_items'        => esc_html__( 'Search Logos', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$partners_args = array(
		'label'               => esc_html__( 'Logos', 'application' ),
		'description'         => esc_html__( 'Logos', 'application' ),
		'labels'              => $partners_labels,
		'supports'            => array( 'title', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-id',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'partners', $partners_args );



	//  insurence post type
	$insurence_labels = array(
		'name'                => _x( 'Versicherungen', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Versicherungen', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Versicherungen', 'application' ),
		'name_admin_bar'      => esc_html__( 'Versicherungen', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Versicherungen:', 'application' ),
		'all_items'           => esc_html__( 'All Versicherungen', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Versicherungen', 'application' ),
		'add_new'             => esc_html__( 'Add New Versicherungen', 'application' ),
		'new_item'            => esc_html__( 'New Versicherungen', 'application' ),
		'edit_item'           => esc_html__( 'Edit Versicherungen', 'application' ),
		'update_item'         => esc_html__( 'Update Versicherungen', 'application' ),
		'view_item'           => esc_html__( 'View Versicherungen', 'application' ),
		'search_items'        => esc_html__( 'Search Versicherungen', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$insurence_args = array(
		'label'               => esc_html__( 'Versicherungen', 'application' ),
		'description'         => esc_html__( 'Versicherungen', 'application' ),
		'labels'              => $insurence_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'versicherungen'
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
	register_post_type( 'insurence', $insurence_args );






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
	'application_product_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'application_product',                  //post type name
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


