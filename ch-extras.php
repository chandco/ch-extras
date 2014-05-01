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
 
function chextras_assets()

{
		//wp_enqueue_script('ch_extras_css', plugins_url('gazscript.js',__FILE__), 'jquery', "0.1", true );
		wp_enqueue_style( 'ch_extras_css', plugins_url('css/ch-extras.css',__FILE__) );
		//wp_enqueue_script('vfe_the_js', 'javascript.js' );
}
add_action( 'wp_enqueue_scripts', 'chextras_assets' );

?>