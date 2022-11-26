<?php 

function theme_js_css() {
	wp_enqueue_style( 'style-css', get_template_directory_uri() .'/assets/css/interior.css' );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/global.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js_css' );

?>
