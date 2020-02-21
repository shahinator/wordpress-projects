<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'about_background_image' => array(
        'label' => __('About Background Image', 'xander'),
        'desc' => __('Upload an Background image', 'xander'),
        'type' => 'upload'
    ),
    'about_desk_image' => array(
        'label' => __('About Desk Image', 'xander'),
        'desc' => __('Upload an Desk image', 'xander'),
        'type' => 'upload'
    ),

    'about_title'   => array(
        'label'   => __('About title', 'xander'),
        'desc'    => __('Please type About title', 'xander'),
        'type'    => 'text'
    ),
    'about_subtitle'   => array(
        'label'   => __('About sub title', 'xander'),
        'desc'    => __('Please type About sub title', 'xander'),
        'type'    => 'text'
    ),
    'about_content'   => array(
        'label'   => __('About Content', 'xander'),
        'desc'    => __('please type About Content', 'xander'),
        'type'    => 'wp-editor'
    ),

    'button_list' => array(
        'type' => 'addable-popup',
        'label' => __('About Button', 'xander'),
        'desc' => __('About Button List', 'xander'),
        'template' => '{{=button_name}}',
        'popup-options' => array(
            'button_name' => array(
                'label' => __('Enter Button Name', 'xander'),
                'desc' => __('Enter Nme As a Text Format', 'xander'),
                'type' => 'text',
                'default' =>  __('Contact Us', 'xander'),
                
            ),
            'button_url' => array(
                'label' => __('Enter Button URL', 'xander'),
                'desc' => __('Enter Nme As a Text Format', 'xander'),
                'type' => 'text',
                'default' =>  __('#', 'xander'),
                
            ),
        )
    )
);