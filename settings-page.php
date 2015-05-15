<?php

/* Coffee Page Settings */

	function WPTime_coffee_page_settings() {
		add_plugins_page( 'Coffee Page Settings', 'Coffee Page', 'update_core', 'WPTime_coffee_page_settings', 'WPTime_coffee_page_settings_page' );
	}
	add_action( 'admin_menu', 'WPTime_coffee_page_settings' );

	function WPTime_coffee_page_register_settings() {
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_title' );
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_error' );
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_desc' );
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_backto' );
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_placeholder' );
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_searchbutton' );
	}
	add_action( 'admin_init', 'WPTime_coffee_page_register_settings' );
		
	function WPTime_coffee_page_settings_page(){ // settings page function
	
		include (plugin_dir_path(__FILE__).'/settings-conditional.php');
		
		?>
			<div class="wrap">
				<h2>Coffee Page Settings</h2>
				<?php if( isset($_GET['settings-updated']) && $_GET['settings-updated'] ){ ?>
					<div id="setting-error-settings_updated" class="updated settings-error"> 
						<p><strong>Settings saved.</strong></p>
					</div>
				<?php } ?>
                
            	<form method="post" action="options.php">
                	<?php settings_fields( 'WPTime_coffee_page_setting' ); ?>
                	<table class="form-table">
                		<tbody>
                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_title">Title Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_title" type="text" id="wptcoffeepage_title" value="<?php echo esc_attr( $title ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_error">Error 404 Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_error" type="text" id="wptcoffeepage_error" value="<?php echo esc_attr( $error ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_desc">Description Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_desc" type="text" id="wptcoffeepage_desc" value="<?php echo esc_attr( $desc ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_backto">Back To Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_backto" type="text" id="wptcoffeepage_backto" value="<?php echo esc_attr( $backto ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_placeholder">Placeholder Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_placeholder" type="text" id="wptcoffeepage_placeholder" value="<?php echo esc_attr( $placeholder ); ?>">
								</td>
                        	</tr>
                            

                    		<tr>
                        		<th scope="row"><label for="wptcoffeepage_searchbutton">Search Button Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_searchbutton" type="text" id="wptcoffeepage_searchbutton" value="<?php echo esc_attr( $button ); ?>">
								</td>
                        	</tr>
                    	</tbody>
                    </table>
                    <p class="submit"><input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes"></p>
                </form>
            	<div class="tool-box">
					<h3 class="title">Recommended Links</h3>
					<p>Get collection of 87 WordPress themes for $69 only, a lot of features and free support! <a href="http://j.mp/ET_WPTime_ref_pl" target="_blank">Get it now</a>.</p>
					<p>See also:</p>
						<ul>
							<li><a href="http://j.mp/GL_WPTime" target="_blank">Must Have Awesome Plugins.</a></li>
							<li><a href="http://j.mp/CM_WPTime" target="_blank">Premium WordPress themes on CreativeMarket.</a></li>
							<li><a href="http://j.mp/TF_WPTime" target="_blank">Premium WordPress themes on Themeforest.</a></li>
							<li><a href="http://j.mp/CC_WPTime" target="_blank">Premium WordPress plugins on Codecanyon.</a></li>
							<li><a href="http://j.mp/BH_WPTime" target="_blank">Unlimited web hosting for $3.95 only.</a></li>
						</ul>
					<p><a href="http://j.mp/GL_WPTime" target="_blank"><img src="<?php echo plugins_url( '/banner/global-aff-img.png', __FILE__ ); ?>" width="728" height="90"></a></p>
					<p><a href="http://j.mp/ET_WPTime_ref_pl" target="_blank"><img src="<?php echo plugins_url( '/banner/570x100.jpg', __FILE__ ); ?>"></a></p>
				</div>
            </div>
        <?php
	} // settings page function
	
?>