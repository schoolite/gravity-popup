<?php 
	/**
* Plugin Name: Reddy
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Matrix
* Author URI: http://yourwebsiteurl.com/
**/

function load_my_scripts(){
    wp_enqueue_script('script', '/wp-content/plugins/reddy/js/myscript.js');
}

add_action('wp_enqueue_scripts', 'load_my_scripts');

wp_register_style( 'style', '/wp-content/plugins/reddy/css/reddy.css' );
wp_enqueue_style('style');