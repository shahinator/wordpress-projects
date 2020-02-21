<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$map_shortcode = fw_ext('shortcodes')->get_shortcode('map');
$options = array(
	'data_provider' => array(
		'type'  => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'population_method' => array(
				'label'   => __('Population Method', 'xander'),
				'desc'    => __( 'Select map population method (Ex: events, custom)', 'xander' ),
				'type'    => 'select',
				'choices' => $map_shortcode->_get_picker_dropdown_choices(),
			)
		),
		'choices' => $map_shortcode->_get_picker_choices(),
		'show_borders' => false,
		'hide_picker' => true
	),
	'gmap-key' => array_merge(
		array(
			'label' => __( 'Google Maps API Key', 'xander' ),
			'desc' => sprintf(
				__( 'Create an application in %sGoogle Console%s and add the Key here.', 'xander' ),
				'<a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">',
				'</a>'
			),
		),
		version_compare(fw()->manifest->get_version(), '2.5.7', '>=')
		? array(
			'type' => 'gmap-key',
		)
		: array(
			'type' => 'text',
			'fw-storage' => array(
				'type'      => 'wp-option',
				'wp_option' => 'fw-option-types:gmap-key',
			),
		)
	),

	'marker' => array(
		'type'  => 'upload',
		'label' => __('Marker', 'xander'),
		'desc'  => __('Select Your Google Map Marker', 'xander'),
	),

	'map_type' => array(
		'type'  => 'select',
		'label' => __('Map Type', 'xander'),
		'desc'  => __('Select map type', 'xander'),
		'choices' => array(
			'roadmap'   => __('Roadmap', 'xander'),
			'terrain' => __('Terrain', 'xander'),
			'satellite' => __('Satellite', 'xander'),
			'hybrid'    => __('Hybrid', 'xander')
		)
	),
	'map_height' => array(
		'label' => __('Map Height', 'xander'),
		'desc'  => __('Set map height (Ex: 300)', 'xander'),
		'type'  => 'text'
	),
	'disable_scrolling' => array(
		'type'  => 'switch',
		'value' => false,
		'label' => __('Disable zoom on scroll', 'xander'),
		'desc'  => __('Prevent the map from zooming when scrolling until clicking on the map', 'xander'),
		'left-choice' => array(
			'value' => false,
			'label' => __('Yes', 'xander'),
		),
		'right-choice' => array(
			'value' => true,
			'label' => __('No', 'xander'),
		),
	),
);