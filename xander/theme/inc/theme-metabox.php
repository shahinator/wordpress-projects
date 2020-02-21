<?php
add_action( 'cmb2_admin_init', 'xander_metabox' );
function xander_metabox() {
	 
    // metabox support for service
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'xander_slider_setting_area',
		'title'        => esc_html__( 'Slider Setting', 'xander' ),
		'object_types' => array( 'xanderslider'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Sub Title Name', 'xander'),
		'id'      =>  'xanderslider_slider_subtitle',
		'default' =>  esc_html__( 'We are xander ', 'xander'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Sub Title Here', 'xander')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button Name', 'xander'),
		'id'      =>  'xanderslider_button_name',
		'default' =>  esc_html__( 'Contact Us', 'xander'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button Here', 'xander')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button URL', 'xander'),
		'id'      =>  'xanderslider_button_url',
		'default' =>  esc_html__( '#', 'xander'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button URL Here', 'xander')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button Name', 'xander'),
		'id'      =>  'xanderslider_button_name2',
		'default' =>  esc_html__( 'Our Portfolio', 'xander'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button Here', 'xander')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button URL', 'xander'),
		'id'      =>  'xanderslider_button_url2',
		'default' =>  esc_html__( '#', 'xander'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button URL Here', 'xander')
	) );


	// metabox support for services
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'xander_services_setting_area',
		'title'        => esc_html__( 'Services Setting', 'xander' ),
		'object_types' => array( 'xanderservices'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Services thumbanil Icon', 'xander'),
		'id'      =>  'xanderproject_services_icon',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Services thumbanil Icon', 'xander')
	) );


	// metabox support for testimonial
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'xander_testimonial_setting_area',
		'title'        => esc_html__( 'Testing Setting', 'xander' ),
		'object_types' => array( 'xandertestimonials'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Testimonial Designation', 'xander'),
		'id'      =>  'xander_testimonial_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Testimonial Designation', 'xander'),
		'default' =>  esc_html__( 'Founder', 'xander'),
	) );


	// metabox support for Team
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'xander_team_setting_area',
		'title'        => esc_html__( 'Team Setting', 'xander' ),
		'object_types' => array( 'xanderteams'), // Post type
		'context'      => 'advanced',//  'normal', 'advanced', or 'side'
		'priority'     => 'low',//  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Designation', 'xander'),
		'id'      =>  'xander_team_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Designation', 'xander'),
		'default' => esc_html__( 'Founder', 'xander'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Facebook URL', 'xander'),
		'id'      =>  'xander_team_facebook_url',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Set Your URL', 'xander'),
		'default' => esc_html__( '#', 'xander'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Twitter URL', 'xander'),
		'id'      =>  'xander_team_twitter_url',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Set Your URL', 'xander'),
		'default' => esc_html__( '#', 'xander'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Dribbble URL', 'xander'),
		'id'      =>  'xander_team_dribbble_url',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Set Your URL', 'xander'),
		'default' => esc_html__( '#', 'xander'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Pinterest URL', 'xander'),
		'id'      =>  'xander_team_pinterest_url',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Set Your URL', 'xander'),
		'default' => esc_html__( '#', 'xander'),
	) );

	// metabox support for page
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'xanderpage_setting_area',
		'title'        => esc_html__( 'Header Setting', 'xander' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb2_theme_feilds->add_field( array(
		'name'             =>  esc_html__( 'Select Header', 'xander' ),
		'id'               => 'xander_header_layout',
		'desc'             => esc_html__( 'Select any one of them.','xander' ),
		'type'             => 'select',
		'default'          => 'head_one',
		'options'          => array(
			'head_one' => __( 'Header Style One', 'xander' ),
			'head_two'   => __( 'Header Style Two', 'xander' ),
		)
	) );


}