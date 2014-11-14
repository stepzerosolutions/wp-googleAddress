<?php
/*
Plugin Name: Wp Google Address Autocompleate
Plugin URI: http://www.stepzero.solutions
Description: Wordpress google address autocompleate plugin
Author: Don Nuwinda
Version: 1.0
Author URI: http://www.stepzero.solutions
*/



/**
 * Enqueue scripts and styles for the front end.
 * @since V 1.0
 * @return void
 */
function sz_scripts_styles() {
	
	wp_register_script( 'connectgoogle-script', 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places' );
	wp_enqueue_script( 'forge-gm-script',  plugin_dir_url( __FILE__ )  . 'js/googlemaps.js', array( 'connectgoogle-script' ), '25-10-2014', true );
	wp_enqueue_style( 'forge-gmstyle', plugin_dir_url( __FILE__ )  .  'css/googlemaps.css', array(), '25-10-2014' );
}
add_action( 'wp_enqueue_scripts', 'sz_scripts_styles' );


