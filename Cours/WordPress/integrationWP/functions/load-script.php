<?php 

function theme_loader_js() {
	wp_enqueue_script( 'common-exopets-js', get_template_directory_uri() .'/assets/js/common.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_loader_js' );
