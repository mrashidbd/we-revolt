<?php
/**
 * We Revolt functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package We_Revolt
 */

use JetBrains\PhpStorm\NoReturn;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'REVOLT_V' ) ) {
	define( 'REVOLT_V', '1.0.d' );
}

if ( ! defined( 'ASSETS' ) ) {
	define( 'ASSETS', get_template_directory_uri() . '/front-end-assets' );
}

#[NoReturn] function dd( $str = null ) {
	echo '<pre>';
		print_r( $str );
	echo '<pre>';
	die();
}

require get_template_directory() . '/inc/we-revolt-theme-setup.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/********************************************** me ***************************************************************/

require get_template_directory() . '/core/_index.php';

require get_template_directory() . '/custom-fields/_index.php';
