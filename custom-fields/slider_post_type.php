<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function werevolt_slider_cf(): void {
	Container::make( 'post_meta', 'Slider Options' )
	         ->where( 'post_type', '=', 'slide' )
	         ->add_fields( [
		         Field::make( 'text', 'slide_message', __( 'Words inside the slide', 'revolt' ) )
	         ] );
}

add_action( 'carbon_fields_register_fields', 'werevolt_slider_cf' );