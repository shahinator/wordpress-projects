<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    array(
        'attributes' => array(
            'title' => esc_html__('General', 'xander'),
            'type' => 'tab',
            'options' => array(                
                'banner'   => array(
                    'label'   => __('slider banner image', 'xander'),
                    'desc'    => __('please set here Slider banner image', 'xander'),
                    'type'    => 'upload'
                ),              
                
            )
        ),
        'query' => array(
            'title' => esc_html__('Query', 'xander'),
            'type' => 'tab',
            'options' => array(
                'posts_per_page ' => array(
                    'type' => 'text',
                    'label' => __('Posts Per Page', 'xander'),
                    'value' => '3'                    
                ),
                'order' => array(
                    'type' => 'select',
                    'label' => __('Post Order', 'xander'),
                    'choices' => array(
                        'ASC' => 'Ascending ',
                        'DESC' => 'Descending '                        
                    )                    
                ),            
                                
            )
        )
    ),
);