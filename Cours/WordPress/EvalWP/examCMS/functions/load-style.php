<?php 

function load_style() {

	wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css' );
	// wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css' );

}
add_action('wp_enqueue_scripts', 'load_style');
