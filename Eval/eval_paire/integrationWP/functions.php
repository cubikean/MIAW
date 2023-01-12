<?php
//ajout des pages de style
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/styles.css' );
}
    add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


  
    //ajout d'un menu modifiable
function ajouter_menu() {
register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'ajouter_menu');

//ajout de classes sur les li des menus
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//ajout des images mises en avant sur les pages
add_theme_support( 'post-thumbnails' );


//ajout de l'onglet options
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

//ajout du CPT Formules
add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'formules',
array(
'label' => 'Formules',
'public' => true,
'supports' => array('title','thumbnail','excerpt','editor','custom-fields')
)
);
}

//ajout de style sur le formulaire 

/* add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).?class="\s(?:.\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s"[^>]>(.)</\1>/i', '\2', $content);

    return $content;
}); */
add_filter('wpcf7_autop_or_not', '__return_false');