<?php
function we_revolt_script_attach(): void {

	//CSS Register
	wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap', [], null);
	wp_register_style('bootstrap-stylesheet', ASSETS .'/css/libs/bootstrap.min.css', [], '5.3.0');
	wp_register_style('fa-stylesheet', ASSETS .'/css/libs/fontawesome.min.css', [], '6.4.0');
	wp_register_style('animate-stylesheet', ASSETS .'/css/libs/animate.compat.css', [], '4.1.1');
	wp_register_style('line-icon-stylesheet', ASSETS .'/css/libs/simple-line-icons.min.css', [], '2.4.0');
	wp_register_style('owl-stylesheet', ASSETS .'/css/libs/owl.carousel.min.css', [], '2.3.4');
	wp_register_style('owl-theme-stylesheet', ASSETS .'/css/libs/owl.theme.default.min.css', [], '2.3.4');
	wp_register_style('mag-pop-stylesheet', ASSETS .'/css/libs/magnific-popup.min.css', [], REVOLT_V);
	wp_register_style('theme-stylesheet', ASSETS .'/css/theme/theme.css', [], '9.9.3');
	wp_register_style('elements-stylesheet', ASSETS .'/css/theme/theme-elements.css', [], '9.9.3');
	wp_register_style('blog-stylesheet', ASSETS .'/css/theme/theme-blog.css', [], '9.9.3');
	wp_register_style('construction-stylesheet', ASSETS .'/css/construction.css', [], '9.9.3');
	wp_register_style('skin-stylesheet', ASSETS .'/css/skin-construction.css', [], '9.9.3');
	wp_register_style('custom-stylesheet', ASSETS .'/css/custom.css', [], REVOLT_V);


	//Js Register
	wp_enqueue_script('modernizr', ASSETS .'/js/modernizr.min.js', [], '3.6.0', false);
	wp_enqueue_script('plugin', ASSETS .'/js/plugins.min.js', [], REVOLT_V, true);
	wp_enqueue_script('theme', ASSETS .'/js/theme.js', [], '9.9.3', true);
	wp_enqueue_script('contact-view', ASSETS .'/js/view.contact.js', [], '9.9.3', true);
	wp_enqueue_script('custom', ASSETS .'/js/custom.js', [], REVOLT_V, true);
	wp_enqueue_script('theme-init', ASSETS .'/js/theme.init.js', [], REVOLT_V, true);


	//CSS Enqueue
	wp_enqueue_style('googleFonts');
	wp_enqueue_style('bootstrap-stylesheet');
	wp_enqueue_style('fa-stylesheet');
	wp_enqueue_style('animate-stylesheet');
	wp_enqueue_style('line-icon-stylesheet');
	wp_enqueue_style('owl-stylesheet');
	wp_enqueue_style('owl-theme-stylesheet');
	wp_enqueue_style('mag-pop-stylesheet');
	wp_enqueue_style('theme-stylesheet');
	wp_enqueue_style('elements-stylesheet');
	//wp_enqueue_style('blog-stylesheet');
	wp_enqueue_style('construction-stylesheet');
	wp_enqueue_style('skin-stylesheet');
	wp_enqueue_style('custom-stylesheet');


	//Js Enqueue
	wp_enqueue_script('modernizr');
	wp_enqueue_script('plugin');
	wp_enqueue_script('theme');
	wp_enqueue_script('contact-view');
	wp_enqueue_script('custom');
	wp_enqueue_script('theme-init');
}

add_action( 'wp_enqueue_scripts', 'we_revolt_script_attach' );


function dz_add_stylesheet_attributes( $html, $handle ) {
	if ( 'skin-stylesheet' === $handle ) {
		return str_replace( "id='skin-stylesheet-css'", "id='skinCSS'", $html );
	}
	return $html;
}
add_filter( 'style_loader_tag', 'dz_add_stylesheet_attributes', 10, 2 );
