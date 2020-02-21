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
                'work_subtitle'   => array(
                    'label'   => __('Work Sub Title', 'xander'),
                    'desc'    => __('please type Work Sub title', 'xander'),
                    'type'    => 'text'
                ),
                'work_title'   => array(
                    'label'   => __('Work title', 'xander'),
                    'desc'    => __('please type Work title', 'xander'),
                    'type'    => 'text'
                ),
                'work_content'   => array(
                    'label'   => __('Work Content', 'xander'),
                    'desc'    => __('please type Work Content', 'xander'),
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
                ), 
                'container_style' => array(
                    'label' => esc_html__('Container Style', 'xander'),
                    'type' => 'radio',
                    'choices' => array(
                        'container' => esc_html__('Container Default', 'xander'),
                        'container_fuild' => esc_html__('Container Full Width', 'xander'),
                    ),
                    'value' => 'container',
                ),                             
            )
        )
    ),
);