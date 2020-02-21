<?php
add_action( 'cmb2_admin_init', 'oman_cosmetics_factory_metabox' );
function oman_cosmetics_factory_metabox() {
	 
    // metabox support for service
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'oman_cosmetics_factory_topperstudents_area',
		'title'        => esc_html__( 'Topper Setting', 'oman-cosmetics-factory' ),
		'object_types' => array( 'topperstudents'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Our Topper Roll No.', 'oman-cosmetics-factory'),
		'id'      =>  'topperstudents_roll',
		'default' =>  esc_html__( '090114', 'oman-cosmetics-factory'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Please Put Here Our Topper Roll Number', 'oman-cosmetics-factory')
	) );


}