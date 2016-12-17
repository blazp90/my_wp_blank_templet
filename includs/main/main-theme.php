<?php

/**
 * To include diferent style.css and javascript file
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', 'style.css', false ); 
}

function themeslug_enqueue_script() {
	wp_enqueue_script( 'my-js', 'filename.js', false );
}

//add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
//add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );


/***************************
 * https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 *
 ************************/

/**
 * To enable child theme use this
 */
function themeslug_enqueue_style() {
    if ( is_child_theme() ) {
        // load parent stylesheet first if this is a child theme
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
}

//add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );


/**
 * To load style.css on ADMIN page
 */
function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
//add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


/**
 * To load style.css on one admin page (whit plugin)
 */
function load_custom_wp_admin_style($hook) {
        // Load only on ?page=mypluginname
        if($hook != 'toplevel_page_mypluginname') {
                return;
        }
        wp_enqueue_style( 'custom_wp_admin_css', plugins_url('admin-style.css', __FILE__) );
}
//add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


/**
 * To load style.css, javascript.js on one admin page
 */
function my_enqueue($hook) {
    if ( 'edit.php' != $hook ) {
        return;
    }

    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/myscript.js' );
}
//add_action( 'admin_enqueue_scripts', 'my_enqueue' );








?>