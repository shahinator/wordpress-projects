<?php 
// Register Custom Post Type
function application_custom_post() {

	//  offers post type
	$offers_labels = array(
		'name'                => _x( 'Angebote', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Angebote', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Angebote', 'application' ),
		'name_admin_bar'      => esc_html__( 'Angebote', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Angebote:', 'application' ),
		'all_items'           => esc_html__( 'All Angebote', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Angebote', 'application' ),
		'add_new'             => esc_html__( 'Add New Angebote', 'application' ),
		'new_item'            => esc_html__( 'New Angebote', 'application' ),
		'edit_item'           => esc_html__( 'Edit Angebote', 'application' ),
		'update_item'         => esc_html__( 'Update Angebote', 'application' ),
		'view_item'           => esc_html__( 'View Angebote', 'application' ),
		'search_items'        => esc_html__( 'Search Angebote', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$offers_args = array(
		'label'               => esc_html__( 'Angebote', 'application' ),
		'description'         => esc_html__( 'Angebote', 'application' ),
		'labels'              => $offers_labels,
		'supports'            => array( 'title', 'thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'angebot'
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
	register_post_type( 'offers', $offers_args );
	
	// Teams post type
	$teams_labels = array(
		'name'                => _x( 'Teams', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Teams', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Teams', 'application' ),
		'name_admin_bar'      => esc_html__( 'Teams', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Teams:', 'application' ),
		'all_items'           => esc_html__( 'All Teams', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Teams', 'application' ),
		'add_new'             => esc_html__( 'Add New Teams', 'application' ),
		'new_item'            => esc_html__( 'New Teams', 'application' ),
		'edit_item'           => esc_html__( 'Edit Teams', 'application' ),
		'update_item'         => esc_html__( 'Update Teams', 'application' ),
		'view_item'           => esc_html__( 'View Teams', 'application' ),
		'search_items'        => esc_html__( 'Search Teams', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$teams_args = array(
		'label'               => esc_html__( 'Teams', 'application' ),
		'description'         => esc_html__( 'Teams', 'application' ),
		'labels'              => $teams_labels,
		'supports'            => array( 'title','editor','thumbnail'),
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
	register_post_type( 'team', $teams_args );

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
		'name'                => _x( 'Einblicke', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Einblicke', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Einblicke', 'application' ),
		'name_admin_bar'      => esc_html__( 'Einblicke', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Einblicke:', 'application' ),
		'all_items'           => esc_html__( 'All Einblicke', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Einblicke', 'application' ),
		'add_new'             => esc_html__( 'Add New Einblicke', 'application' ),
		'new_item'            => esc_html__( 'New Einblicke', 'application' ),
		'edit_item'           => esc_html__( 'Edit Einblicke', 'application' ),
		'update_item'         => esc_html__( 'Update Einblicke', 'application' ),
		'view_item'           => esc_html__( 'View Einblicke', 'application' ),
		'search_items'        => esc_html__( 'Search Einblicke', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$products_args = array(
		'label'               => esc_html__( 'Einblicke', 'application' ),
		'description'         => esc_html__( 'Einblicke', 'application' ),
		'labels'              => $products_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'einblicke'
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
	register_post_type( 'products', $products_args );

	//  counter post type
	$counter_labels = array(
		'name'                => _x( 'Wirkungen', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Wirkungen', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Wirkungen', 'application' ),
		'name_admin_bar'      => esc_html__( 'Wirkungen', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Wirkungen:', 'application' ),
		'all_items'           => esc_html__( 'All Wirkungen', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Wirkungen', 'application' ),
		'add_new'             => esc_html__( 'Add New Wirkungen', 'application' ),
		'new_item'            => esc_html__( 'New Wirkungen', 'application' ),
		'edit_item'           => esc_html__( 'Edit Wirkungen', 'application' ),
		'update_item'         => esc_html__( 'Update Wirkungen', 'application' ),
		'view_item'           => esc_html__( 'View Wirkungen', 'application' ),
		'search_items'        => esc_html__( 'Search Wirkungen', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$counter_args = array(
		'label'               => esc_html__( 'Wirkungen', 'application' ),
		'description'         => esc_html__( 'Wirkungen', 'application' ),
		'labels'              => $counter_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'wirkungen'
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
	register_post_type( 'counter', $counter_args );

	//  logo post type
	$logo_labels = array(
		'name'                => _x( 'Partner', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Partner', 'application' ),
		'name_admin_bar'      => esc_html__( 'Partner', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Partner:', 'application' ),
		'all_items'           => esc_html__( 'All Partner', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Partner', 'application' ),
		'add_new'             => esc_html__( 'Add New Partner', 'application' ),
		'new_item'            => esc_html__( 'New Partner', 'application' ),
		'edit_item'           => esc_html__( 'Edit Partner', 'application' ),
		'update_item'         => esc_html__( 'Update Partner', 'application' ),
		'view_item'           => esc_html__( 'View Partner', 'application' ),
		'search_items'        => esc_html__( 'Search Partner', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);
	
	$logo_args = array(
		'label'               => esc_html__( 'Partner', 'application' ),
		'description'         => esc_html__( 'Partner', 'application' ),
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


	//  partners post type
	$partners_labels = array(
		'name'                => _x( 'Auszeichnungen', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Auszeichnungen', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Auszeichnungen', 'application' ),
		'name_admin_bar'      => esc_html__( 'Auszeichnungen', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Auszeichnungen:', 'application' ),
		'all_items'           => esc_html__( 'All Auszeichnungen', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Auszeichnungen', 'application' ),
		'add_new'             => esc_html__( 'Add New Auszeichnungen', 'application' ),
		'new_item'            => esc_html__( 'New Auszeichnungen', 'application' ),
		'edit_item'           => esc_html__( 'Edit Auszeichnungen', 'application' ),
		'update_item'         => esc_html__( 'Update Auszeichnungen', 'application' ),
		'view_item'           => esc_html__( 'View Auszeichnungen', 'application' ),
		'search_items'        => esc_html__( 'Search Auszeichnungen', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$partners_args = array(
		'label'               => esc_html__( 'Auszeichnungen', 'application' ),
		'description'         => esc_html__( 'Auszeichnungen', 'application' ),
		'labels'              => $partners_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'auszeichnungen'
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
	register_post_type( 'partners', $partners_args );

	//  promo post type
	$promo_labels = array(
		'name'                => _x( 'Details', 'Post Type General Name', 'application' ),
		'singular_name'       => _x( 'Details', 'Post Type Singular Name', 'application' ),
		'menu_name'           => esc_html__( 'Details', 'application' ),
		'name_admin_bar'      => esc_html__( 'Details', 'application' ),
		'parent_item_colon'   => esc_html__( 'Parent Details:', 'application' ),
		'all_items'           => esc_html__( 'All Details', 'application' ),
		'add_new_item'        => esc_html__( 'Add New Details', 'application' ),
		'add_new'             => esc_html__( 'Add New Details', 'application' ),
		'new_item'            => esc_html__( 'New Details', 'application' ),
		'edit_item'           => esc_html__( 'Edit Details', 'application' ),
		'update_item'         => esc_html__( 'Update Details', 'application' ),
		'view_item'           => esc_html__( 'View Details', 'application' ),
		'search_items'        => esc_html__( 'Search Details', 'application' ),
		'not_found'           => esc_html__( 'Not found', 'application' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'application' ),
	);		
	$promo_args = array(
		'label'               => esc_html__( 'Details', 'application' ),
		'description'         => esc_html__( 'Details', 'application' ),
		'labels'              => $promo_labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'          => true,
		'public'              => true,
		'rewrite' => array(
			'with_front' => false,
			'slug'       => 'details'
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
	register_post_type( 'promo', $promo_args );




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
			'slug'                  => 'product-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);


