<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'subscribe_background'   => array(
        'label'   => __('Subscribe Background', 'xander'),
        'desc'    => __('Please type About Background', 'xander'),
        'type'    => 'upload'
    ),
    'subscribe_title'   => array(
        'label'   => __('Subscribe title', 'xander'),
        'desc'    => __('Please type About title', 'xander'),
        'type'    => 'text'
    ),
    'subscribe_subtitle'   => array(
        'label'   => __('Subscribe', 'xander'),
        'desc'    => __('please type Subscribe', 'xander'),
        'type'    => 'text'
    ),
    'subscribe_content'   => array(
        'label'   => __('Content', 'xander'),
        'desc'    => __('please type Content', 'xander'),
        'type'    => 'text'
    ),
);