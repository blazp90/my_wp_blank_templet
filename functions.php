<?php
/* Add scripts and stylesheets */
function wp_theme_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/blaz_them1.css', array(), '0.0.1' );
	wp_enqueue_style( 'navigation left', get_template_directory_uri() . '/css/navi-left.css', array(), '0.0.1' );
	wp_enqueue_script( 'blaz theme js', get_template_directory_uri() . '/js/blaz_theme1.js', array(), '0.0.1' );
    //wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '0.0.1' );
}

add_action( 'wp_enqueue_scripts', 'wp_theme_scripts' );