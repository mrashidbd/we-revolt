<?php

// enqueueing CSS & Js
require get_template_directory() . '/core/assetsloader.php';
require get_template_directory() . '/core/WP_WeRevolt_Navwalker.php';


function add_menuclass( $ulclass ) {


	$p = [ '/<a /', '/menu-item-has-children/', '/<ul class="sub-menu">/'];
	$r = [ '<a class="nav-link"', 'dropdown menu-item-has-children', '<ul class="dropdown-menu">' ];

	return preg_replace( $p, $r, $ulclass );
}

//add_filter( 'wp_nav_menu', 'add_menuclass' );
