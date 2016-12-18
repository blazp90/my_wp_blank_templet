<?php
/* Add scripts and stylesheets */
function wp_theme_scripts() {
	wp_enqueue_style( 'blaz_them1.css', get_template_directory_uri() . '/css/blaz-them1.css', array(), '0.0.1' );
	wp_enqueue_style( 'navi-left.css', get_template_directory_uri() . '/css/navi-left.css', array(), '0.0.1' );
	wp_enqueue_script( 'blaz_them1.js', get_template_directory_uri() . '/js/blaz-them1.js', array(), '0.0.1', true );
    //wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '3.1.1', true );
}

add_action( 'wp_enqueue_scripts', 'wp_theme_scripts' );

/* Add Google Fonts */
function add_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}
add_action('wp_print_styles', 'add_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

/* Add sidebar */
$args = array(
	'name'          => __('Sidebar %d'),
    'id'            => 'right-sidebar',          
	'description'   => 'Right site Sidebar',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="">',
	'after_title'   => '</h2>' ); 

register_sidebars( 1, $args );