<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('::', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
<?php
	  wp_nav_menu( array(
                'menu'              => 'ninja-menu',
                'theme_location'    => 'ninja-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</div>
	<div class="container">
