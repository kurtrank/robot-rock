<?php
/**
 * Robot Rock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Robot_Rock
 * @since 1.0.0
 */

/**
 * Register and Enqueue Styles.
 */
function robotrock_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'robotrock-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'robotrock_register_styles' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function robotrock_menus() {

	$locations = array(
		'header' => __( 'Header', 'robotrock' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'robotrock_menus' );
