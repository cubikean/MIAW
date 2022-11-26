<?php 

function theme_loader_css(){
    wp_enqueue_style( 'bootstrap4-css', get_template_directory_uri() .'/assets/styles/bootstrap4/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() .'/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css');
    wp_enqueue_style( 'OwlCarousel2-css', get_template_directory_uri() .'/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css');
    wp_enqueue_style( 'OwlCarousel2-default-css', get_template_directory_uri() .'/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');
    wp_enqueue_style( 'OwlCarousel2-animate-css', get_template_directory_uri() .'/assets/plugins/OwlCarousel2-2.2.1/animate.css');
    wp_enqueue_style( 'main_styles-css', get_template_directory_uri() .'/assets/styles/main_styles.css');
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() .'/assets/styles/responsive.css');
    
}
add_action( 'wp_enqueue_scripts', 'theme_loader_css' );