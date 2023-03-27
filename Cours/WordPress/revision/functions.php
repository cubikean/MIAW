<?php



include 'functions/load-script.php';

include 'functions/load-style.php';

include 'functions/admin-bar.php';

include 'functions/acf-pro.php';







function add_menu()
{
    register_nav_menus(array('main_menu' => 'Navigation Principale'));
}
add_action('init', 'add_menu');

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

add_post_type_support('page', 'excerpt');


function custom_post_type_metier()
{

    register_post_type(
        'metier',
        array(
            'label' => 'Métier',
            'labels' => array(
                'name' => 'Métier',
                'singular_name' => 'Métier',
                'all_items' => 'Tous les Métier',
                'add_new_item' => 'Ajouter un Métier',
                'edit_item' => 'Éditer le Métier',
                'new_item' => 'Nouveau Métier',
                'view_item' => 'Voir le Métier',
                'search_items' => 'Rechercher parmi les Métiers',
                'not_found' => 'Pas de Métier trouvé',
                'not_found_in_trash' => 'Pas de Métier dans la corbeille'
            ),
            'public' => true,
            'supports' => array(
                'title',
                'editor',
            ),
        )
    );
}
add_action('init', 'custom_post_type_metier');
