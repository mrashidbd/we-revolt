<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

//add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
//function crb_attach_theme_options() {
//	Container::make( 'theme_options', __( 'Theme Options' ) )
//	         ->add_fields( array(
//		         Field::make( 'text', 'crb_text', 'Text Field' ),
//	         ) );
//}


add_action( 'carbon_fields_register_fields', 'werevolt_slider_cf' );
function werevolt_slider_cf(): void {
	Container::make( 'post_meta', 'Slider Options' )
	         ->where( 'post_type', '=', 'slide' )
	         ->add_fields( [
		         Field::make( 'text', 'slide_message', __( 'Words inside the slide', 'revolt' ) )
	         ] );
}