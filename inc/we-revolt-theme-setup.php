<?php

if (! defined('ABSPATH')){
	exit;
}

function we_revolt_setup(): void {

	load_theme_textdomain( 'we-revolt', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'slider', 1920, 750, ['center', 'center'] );
	add_image_size( 'project_thumb', 360, 360, ['center', 'center'] );
	add_image_size( 'project_thumb_wide', 450, 350, ['center', 'center'] );
	add_image_size( 'blog_thumb', 1200, 500, ['center', 'center'] );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'we-revolt' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'we_revolt_setup' );

function we_revolt_content_width(): void {
	$GLOBALS['content_width'] = apply_filters( 'we_revolt_content_width', 640 );
}

add_action( 'after_setup_theme', 'we_revolt_content_width', 0 );

function we_revolt_widgets_init(): void {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'we-revolt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'we-revolt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'we_revolt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function we_revolt_scripts(): void {
	wp_enqueue_style( 'we-revolt-style', get_stylesheet_uri(), [], REVOLT_V );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'we_revolt_scripts' );

function we_revolt_mime_types( $mimes ) {

	// New allowed mime types.
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	// Remove a mime type.
	//unset( $mimes['exe'] );

	return $mimes;
}

add_filter( 'upload_mimes', 'we_revolt_mime_types' );

function remove_default_image_sizes( $sizes) {
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['medium_large']);
	unset( $sizes['large']);
	unset( $sizes['1536x1536']);
	unset( $sizes['2048x2048']);
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes', 10, 1);