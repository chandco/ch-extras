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
function chload_gazscript() {
	die();
	wp_enqueue_style( 'gz_gaz_style', plugins_url('css/ch-extras.css') );
}
<<<<<<< HEAD
add_action( 'wp_head', 'load_gazscript' );
=======
add_action( 'wp_enqueue_scripts', 'chload_gazscript' );
>>>>>>> 0ead33edc08d79e5fd82e4140e4bb4d44e6b0e55

wp_enqueue_style( 'gz_gaz_style', plugins_url('css/ch-extras.css') );
?>