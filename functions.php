<?php

add_action('after_setup_theme', 'webbird_child_theme_setup');

function webbird_child_theme_setup(){
    load_theme_textdomain('magneetdansers', get_template_directory() . '/languages');
}

add_action('wp_enqueue_scripts' , 'webbird_parent_scripts');

function webbird_parent_scripts() {

	wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'webbird-styles' );
}

add_action('wp_enqueue_scripts' , 'eagle_child_scripts');

function eagle_child_scripts() {
	wp_register_style( 'webbird-child-styles' , get_stylesheet_directory_uri() . '/css/styles.css' );
	wp_enqueue_style( 'webbird-child-styles' );
}

require_once( 'assets/dance-library.php' );
require_once( 'assets/links.php' );
require_once( 'assets/photo-albums.php' );
require_once( 'assets/events.php' );
?>
