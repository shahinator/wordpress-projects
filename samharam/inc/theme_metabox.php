<?php
add_action( 'cmb2_admin_init', 'samharat_metabox' );
function samharat_metabox() {
	 
    // metabox support for service
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'samharat_topperstudents_area',
		'title'        => esc_html__( 'Topper Setting', 'samharat' ),
		'object_types' => array( 'topperstudents'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Our Topper Roll No.', 'samharat'),
		'id'      =>  'topperstudents_roll',
		'default' =>  esc_html__( '090114', 'samharat'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Please Put Here Our Topper Roll Number', 'samharat')
	) );


}