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
                'team_title'   => array(
                    'label'   => __('Team title', 'xander'),
                    'desc'    => __('please type Team title', 'xander'),
                    'type'    => 'text'
                ),               
                'team_subtitle'   => array(
                    'label'   => __('Team Sub Title', 'xander'),
                    'desc'    => __('please type Team Sub title', 'xander'),
                    'type'    => 'text'
                ),                
                'team_content'   => array(
                    'label'   => __('Team Content', 'xander'),
                    'desc'    => __('please type Team Content', 'xander'),
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
                'team_style' => array(
                    'label' => esc_html__('Team Style', 'xander'),
                    'type' => 'radio',
                    'choices' => array(
                        'team_one' => esc_html__('Team Style One', 'xander'),
                        'team_two' => esc_html__('Team Style Two', 'xander'),
                    ),
                    'value' => 'team_one',
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