<?php 
// Register Custom Post Type
function samharam_custom_post() {
	//  post facilities type
	$facilities_labels = array(
		'name'                => _x( 'Facilities', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Facilities', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Facilities', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Facilities', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Facilities:', 'samharam' ),
		'all_items'           => esc_html__( 'All Facilities', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Facilities', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Facilities', 'samharam' ),
		'new_item'            => esc_html__( 'New Facilities', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Facilities', 'samharam' ),
		'update_item'         => esc_html__( 'Update Facilities', 'samharam' ),
		'view_item'           => esc_html__( 'View Facilities', 'samharam' ),
		'search_items'        => esc_html__( 'Search Facilities', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);	
	$facilities_args = array(
		'label'               => esc_html__( 'Facilities', 'samharam' ),
		'description'         => esc_html__( 'Facilities', 'samharam' ),
		'labels'              => $facilities_labels,
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
	register_post_type( 'samharam_facilities', $facilities_args );


	
	//  topperstudents post type
	$topperstudents_labels = array(
		'name'                => _x( 'Topper Students', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Topper Students', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Topper Students', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Topper Students', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Topper Students:', 'samharam' ),
		'all_items'           => esc_html__( 'All Topper Students', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Topper Students', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Topper Students', 'samharam' ),
		'new_item'            => esc_html__( 'New Topper Students', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Topper Students', 'samharam' ),
		'update_item'         => esc_html__( 'Update Topper Students', 'samharam' ),
		'view_item'           => esc_html__( 'View Topper Students', 'samharam' ),
		'search_items'        => esc_html__( 'Search Topper Students', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$topperstudents_args = array(
		'label'               => esc_html__( 'Topper Students', 'samharam' ),
		'description'         => esc_html__( 'Topper Students', 'samharam' ),
		'labels'              => $topperstudents_labels,
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
	register_post_type( 'topperstudents', $topperstudents_args );

	//  Board of Trustees post type
	$trustees_labels = array(
		'name'                => _x( 'Board of Trustees', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Board of Trustees', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Board of Trustees', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Board of Trustees', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Board of Trustees:', 'samharam' ),
		'all_items'           => esc_html__( 'All Board of Trustees', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Board of Trustees', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Board of Trustees', 'samharam' ),
		'new_item'            => esc_html__( 'New Board of Trustees', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Board of Trustees', 'samharam' ),
		'update_item'         => esc_html__( 'Update Board of Trustees', 'samharam' ),
		'view_item'           => esc_html__( 'View Board of Trustees', 'samharam' ),
		'search_items'        => esc_html__( 'Search Board of Trustees', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$trustees_args = array(
		'label'               => esc_html__( 'Board of Trustees', 'samharam' ),
		'description'         => esc_html__( 'Board of Trustees', 'samharam' ),
		'labels'              => $trustees_labels,
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
	register_post_type( 'samharam_trustees', $trustees_args );

	//  testimonial post type
	$testimonial_labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Testimonial', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Testimonial', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Testimonial:', 'samharam' ),
		'all_items'           => esc_html__( 'All Testimonial', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Testimonial', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Testimonial', 'samharam' ),
		'new_item'            => esc_html__( 'New Testimonial', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Testimonial', 'samharam' ),
		'update_item'         => esc_html__( 'Update Testimonial', 'samharam' ),
		'view_item'           => esc_html__( 'View Testimonial', 'samharam' ),
		'search_items'        => esc_html__( 'Search Testimonial', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$testimonial_args = array(
		'label'               => esc_html__( 'Testimonial', 'samharam' ),
		'description'         => esc_html__( 'Testimonial', 'samharam' ),
		'labels'              => $testimonial_labels,
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
	register_post_type( 'samharam_testimonial', $testimonial_args );


	//  Gallry post type
	$features_labels = array(
		'name'                => _x( 'Features', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Features', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Features', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Features', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Features:', 'samharam' ),
		'all_items'           => esc_html__( 'All Features', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Features', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Features', 'samharam' ),
		'new_item'            => esc_html__( 'New Features', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Features', 'samharam' ),
		'update_item'         => esc_html__( 'Update Features', 'samharam' ),
		'view_item'           => esc_html__( 'View Features', 'samharam' ),
		'search_items'        => esc_html__( 'Search Features', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$features_args = array(
		'label'               => esc_html__( 'Fetaures', 'samharam' ),
		'description'         => esc_html__( 'Fetaures', 'samharam' ),
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
	register_post_type( 'samharam_features', $features_args );



	//  Team Members post type
	$team_members_labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'Team Members', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'Team Members', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'Team Members', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent Team Members:', 'samharam' ),
		'all_items'           => esc_html__( 'All Team Members', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New Team Members', 'samharam' ),
		'add_new'             => esc_html__( 'Add New Team Members', 'samharam' ),
		'new_item'            => esc_html__( 'New Team Members', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit Team Members', 'samharam' ),
		'update_item'         => esc_html__( 'Update Team Members', 'samharam' ),
		'view_item'           => esc_html__( 'View Team Members', 'samharam' ),
		'search_items'        => esc_html__( 'Search Team Members', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$team_args = array(
		'label'               => esc_html__( 'Team Memvers', 'samharam' ),
		'description'         => esc_html__( 'Team Memvers', 'samharam' ),
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
	register_post_type( 'samharam_team', $team_args );



	//  Video post type
	$school_labels = array(
		'name'                => _x( 'School Timing', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'School Timing', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'School Timing', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'School Timing', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent School Timing:', 'samharam' ),
		'all_items'           => esc_html__( 'All School Timing', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New School Timing', 'samharam' ),
		'add_new'             => esc_html__( 'Add New School Timing', 'samharam' ),
		'new_item'            => esc_html__( 'New School Timing', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit School Timing', 'samharam' ),
		'update_item'         => esc_html__( 'Update School Timing', 'samharam' ),
		'view_item'           => esc_html__( 'View School Timing', 'samharam' ),
		'search_items'        => esc_html__( 'Search School Timing', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$school_args = array(
		'label'               => esc_html__( 'School Timing', 'samharam' ),
		'description'         => esc_html__( 'School Timing', 'samharam' ),
		'labels'              => $school_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 15,
		'menu_icon'           => 'dashicons-exerpt-view',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'school_time', $school_args );

	//  uniform post type
	$uniform_labels = array(
		'name'                => _x( 'School Uniform', 'Post Type General Name', 'samharam' ),
		'singular_name'       => _x( 'School Uniform', 'Post Type Singular Name', 'samharam' ),
		'menu_name'           => esc_html__( 'School Uniform', 'samharam' ),
		'name_admin_bar'      => esc_html__( 'School Uniform', 'samharam' ),
		'parent_item_colon'   => esc_html__( 'Parent School Uniform:', 'samharam' ),
		'all_items'           => esc_html__( 'All School Uniform', 'samharam' ),
		'add_new_item'        => esc_html__( 'Add New School Uniform', 'samharam' ),
		'add_new'             => esc_html__( 'Add New School Uniform', 'samharam' ),
		'new_item'            => esc_html__( 'New School Uniform', 'samharam' ),
		'edit_item'           => esc_html__( 'Edit School Uniform', 'samharam' ),
		'update_item'         => esc_html__( 'Update School Uniform', 'samharam' ),
		'view_item'           => esc_html__( 'View School Uniform', 'samharam' ),
		'search_items'        => esc_html__( 'Search School Uniform', 'samharam' ),
		'not_found'           => esc_html__( 'Not found', 'samharam' ),
		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
	);
	
	$media_args = array(
		'label'               => esc_html__( 'School Uniform', 'samharam' ),
		'description'         => esc_html__( 'School Uniform', 'samharam' ),
		'labels'              => $uniform_labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-playlist-video',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'school_uniform', $media_args );



		//  gallery post type
		$gallery_labels = array(
			'name'                => _x( 'Gallery', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'Gallery', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'Gallery', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent Gallery:', 'samharam' ),
			'all_items'           => esc_html__( 'All Gallery', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New Gallery', 'samharam' ),
			'add_new'             => esc_html__( 'Add New Gallery', 'samharam' ),
			'new_item'            => esc_html__( 'New Gallery', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit Gallery', 'samharam' ),
			'update_item'         => esc_html__( 'Update Gallery', 'samharam' ),
			'view_item'           => esc_html__( 'View Gallery', 'samharam' ),
			'search_items'        => esc_html__( 'Search Gallery', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$gallery_args = array(
			'label'               => esc_html__( 'Gallery', 'samharam' ),
			'description'         => esc_html__( 'Gallery', 'samharam' ),
			'labels'              => $gallery_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-playlist-video',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'gallery', $gallery_args );

		//  video post type
		$video_labels = array(
			'name'                => _x( 'Video', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'Video', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'Video', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent Video:', 'samharam' ),
			'all_items'           => esc_html__( 'All Video', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New Video', 'samharam' ),
			'add_new'             => esc_html__( 'Add New Video', 'samharam' ),
			'new_item'            => esc_html__( 'New Video', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit Video', 'samharam' ),
			'update_item'         => esc_html__( 'Update Video', 'samharam' ),
			'view_item'           => esc_html__( 'View Video', 'samharam' ),
			'search_items'        => esc_html__( 'Search Video', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$video_args = array(
			'label'               => esc_html__( 'Video', 'samharam' ),
			'description'         => esc_html__( 'Video', 'samharam' ),
			'labels'              => $video_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-playlist-video',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'video', $video_args );

		//  Teacher post type
		$teacher_labels = array(
			'name'                => _x( 'Teachers', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'Teachers', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'Teachers', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'Teachers', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent Teachers:', 'samharam' ),
			'all_items'           => esc_html__( 'All Teachers', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New Teachers', 'samharam' ),
			'add_new'             => esc_html__( 'Add New Teachers', 'samharam' ),
			'new_item'            => esc_html__( 'New Teachers', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit Teachers', 'samharam' ),
			'update_item'         => esc_html__( 'Update Teachers', 'samharam' ),
			'view_item'           => esc_html__( 'View Teachers', 'samharam' ),
			'search_items'        => esc_html__( 'Search Teachers', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$teacher_args = array(
			'label'               => esc_html__( 'Teachers', 'samharam' ),
			'description'         => esc_html__( 'Teachers', 'samharam' ),
			'labels'              => $teacher_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'teachers', $teacher_args );

		
		//  Staff post type
		$staff_labels = array(
			'name'                => _x( 'Staffs', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'Staffs', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'Staffs', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'Staffs', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent Staffs:', 'samharam' ),
			'all_items'           => esc_html__( 'All Staffs', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New Staffs', 'samharam' ),
			'add_new'             => esc_html__( 'Add New Staffs', 'samharam' ),
			'new_item'            => esc_html__( 'New Staffs', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit Staffs', 'samharam' ),
			'update_item'         => esc_html__( 'Update Staffs', 'samharam' ),
			'view_item'           => esc_html__( 'View Staffs', 'samharam' ),
			'search_items'        => esc_html__( 'Search Staffs', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$staff_args = array(
			'label'               => esc_html__( 'Staffs', 'samharam' ),
			'description'         => esc_html__( 'Staffs', 'samharam' ),
			'labels'              => $staff_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'staff', $staff_args );

		//  alumni post type
		$alumni_labels = array(
			'name'                => _x( 'alumnis', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'alumnis', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'alumnis', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'alumnis', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent alumnis:', 'samharam' ),
			'all_items'           => esc_html__( 'All alumnis', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New alumnis', 'samharam' ),
			'add_new'             => esc_html__( 'Add New alumnis', 'samharam' ),
			'new_item'            => esc_html__( 'New alumnis', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit alumnis', 'samharam' ),
			'update_item'         => esc_html__( 'Update alumnis', 'samharam' ),
			'view_item'           => esc_html__( 'View alumnis', 'samharam' ),
			'search_items'        => esc_html__( 'Search alumnis', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$alumni_args = array(
			'label'               => esc_html__( 'alumnis', 'samharam' ),
			'description'         => esc_html__( 'alumnis', 'samharam' ),
			'labels'              => $alumni_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'saharam_alumni', $alumni_args );
		//  career post type
		$career_labels = array(
			'name'                => _x( 'careers', 'Post Type General Name', 'samharam' ),
			'singular_name'       => _x( 'careers', 'Post Type Singular Name', 'samharam' ),
			'menu_name'           => esc_html__( 'careers', 'samharam' ),
			'name_admin_bar'      => esc_html__( 'careers', 'samharam' ),
			'parent_item_colon'   => esc_html__( 'Parent careers:', 'samharam' ),
			'all_items'           => esc_html__( 'All careers', 'samharam' ),
			'add_new_item'        => esc_html__( 'Add New careers', 'samharam' ),
			'add_new'             => esc_html__( 'Add New careers', 'samharam' ),
			'new_item'            => esc_html__( 'New careers', 'samharam' ),
			'edit_item'           => esc_html__( 'Edit careers', 'samharam' ),
			'update_item'         => esc_html__( 'Update careers', 'samharam' ),
			'view_item'           => esc_html__( 'View careers', 'samharam' ),
			'search_items'        => esc_html__( 'Search careers', 'samharam' ),
			'not_found'           => esc_html__( 'Not found', 'samharam' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'samharam' ),
		);
		
		$career_args = array(
			'label'               => esc_html__( 'careers', 'samharam' ),
			'description'         => esc_html__( 'careers', 'samharam' ),
			'labels'              => $career_labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'saharam_career', $career_args );




}
add_action( 'init', 'samharam_custom_post');

/*Custom Texonomy Start Here*/
register_taxonomy(
	'topperstudents_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'topperstudents',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Topper Students Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'topper-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);

/*Custom Texonomy Start Here*/
register_taxonomy(
	'samharam_video_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'samharam_video',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Video Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'video-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);

/*Custom Texonomy Start Here*/
register_taxonomy(
	'samharam_team_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'samharam_team',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Members Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'members-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);


/*Custom Texonomy Start Here*/
register_taxonomy(
	'teachers_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'teachers',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Teachers Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'Teachers-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);
/*Custom Texonomy Start Here*/
register_taxonomy(
	'staff_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'staff',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Staff Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'staff-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);
/*Custom Texonomy Start Here*/
register_taxonomy(
	'saharam_career_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	'saharam_career',                  //post type name
	array(
		'hierarchical'          => true,
		'label'                         => 'Career Categories',  //Display name
		'query_var'             => true,
		'rewrite'                       => array(
			'slug'                  => 'career-category', // This controls the base slug that will display before each term
			'with_front'    => true // Don't display the category base before
			)
		)
);