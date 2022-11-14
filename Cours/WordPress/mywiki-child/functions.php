<?php 

function import_css() {

	wp_enqueue_style('css_parent', get_template_directory_uri() .'/style.css', array('bootstrap'));

}

add_action( 'wp_enqueue_scripts', 'import_css' );

register_nav_menus(array('footer' => 'Navigation footer'));
