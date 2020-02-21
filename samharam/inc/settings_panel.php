<?php
add_action( 'customize_register', 'parveen_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function parveen_register_theme_customizer( $wp_customize ) {
	// Create custom panel.
	$wp_customize->add_panel( 'footer_content_blocks', array(
		'priority'       => 40,
		'theme_supports' => '',
		'title'          => __( 'Social Blocks', 'parveen' ),
		'description'    => __( 'Set editable text for certain content.', 'parveen' ),
	) );
	// Add Footer Text
	// Add section.
	$wp_customize->add_section( 'facebook_social_link' , array(
		'title'    => __('Facebook Link','parveen'),
		'panel'    => 'footer_content_blocks',
		'priority' => 10
	) );
	
	$wp_customize->add_section( 'twitter_social_link' , array(
		'title'    => __('Twitter Link','parveen'),
		'panel'    => 'footer_content_blocks',
		'priority' => 10
	) );
	$wp_customize->add_section( 'youtube_social_link' , array(
		'title'    => __('Youtube Link','parveen'),
		'panel'    => 'footer_content_blocks',
		'priority' => 10
	) );
	
	$wp_customize->add_section( 'instagram_social_link' , array(
		'title'    => __('Instagram Link','parveen'),
		'panel'    => 'footer_content_blocks',
		'priority' => 10
	) );
	
		

	
	
	
	// Add setting
	$wp_customize->add_setting( 'footer_fb_block', array(
		 'default'           => __( 'https://www.facebook.com', 'parveen' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	
	
	// Add setting
	$wp_customize->add_setting( 'footer_insta_block', array(
		 'default'           => __( 'https://www.instagram.com', 'parveen' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	// Add setting
	$wp_customize->add_setting( 'footer_twitter_block', array(
		 'default'           => __( 'https://www.twitter.com', 'parveen' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	
	
	// Add setting
	$wp_customize->add_setting( 'footer_youtube_block', array(
		 'default'           => __( '', 'parveen' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	
	
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facebook_link',
		    array(
		        'label'    => __( 'Add Facebook Link', 'parveen' ),
		        'section'  => 'facebook_social_link',
		        'settings' => 'footer_fb_block',
		        'type'     => 'text'
		    )
	    )
	);
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'twitter_link',
		    array(
		        'label'    => __( 'Add Twitter Link', 'parveen' ),
		        'section'  => 'twitter_social_link',
		        'settings' => 'footer_twitter_block',
		        'type'     => 'text'
		    )
	    )
	);
	
		$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'instagram_link',
		    array(
		        'label'    => __( 'Add Instagram Link', 'parveen' ),
		        'section'  => 'instagram_social_link',
		        'settings' => 'footer_insta_block',
		        'type'     => 'text'
		    )
	    )
	);
	
	
		$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'youtube_link',
		    array(
		        'label'    => __( 'Add Youtube Link', 'parveen' ),
		        'section'  => 'youtube_social_link',
		        'settings' => 'footer_youtube_block',
		        'type'     => 'text'
		    )
	    )
	);
	
	
	
	
	
	
	// Create custom panel.
	$wp_customize->add_panel( 'header_right_text', array(
		'priority'       => 35,
		'theme_supports' => '',
		'title'          => __( 'Header Right Text', 'parveen' ),
		'description'    => __( 'Set editable text for certain content.', 'parveen' ),
	) );
	// Add Footer Text
	// Add section.
	$wp_customize->add_section( 'header_right_text' , array(
		'title'    => __('Header Right  Text','parveen'),
		'panel'    => 'header_right_text',
		'priority' => 9
	) );
	
	
	
	
// header right content
// Create custom panel.
$wp_customize->add_panel( 'text_blocks', array(
	'priority'       => 20,
	'theme_supports' => '',
	'title'          => __( 'Header Right', 'genesischild' ),
	'description'    => __( 'Set editable text for certain content.', 'genesischild' ),
) );
// Add Footer Text
// Add section.
$wp_customize->add_section( 'header_right_text' , array(
	'title'    => __('Header Right Text','genesischild'),
	'panel'    => 'text_blocks',
	'priority' => 10
) );
// Add setting
$wp_customize->add_setting( 'header_right_text_block', array(
	 'default'           => __( '(91) 98410 66280 <br/>98409 12923', 'genesischild' ),
	 'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'header_right_text',
		array(
			'label'    => __( 'Header Right Text', 'genesischild' ),
			'section'  => 'header_right_text',
			'settings' => 'header_right_text_block',
			'type'     => 'textarea'
		)
	)
);
	



	// footer copyright text

		// Create custom panel.
		$wp_customize->add_panel( 'footer_copyright_blocks', array(
			'priority'       => 40,
			'theme_supports' => '',
			'title'          => __( 'Footer Copyright Blocks', 'parveen' ),
			'description'    => __( 'Set editable text for certain content.', 'parveen' ),
		) );
		// Add Footer Text
		// Add section.
		$wp_customize->add_section( 'copyright_text' , array(
			'title'    => __('Copyright  Text','parveen'),
			'panel'    => 'footer_copyright_blocks',
			'priority' => 10
		) );
	// Add setting
	$wp_customize->add_setting( 'copyright_text_content', array(
		 'default'           => __( '© 2018 parveentraders. powered by makeweb', 'parveen' ),
		 //'sanitize_callback' => 'sanitize_text'
	) );	
	
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'copyright_text',
		    array(
		        'label'    => __( 'Add Copyright Text', 'parveen' ),
		        'section'  => 'copyright_text',
		        'settings' => 'copyright_text_content',
		        'type'     => 'textarea'
		    )
	    )
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 	// Sanitize text
	function sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}
}