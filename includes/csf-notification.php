<?php
// Control core classes for avoid errors


if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = '_rn_settings';
   
   $css_id = '#wpi-rdn-post_id';
   
	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'     => 'Settings',
		'post_type' => 'notification',
        'context' => 'side',
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
		'title'  => false,
		'fields' => array(

			array(
				'id'          => 'style',
				'type'        => 'select',
				'title'       => 'Notice Style',
				'placeholder' => 'Select an option',
				'options'     => array(
					'success' => 'Success',
					'info'    => 'Info',
					'warning' => 'Warning',
					'error'   => 'Error',
					'default' => 'No Style',
				),
				'default'     => 'default',
			),
			array(
				'id'       => 'date_start',
				'type'     => 'date',
				'title'    => 'Start Date',
				'desc'     => 'Leave empty for no start date (will start immediately)',
				'settings' => array(
					'dateFormat' => 'yy-mm-dd',
				),
			),
			array(
				'id'       => 'date_end',
				'type'     => 'date',
				'title'    => 'End Date',
				'desc'     => 'Leave empty for no end date (will never end)',
				'settings' => array(
					'dateFormat' => 'yy-mm-dd',
				),
			),
			array(
				'id'       => 'css',
				'type'     => 'code_editor',
				'title'    => 'CSS Editor',
				'settings' => array(
					'theme' => 'mbo',
					'mode'  => 'css',
				),
				'default'  => $css_id .'{}',
                'desc' => 'Use '.$css_id .' for add custom css.without prefix may break user site admin style'
			),

		),
	) );

}
