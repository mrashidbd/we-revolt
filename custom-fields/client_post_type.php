<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function werevolt_clients_cf(): void {
	Container::make( 'post_meta', 'Slider Options' )
	         ->where( 'post_type', '=', 'client' )
	         ->add_fields( [
		         Field::make( 'text', 'clients_link', __( 'Website Link of the Client', 'revolt' ) )
	         ] );
}

add_action( 'carbon_fields_register_fields', 'werevolt_clients_cf' );