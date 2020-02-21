<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
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
);