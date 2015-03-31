<?php

		if( get_option('wptcoffeepage_title') ){
			$title = get_option('wptcoffeepage_title');
		}else{
			$title = get_bloginfo('name');
		}
		
		if( get_option('wptcoffeepage_title') ){
			$error = get_option('wptcoffeepage_error');
		}else{
			$error = 'Error 404!';
		}
		
		if( get_option('wptcoffeepage_desc') ){
			$desc = get_option('wptcoffeepage_desc');
		}else{
			$desc = 'Maybe wrong link or deleted.';
		}
		
		if( get_option('wptcoffeepage_backto') ){
			$backto = get_option('wptcoffeepage_backto');
		}else{
			$backto = 'Back to';
		}
		
		if( get_option('wptcoffeepage_placeholder') ){
			$placeholder = get_option('wptcoffeepage_placeholder');
		}else{
			$placeholder = 'Use our search engine ...';
		}
		
		if( get_option('wptcoffeepage_searchbutton') ){
			$button = get_option('wptcoffeepage_searchbutton');
		}else{
			$button = 'Search';
		}
		
?>