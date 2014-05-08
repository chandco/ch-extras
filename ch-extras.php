<?php

/**
 * Plugin Name: Charlton House Extra Assets
 * Plugin URI: http://blog.chandco.net
 * Description: Custom JS and CSS for Charlton House.  Should be integrated with the theme after development
 * Version: 0.1
 * Author: Nathan Edwards
 * Author URI: mailto:nathan.edwards@chandco.net
 * License: GPL2
 */
 

// Register style sheet.


/**
 * Register style sheet.
 */
function load_gazscript() {
	die();
	wp_enqueue_style( 'gz_gaz_style', plugins_url('css/ch-extras.css') );
}
add_action( 'wp_head', 'load_gazscript' );

wp_enqueue_style( 'gz_gaz_style', plugins_url('css/ch-extras.css') );
?>