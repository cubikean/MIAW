<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/main_style.css' );

}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_theme_support( 'post-thumbnails' );
add_action('init', 'ajouter_menu');
function ajouter_menu() {
    register_nav_menu('main_menu', 'Menu principal');
}

//champ extrait
function wpc_excerpt_pages()
{
    add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
}
add_action('admin_menu', 'wpc_excerpt_pages');
add_theme_support( 'post-thumbnails' );

//ACF
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

/* Add custom classes to list item "li" */

function add_classes_on_li( $classes, $item, $args) {       
    $classes[] = "navigation__element"; // you can add multiple classes here
    return $classes;
} 

add_filter( 'nav_menu_css_class' , 'add_classes_on_li' , 1, 3 );