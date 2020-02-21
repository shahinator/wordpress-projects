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
                'blog_background_image' => array(
                    'label' => __('Blog Background Image', 'xander'),
                    'desc' => __('Upload an Background image', 'xander'),
                    'type' => 'upload'
                ),               
                'blog_subtitle'   => array(
                    'label'   => __('Blog Sub Title', 'xander'),
                    'desc'    => __('please type Blog Sub title', 'xander'),
                    'type'    => 'text'
                ),
                'blog_title'   => array(
                    'label'   => __('Blog title', 'xander'),
                    'desc'    => __('please type Blog title', 'xander'),
                    'type'    => 'text'
                ),
                'blog_content'   => array(
                    'label'   => __('Blog Content', 'xander'),
                    'desc'    => __('please type Blog Content', 'xander'),
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
                    'value' => '6'                    
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