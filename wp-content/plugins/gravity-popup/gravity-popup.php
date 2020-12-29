<?php
/**
 * Plugin Name: Gravity Popup
 * Plugin URI: http://schoolite.co/gravity-popup
 * Description: Converts gravity form fields to show in paged popups
 * Version: 1.0
 * Author: Schoolite Team
 * Author URI: http://www.schoolite.co
 */


function sl_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'sl_modify_read_more_link' );