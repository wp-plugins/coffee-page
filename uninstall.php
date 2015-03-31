<?php

/* Uninstall Plugin */

// if not uninstalled plugin
if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) 
	exit(); // out!


/*esle:
	if uninstalled plugin, this options will be deleted
*/
delete_option('wptcoffeepage_title');
delete_option('wptcoffeepage_error');
delete_option('wptcoffeepage_desc');
delete_option('wptcoffeepage_backto');
delete_option('wptcoffeepage_placeholder');
delete_option('wptcoffeepage_searchbutton');

?>