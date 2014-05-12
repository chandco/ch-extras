<?php

/**
 * Plugin Name: Charlton House Extra Assets
 * Plugin URI: http://blog.chandco.net
 * Description: Custom JS and CSS for Charlton House.  Should be integrated with the theme after development
 * Version: 0.2
 * Author: Nathan Edwards
 * Author URI: mailto:nathan.edwards@chandco.net
 * License: GPL2
 */
 

// Register style sheet.


/**
 * Register style sheet.
 */
function chload_gazscript() {
	wp_enqueue_style( 'gz_gaz_style', plugins_url('css/ch-extras.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'chload_gazscript' );
//comment


add_filter( 'set_content_ids', 'plugin_override_content_ids' );

function plugin_override_content_ids($content_ids) {

	return array(
                        'cat_fresh_ideas' => 3,
                        'cat_news' => 1,
                        'cat_csr' => 7,
                        'page_about_us' => 12);
	}
?>