<?php


include "wp_bootstrap_navwalker.php";

include "My_widget.php";

add_theme_support('post-thumbnails');

add_image_size('ninja', 100, 100, true );

function ninja_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'ninja_theme_styles' );


function ninja_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'ninja_theme_js' );

// Navigacija
add_theme_support( 'menus' );

function ninja_register_theme_menus() {
    register_nav_menus(
        array(
            'ninja-menu'     => __( 'Ninja Menu' ),
			'side-menu'		=> __( 'Stranski Menu')
        )
    );
}
add_action( 'init', 'ninja_register_theme_menus' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function ninja_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'ninja_widgets_init' );
