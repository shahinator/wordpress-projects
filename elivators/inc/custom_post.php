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

	//  Products post type
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
	register_post_type( 'product', $products_args );
	
	//  Services post type
	$services_labels = array(
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
	
	$services_args = array(
		'label'               => esc_html__( 'Services', 'application' ),
		'description'         => esc_html__( 'Services', 'application' ),
		'labels'              => $services_labels,
		'supports'            => array( 'title', 'thumbnail','editor'),
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
	register_post_type( 'services', $services_args );

	// Projects post type
	$projects_labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Projects', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Projects', 'application' ),
		'name_admin_bar'      => esc_html__( 'Projects', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Projects:', 'application' ),
		'all_items'           => esc_html__( 'All Projects', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Projects', 'application' ),
		'add_new'             => esc_html__( 'Add New Projects', 'application' ),
		'new_item'            => esc_html__( 'New Projects', 'application' ),
		'edit_item'           => esc_html__( 'Edit Projects', 'application' ),
		'update_item'         => esc_html__( 'Update Projects', 'application' ),
		'view_item'           => esc_html__( 'View Projects', 'application' ),
		'search_items'        => esc_html__( 'Search Projects', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$projects_args = array(
		'label'               => esc_html__( 'Projects', 'application' ),
		'description'         => esc_html__( 'Projects', 'application' ),
		'labels'              => $projects_labels,
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
	register_post_type( 'projects', $projects_args );

	//  gallery post type
	$gallery_labels = array(
		'name'                => _x( 'Gallery', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Gallery', 'application' ),
		'name_admin_bar'      => esc_html__( 'Gallery', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Gallery:', 'application' ),
		'all_items'           => esc_html__( 'All Gallery', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Gallery', 'application' ),
		'add_new'             => esc_html__( 'Add New Gallery', 'application' ),
		'new_item'            => esc_html__( 'New Gallery', 'application' ),
		'edit_item'           => esc_html__( 'Edit Gallery', 'application' ),
		'update_item'         => esc_html__( 'Update Gallery', 'application' ),
		'view_item'           => esc_html__( 'View Gallery', 'application' ),
		'search_items'        => esc_html__( 'Search Gallery', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$gallery_args = array(
		'label'               => esc_html__( 'Gallery', 'application' ),
		'description'         => esc_html__( 'Gallery', 'application' ),
		'labels'              => $gallery_labels,
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
	register_post_type( 'gallery', $gallery_args );

	//  career post type
	$career_labels = array(
		'name'                => _x( 'Career Job', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Career Job', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Career Job', 'application' ),
		'name_admin_bar'      => esc_html__( 'Career Job', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Career Job:', 'application' ),
		'all_items'           => esc_html__( 'All Career Job', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Career Job', 'application' ),
		'add_new'             => esc_html__( 'Add New Career Job', 'application' ),
		'new_item'            => esc_html__( 'New Career Job', 'application' ),
		'edit_item'           => esc_html__( 'Edit Career Job', 'application' ),
		'update_item'         => esc_html__( 'Update Career Job', 'application' ),
		'view_item'           => esc_html__( 'View Career Job', 'application' ),
		'search_items'        => esc_html__( 'Search Career Job', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);	
	$career_args = array(
		'label'               => esc_html__( 'Career Job', 'application' ),
		'description'         => esc_html__( 'Career Job', 'application' ),
		'labels'              => $career_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-warning',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'career', $career_args );

	//  location post type
	$location_labels = array(
		'name'                => _x( 'Office Location', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Office Location', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Office Location', 'application' ),
		'name_admin_bar'      => esc_html__( 'Office Location', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Office Location:', 'application' ),
		'all_items'           => esc_html__( 'All Office Location', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Office Location', 'application' ),
		'add_new'             => esc_html__( 'Add New Office Location', 'application' ),
		'new_item'            => esc_html__( 'New Office Location', 'application' ),
		'edit_item'           => esc_html__( 'Edit Office Location', 'application' ),
		'update_item'         => esc_html__( 'Update Office Location', 'application' ),
		'view_item'           => esc_html__( 'View Office Location', 'application' ),
		'search_items'        => esc_html__( 'Search Office Location', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);	
	$location_args = array(
		'label'               => esc_html__( 'Office Location', 'application' ),
		'description'         => esc_html__( 'Office Location', 'application' ),
		'labels'              => $location_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-expand',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'location', $location_args );

	//  brands post type
	$brands_labels = array(
		'name'                => _x( 'Brands', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Brands', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Brands', 'application' ),
		'name_admin_bar'      => esc_html__( 'Brands', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Brands:', 'application' ),
		'all_items'           => esc_html__( 'All Brands', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Brands', 'application' ),
		'add_new'             => esc_html__( 'Add New Brands', 'application' ),
		'new_item'            => esc_html__( 'New Brands', 'application' ),
		'edit_item'           => esc_html__( 'Edit Brands', 'application' ),
		'update_item'         => esc_html__( 'Update Brands', 'application' ),
		'view_item'           => esc_html__( 'View Brands', 'application' ),
		'search_items'        => esc_html__( 'Search Brands', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);	
	$brands_args = array(
		'label'               => esc_html__( 'Brands', 'application' ),
		'description'         => esc_html__( 'Brands', 'application' ),
		'labels'              => $brands_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-expand',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'brands', $brands_args );

	//  portfolio post type
	$portfolio_labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Portfolio', 'application' ),
		'name_admin_bar'      => esc_html__( 'Portfolio', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent portfolio:', 'application' ),
		'all_items'           => esc_html__( 'All Portfolio', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Portfolio', 'application' ),
		'add_new'             => esc_html__( 'Add New Portfolio', 'application' ),
		'new_item'            => esc_html__( 'New Portfolio', 'application' ),
		'edit_item'           => esc_html__( 'Edit Portfolio', 'application' ),
		'update_item'         => esc_html__( 'Update Portfolio', 'application' ),
		'view_item'           => esc_html__( 'View Portfolio', 'application' ),
		'search_items'        => esc_html__( 'Search Portfolio', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);	
	$portfolio_args = array(
		'label'               => esc_html__( 'Portfolio', 'application' ),
		'description'         => esc_html__( 'Portfolio', 'application' ),
		'labels'              => $portfolio_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-expand',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'portfolio', $portfolio_args );


}
add_action( 'init', 'application_custom_post');

/*Custom Texonomy Start Here*/
register_taxonomy(
	'product_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'product',                  //post type name
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

/*Custom Texonomy Start Here*/
register_taxonomy(
	'gallery_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'gallery',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Gallery Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'gallery-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);


