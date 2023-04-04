<?php



include 'functions/load-script.php';

include 'functions/load-style.php';


function add_menu()
{
    register_nav_menus(array(
        'main_menu' => 'Navigation Principale',
    ));
}
add_action('init', 'add_menu');

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

add_post_type_support('page', 'excerpt');


function custom_post_type_album()
{

    register_post_type(
        'album',
        array(
            'label' => 'Album',
            'labels' => array(
                'name' => 'Album',
                'singular_name' => 'Album',
                'all_items' => 'Tous les Album',
                'add_new_item' => 'Ajouter un Album',
                'edit_item' => 'Éditer le Album',
                'new_item' => 'Nouveau Album',
                'view_item' => 'Voir le Album',
                'search_items' => 'Rechercher parmi les Albums',
                'not_found' => 'Pas de Album trouvé',
                'not_found_in_trash' => 'Pas de Album dans la corbeille'
            ),
            'public' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
            ),
        )
    );
}
add_action('init', 'custom_post_type_album');

function nbArtistes($atts)
{
    $val = shortcode_atts(array('nb' => 1), $atts);

    $args = array(
        'post_type'  => 'post',
        'order'      => 'ASC',
        'posts_per_page' => $val['nb'],

    );

    $query = new WP_Query($args);
    $html = "";
    while ($query->have_posts()) : $query->the_post();
        
    endwhile;
    return $html;

    wp_reset_postdata();
}
add_shortcode('articles', 'nbArtistes');
