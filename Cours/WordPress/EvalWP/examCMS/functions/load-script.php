<?php 

function load_scripts() {

    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js' ,false , false, true );
	wp_enqueue_script( 'bootstrap_popper_js', get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js' ,false , false, true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js' ,false , false, true );
	wp_enqueue_script( 'plugins_js', get_template_directory_uri() . '/assets/js/plugins/plugins.js' ,false , false, true );
	wp_enqueue_script( 'active_js', get_template_directory_uri() . '/assets/js/active.js' ,false , false, true );

}
add_action('wp_enqueue_scripts', 'load_scripts');