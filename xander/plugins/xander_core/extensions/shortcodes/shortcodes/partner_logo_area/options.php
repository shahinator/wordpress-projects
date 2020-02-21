<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'logo_list' => array(
        'type' => 'addable-popup',
        'label' => __('About Logo', 'xander'),
        'desc' => __('About Logo List', 'xander'),
        'template' => '{{=logo_name}}',
        'popup-options' => array(

            'logo_name' => array(
                'label' => __('Enter Logo Name', 'xander'),
                'desc' => __('Enter Logo Name Here', 'xander'),
                'type' => 'text',
                
            ),
            'logo_image' => array(
                'label' => __('Enter Logo Image', 'xander'),
                'desc' => __('Upload Logo Here', 'xander'),
                'type' => 'upload',
                
            ),
            'logo_url' => array(
                'label' => __('Enter Logo URL', 'xander'),
                'desc' => __('Enter Name As a Text Format', 'xander'),
                'default' =>  __('#', 'xander'),
                'type' => 'text',
                
            ),
        )
    )
);