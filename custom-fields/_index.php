<?php

//add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
//function crb_attach_theme_options() {
//	Container::make( 'theme_options', __( 'Theme Options' ) )
//	         ->add_fields( array(
//		         Field::make( 'text', 'crb_text', 'Text Field' ),
//	         ) );
//}

//For Post Types
require get_template_directory() . '/custom-fields/slider_post_type.php';
require get_template_directory() . '/custom-fields/service_post_type.php';
require get_template_directory() . '/custom-fields/client_post_type.php';

//for page-templates
require get_template_directory() . '/custom-fields/template_welcome.php';

