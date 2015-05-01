<?php
/*
Plugin Name: Coffee Page
Plugin URI: http://wp-time.com/coffee-page/
Description: Responsive and modern error 404 page.
Version: 1.1
Author: Qassim Hassan
Author URI: http://qass.im
License: GPLv2 or later
*/

/*  Copyright 2015 Qassim Hassan (email: qassim.pay@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// Coffee page settings
include (plugin_dir_path(__FILE__).'/settings-page.php');


// Redirect to coffee page
function WPTime_redirect_to_coffee_page(){
	
	if ( is_404() and !is_feed() ) { // if is error 404 and not feed
		$template = plugin_dir_path(__FILE__).'/template/coffee_page_display.php'; // coffee page url
		include($template); // redirect to coffee page
		exit(); // important!
	}
	
}
add_action( 'template_redirect', 'WPTime_redirect_to_coffee_page' );

?>