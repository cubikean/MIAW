<?php 

function theme_loader_js() {
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() .'/assets/js/jquery-3.2.1.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() .'/assets/styles/bootstrap4/popper.js', array('bootstrap'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/assets/styles/bootstrap4/bootstrap.min.js', array('bootstrap'), '1.0.0', true );
	wp_enqueue_script( 'greensock-js', get_template_directory_uri() . '/assets/plugins/greensock/TweenMax.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'scrollmagic-js', get_template_directory_uri() . '/assets/plugins/scrollmagic/ScrollMagic.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'greensock-animation-js', get_template_directory_uri() . '/assets/plugins/greensock/animation.gsap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'OwlCarousel2-js', get_template_directory_uri() . '/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_loader_js' );
