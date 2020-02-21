<?php 
// Register Custom Post Type
function printagram18_custom_post() {
	//  topperstudents post type
	$topperstudents_labels = array(
		'name'                => _x( 'Gellary', 'Post Type General Name', 'printagram18' ),
		'singular_name'       => _x( 'Gellary', 'Post Type Singular Name', 'printagram18' ),
		'menu_name'           => esc_html__( 'Gellary', 'printagram18' ),
		'name_admin_bar'      => esc_html__( 'Gellary', 'printagram18' ),
		'parent_item_colon'   => esc_html__( 'Parent Gellary:', 'printagram18' ),
		'all_items'           => esc_html__( 'All Gellary', 'printagram18' ),
		'add_new_item'        => esc_html__( 'Add New Gellary', 'printagram18' ),
		'add_new'             => esc_html__( 'Add New Gellary', 'printagram18' ),
		'new_item'            => esc_html__( 'New Gellary', 'printagram18' ),
		'edit_item'           => esc_html__( 'Edit Gellary', 'printagram18' ),
		'update_item'         => esc_html__( 'Update Gellary', 'printagram18' ),
		'view_item'           => esc_html__( 'View Gellary', 'printagram18' ),
		'search_items'        => esc_html__( 'Search Gellary', 'printagram18' ),
		'not_found'           => esc_html__( 'Not found', 'printagram18' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'printagram18' ),
	);
	
	$topperstudents_args = array(
		'label'               => esc_html__( 'Gellary', 'printagram18' ),
		'description'         => esc_html__( 'Gellary', 'printagram18' ),
		'labels'              => $topperstudents_labels,
		'supports'            => array( 'title', 'thumbnail'),
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
	register_post_type( 'gellary', $topperstudents_args );
	//  order post type
	$order_labels = array(
		'name'                => _x( 'Order', 'Post Type General Name', 'printagram18' ),
		'singular_name'       => _x( 'Order', 'Post Type Singular Name', 'printagram18' ),
		'menu_name'           => esc_html__( 'Order', 'printagram18' ),
		'name_admin_bar'      => esc_html__( 'Order', 'printagram18' ),
		'parent_item_colon'   => esc_html__( 'Parent Order:', 'printagram18' ),
		'all_items'           => esc_html__( 'All Order', 'printagram18' ),
		'add_new_item'        => esc_html__( 'Add New Order', 'printagram18' ),
		'add_new'             => esc_html__( 'Add New Order', 'printagram18' ),
		'new_item'            => esc_html__( 'New Order', 'printagram18' ),
		'edit_item'           => esc_html__( 'Edit Order', 'printagram18' ),
		'update_item'         => esc_html__( 'Update Order', 'printagram18' ),
		'view_item'           => esc_html__( 'View Order', 'printagram18' ),
		'search_items'        => esc_html__( 'Search Order', 'printagram18' ),
		'not_found'           => esc_html__( 'Not found', 'printagram18' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'printagram18' ),
	);
	
	$order_args = array(
		'label'               => esc_html__( 'Order', 'printagram18' ),
		'description'         => esc_html__( 'Order', 'printagram18' ),
		'labels'              => $order_labels,
		'supports'            => array( 'title', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-ol',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'orderlist', $order_args );
}
add_action( 'init', 'printagram18_custom_post');

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


