<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php
include (plugin_dir_path(__FILE__).'/../settings-conditional.php');
$blog_url = esc_url( home_url() );
$blog_name = get_bloginfo('name');
$css_reset = plugins_url( '/css/reset.css', __FILE__ );
$css_style = plugins_url( '/css/style.css', __FILE__ );
$html5shiv = plugins_url( '/js/html5shiv.js', __FILE__ );
?>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $css_reset; ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $css_style; ?>">
<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo $html5shiv; ?>"></script>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
if ( is_rtl() ) {
	?>
    	<style type="text/css">
			input.submit{
				right:auto !important;
				left:0 !important;
			}
			input.submit{
				border-radius:4px 0 0px 4px !important;
				-ms-border-radius:4px 0 0px 4px !important;
				-o-border-radius:4px 0 0px 4px !important;
				-webkit-border-radius:4px 0 0px 4px !important;
				-moz-border-radius:4px 0 0px 4px !important;
			}
		</style>
    <?php
}
?>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="wrapper animated fadeInDown">
    	<div class="content">
        <h1><a href="<?php echo $blog_url; ?>"><?php echo $title; ?></a></h1>
        <p><?php echo $error; ?><br><?php echo $desc; ?><span> <?php echo $backto; ?> <a href="<?php echo $blog_url; ?>"><?php echo $blog_name; ?></a></span></p>
        <form class="form" action="<?php echo $blog_url; ?>" method="get">
        	<input type="text" name="s" class="search" onclick="if(this.value=='<?php echo $placeholder; ?>'){this.value='';}" onblur="if(this.value==''){this.value='<?php echo $placeholder; ?>';}" value="<?php echo $placeholder; ?>">
            <input type="submit" name="submit" class="submit" value="<?php echo $button; ?>">
        </form>
        </div>
	</div>
    <?php wp_footer(); ?>
</body>
</html>