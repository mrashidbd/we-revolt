<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function werevolt_service_cf(): void {

	$s_labels = [
		'plural_name'   => 'Service Steps',
		'singular_name' => 'Service Step'
	];

	Container::make( 'post_meta', 'Service Details' )
	         ->where( 'post_type', '=', 'services' )
	         ->add_fields( [
		         Field::make( 'text', 'step_intro', __( 'Introductory text for service steps' ) )
		              ->set_width( 50 ),
		         Field::make( 'complex', 'service_steps', __( 'Service Steps' ) )
		              ->setup_labels( $s_labels )
		              ->set_width( 50 )
		              ->add_fields( [
			              Field::make( 'text', 'title' )->set_help_text( 'Step Title' ),
			              Field::make( 'textarea', 'desc' )->set_help_text( 'Step Description' ),
		              ] ),
		         Field::make( 'text', 'additional_text', __( 'Additional service introductory text' ) )
		              ->set_width( 50 ),
		         Field::make( 'file', 'service_icon', __( 'Service Icon' ) )
		              ->set_type( 'image' )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'additional_services', __( 'Additional Services' ) )
	         ] );
}

add_action( 'carbon_fields_register_fields', 'werevolt_service_cf' );