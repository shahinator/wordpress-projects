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
                'testimonial_subtitle'   => array(
                    'label'   => __('Testimonial Sub Title', 'xander'),
                    'desc'    => __('please type Testimonial Sub title', 'xander'),
                    'type'    => 'text'
                ),
                'testimonial_title'   => array(
                    'label'   => __('Testimonial title', 'xander'),
                    'desc'    => __('please type Testimonial title', 'xander'),
                    'type'    => 'text'
                ),
                'testimonial_content'   => array(
                    'label'   => __('Testimonial Content', 'xander'),
                    'desc'    => __('please type Testimonial Content', 'xander'),
                    'type'    => 'wp-editor'
                ), 
                'section_style' => array(
                    'label' => esc_html__('Section Title', 'xander'),
                    'type' => 'radio',
                    'choices' => array(
                        'title_show' => esc_html__('Section Title Show', 'xander'),
                        'title_hide' => esc_html__('Section Title Hide', 'xander'),
                    ),
                    'value' => 'title_show',
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
                    'value' => '7'                    
                ),
                'order' => array(
                    'type' => 'select',
                    'label' => __('Post Order', 'xander'),
                    'choices' => array(
                        'ASC' => 'Ascending ',
                        'DESC' => 'Descending '                        
                    )                    
                )                                
            )
        )
    ),
);