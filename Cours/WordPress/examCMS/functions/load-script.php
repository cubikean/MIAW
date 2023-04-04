<?php 

function load_scripts() {

    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js' ,false , false, true );
	wp_enqueue_script( 'jquery_scrollex_js', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' ,false , false, true );
	wp_enqueue_script( 'jquery_scrolly_js', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' ,false , false, true );
	wp_enqueue_script( 'browser_js', get_template_directory_uri() . '/assets/js/browser.min.js' ,false , false, true );
	wp_enqueue_script( 'breakpoints_js', get_template_directory_uri() . '/assets/js/breakpoints.min.js' ,false , false, true );
	wp_enqueue_script( 'util_js', get_template_directory_uri() . '/assets/js/util.js' ,false , false, true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js' ,false , false, true );

}
add_action('wp_enqueue_scripts', 'load_scripts');