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
add_action( 'wp_enqueue_scripts', 'chextras_assets' );

/**
 * Register style sheet.
 */
function chextras_assets() {
	echo "Enqueue ScriptS!";
	wp_register_style( 'ch-extra-css', plugins_url('/ch-extras/css/ch-extras.css') );
	wp_enqueue_style( 'ch-extra-css' );
}

?>