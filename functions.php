<?php
/**
 * Add theme support for various items
 *
 * This enables options in the WordPress admin
 * area to create and customize various parts
 * of the theme.
 */
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// Enqueue styles and scripts
function demo_enqueue_assets() {
	// CSS
	$uikit_css_path = '/css/uikit.min.css';
	wp_enqueue_style( 'uikit', get_stylesheet_directory_uri() . $uikit_css_path, array(), filemtime( get_stylesheet_directory() . $uikit_css_path ), 'screen' );

	// JS
	$uikit_js_path = '/js/uikit.min.js';
	wp_enqueue_script( 'uikit', get_template_directory_uri() . $uikit_js_path, array(), filemtime( get_stylesheet_directory() . $uikit_js_path ), false );

	$uikit_icons_js_path = '/js/uikit-icons.min.js';
	wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . $uikit_icons_js_path, array( 'uikit' ), filemtime( get_stylesheet_directory() . $uikit_icons_js_path ), false );
}
add_action( 'wp_enqueue_scripts', 'demo_enqueue_assets' );
