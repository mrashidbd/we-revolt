<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function werevolt_template_welcome_cf(): void {
	Container::make( 'post_meta', 'Homepage Information' )
	         ->where( 'post_template', '=', 'template-welcome.php' )
			->add_tab( __( 'Intro Section' ), [
				Field::make( 'text', 'cta_title', __( 'Title', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'cta_subtitle', __('Subtitle', 'revolt'))
				     ->set_width(50),
				Field::make('textarea', 'cta_desc', __('Description', 'revolt'))
				     ->set_width(50),
				Field::make('text', 'cta_link', __('About Company Link', 'revolt'))
				     ->set_width(50)
			] )
			->add_tab( __( 'Service Section' ), [
				Field::make( 'text', 'service_title', __( 'Title', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'service_subtitle', __('Subtitle', 'revolt'))
				     ->set_width(50),
			] )
			->add_tab( __( 'Project Section' ), [
				Field::make( 'text', 'project_title', __( 'Title', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'project_subtitle', __('Subtitle', 'revolt'))
				     ->set_width(50),
				Field::make('textarea', 'project_desc', __('Description', 'revolt'))
				     ->set_width(50),
				Field::make('text', 'all_project_link', __('All Project Page Link', 'revolt'))
				     ->set_width(50)
			] )
			->add_tab( __( 'Quote Section' ), [
				Field::make( 'text', 'quote_author_title', __( 'Name', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'quote_author_position', __('Position', 'revolt'))
				     ->set_width(50),
				Field::make('textarea', 'the_quote', __('Quote', 'revolt'))
				     ->set_width(50),
				Field::make('image', 'quote_author_picture', __('Picture', 'revolt'))
				     ->set_width(50)
			] )
			->add_tab( __( 'Featured Clients' ), [
				Field::make( 'text', 'clients_title', __( 'Title', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'clients_subtitle', __('Subtitle', 'revolt'))
				     ->set_width(50)
			] )
			->add_tab( __( 'Blog Section' ), [
				Field::make( 'text', 'blog_section_title', __( 'Title', 'revolt' ) )
				     ->set_width(50),
				Field::make('text', 'blog_section_subtitle', __('Subtitle', 'revolt'))
				     ->set_width(50)
			] );
}

add_action( 'carbon_fields_register_fields', 'werevolt_template_welcome_cf' );