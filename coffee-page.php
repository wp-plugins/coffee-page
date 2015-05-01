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


// WP Time Page
if( !function_exists('WP_Time_Ghozylab_Aff') ) {
    function WP_Time_Ghozylab_Aff() {
        add_menu_page( 'WP Time', 'WP Time', 'update_core', 'WP_Time_Ghozylab_Aff', 'WP_Time_Ghozylab_Aff_Page');
        function WP_Time_Ghozylab_Aff_Page() {
            ?>
                <div class="wrap">
                    <h2>WP Time</h2>
                    <div class="tool-box">
                        <h3 class="title">Thanks for using our plugins!</h3>
                        <p>For more plugins, please visit <a href="http://wp-time.com" target="_blank">WP Time Website</a> and <a href="https://profiles.wordpress.org/qassimdev/#content-plugins" target="_blank">WP Time profile on WordPress</a>.</p>
                        <p>For contact or support, please visit <a href="http://wp-time.com/contact/" target="_blank">WP Time Contact Page</a>.</p>
                    </div>
                    <div class="tool-box">
                        <h3 class="title">Great WordPress Plugins</h3>
                        <p><a href="http://j.mp/GL_WPTime" target="_blank">Must Have Awesome Plugins.</a></p>
                        <p><a href="http://j.mp/GL_WPTime" target="_blank"><img src="http://content.ghozylab.com/partners/aff/images/global-aff-img.png" width="728" height="90"></a></p>
                    </div>
                </div>
            <?php
        }
    }
    add_action( 'admin_menu', 'WP_Time_Ghozylab_Aff' );
}


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