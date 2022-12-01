<?php
/**
 * Theme Functions.
 *
 * @package JoyAcademy
 */
 function jacademy_enqueue_scripts()
 {
	 
	 wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
	 wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[],false,'all');

	 //wp_enqueue_script('main-js',get_template_directory_uri().'/assets/main.js',[],filetime(get_template_directory().'/assests/main.js'),true);
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true );
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );
	wp_enqueue_style('style-css');
	wp_enqueue_style('bootstrap-css');
	wp_enqueue_script('main-js');
	wp_enqueue_script('bootstrap-js');
 }
 
 add_action( 'wp_enqueue_scripts', 'jacademy_enqueue_scripts' );