<?php 

function load_style() {

	wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css' );

}
add_action('wp_enqueue_scripts', 'load_style');
