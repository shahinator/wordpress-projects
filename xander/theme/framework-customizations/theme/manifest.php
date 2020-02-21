<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = esc_html__('Xander', 'xander');
$manifest['uri'] = 'http://themeforest.com/user/irstheme';
$manifest['description'] = XANDER_THEME;
$manifest['version'] = XANDER_VERSION;
$manifest['author'] = 'irstheme';
$manifest['author_uri'] = 'http://themeforest.com/user/irstheme';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.5'
	),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),   
    'backups' => array(),
    'analytics' => array(),
);
