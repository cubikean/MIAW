<?php 

function theme_loader_css(){
    wp_enqueue_style( 'style-exopets-css', get_template_directory_uri() .'/assets/css/styles.css');
}
add_action( 'wp_enqueue_scripts', 'theme_loader_css' );