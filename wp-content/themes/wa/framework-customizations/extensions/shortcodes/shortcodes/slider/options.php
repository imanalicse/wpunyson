<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Option Slider Title', 'fw' ),
		'type'  => 'text',
	),
	'sliders' => array(
		'label'         => __( 'Slides', 'fw' ),
		'popup-title'   => __( 'Add/Edit Slider', 'fw' ),
		'desc'          => __( 'Here you can add, remove and edit your Sliders.', 'fw' ),
		'type'          => 'addable-popup',
		'template'      => '{{=caption}}',
		'popup-options' => array(
			'caption'   => array(
				'label' => __( 'Caption', 'fw' ),
				'desc'  => __( 'Enter the caption', 'fw' ),
				'type'  => 'text'
			),
			'image' => array(
				'label' => __( 'Image', 'fw' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
				'type'  => 'upload',
			),
			'content'       => array(
				'label' => __( 'description', 'fw' ),
				'desc'  => __( 'Enter the description here', 'fw' ),
				'type'  => 'textarea',
			),
			'url'      => array(
				'label' => __( 'Link', 'fw' ),
				'desc'  => __( 'Link to the slider', 'fw' ),
				'type'  => 'text'
			)
		)
	),
	'next_prev_control'         => array(
		'label' => __( 'Next prev control', 'fw' ),
		'type'  => 'checkbox',
		'value' => true,
	),
	'pagination'         => array(
		'label' => __( 'Pagination', 'fw' ),
		'type'  => 'checkbox',
		'value' => true,
	),
	'auto_play'         => array(
		'label' => __( 'Auto Play', 'fw' ),
		'type'  => 'checkbox',
		'value' => true,
	),
	'max_slides'         => array(
		'label' => __( 'Max slide', 'fw' ),
		'type'  => 'text',
		'value' => 1,
	),

);