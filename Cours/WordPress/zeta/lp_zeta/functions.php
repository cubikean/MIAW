<?php 



include 'functions/load-script.php';

include 'functions/load-style.php';

include 'functions/admin-bar.php';

include 'functions/acf-pro.php';

function add_menu(){
    register_nav_menus(array('main_menu' => 'Navigation Principale'));
}
add_action( 'init','add_menu' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );

add_post_type_support('page', 'excerpt');


function custom_post_type_slider(){

    register_post_type(
        'slider',
        array(
        'label' => 'Slider',
        'labels' => array(
        'name' => 'Slider',
        'singular_name' => 'Slider',
        'all_items' => 'Tous les Slider',
        'add_new_item' => 'Ajouter un Slider',
        'edit_item' => 'Éditer le Slider',
        'new_item' => 'Nouveau Slider',
        'view_item' => 'Voir le Slider',
        'search_items' => 'Rechercher parmi les Sliders',
        'not_found' => 'Pas de Slider trouvé',
        'not_found_in_trash'=> 'Pas de Slider dans la corbeille'
        ),
        'public' => true,
        'supports' => array(
        'title',
        'excerpt',
        'editor',
        'thumbnail'
        ),
        'has_archive' => true
        )
        );
    
    register_taxonomy(
        'genre',
        'slider',
        array(
            'label' => 'Genre',
            'labels' => array(
            'name' => 'Genre',
            'singular_name' => 'Genre',
            'all_items' => 'Tous les Genre',
            'edit_item' => 'Éditer le genre',
            'view_item' => 'Voir le genre',
            'update_item' => 'Mettre à jour le genre',
            'add_new_item' => 'Ajouter un genre',
            'new_item_name' => 'Nouveau genre',
            'search_items' => 'Rechercher parmi les Genre',
            'popular_items' => 'Genre les plus utilisés'
        ),
        'hierarchical' => true
        )
        );

        register_taxonomy_for_object_type( 'genre', 'slider' );
          
        
}
add_action('init', 'custom_post_type_slider');


function custom_post_type_temoignage(){

    register_post_type(
        'temoignage',
        array(
        'label' => 'Temoignage',
        'labels' => array(
        'name' => 'Temoignage',
        'singular_name' => 'Temoignage',
        'all_items' => 'Tous les Temoignage',
        'add_new_item' => 'Ajouter un Temoignage',
        'edit_item' => 'Éditer le Temoignage',
        'new_item' => 'Nouveau Temoignage',
        'view_item' => 'Voir le Temoignage',
        'search_items' => 'Rechercher parmi les Temoignages',
        'not_found' => 'Pas de Temoignage trouvé',
        'not_found_in_trash'=> 'Pas de Temoignage dans la corbeille'
        ),
        'public' => true,
        'supports' => array(
        'title',
        ),
        )
        );
    
}
add_action('init', 'custom_post_type_temoignage');