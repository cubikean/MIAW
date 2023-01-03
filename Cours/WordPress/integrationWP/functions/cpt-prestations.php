<?php
function custom_post_type_prestations()
{

    register_post_type(
        'prestations',
        array(
            'label' => 'prestations',
            'labels' => array(
                'name' => 'Prestations',
                'singular_name' => 'prestations',
                'all_items' => 'Tous les prestations',
                'add_new_item' => 'Ajouter un prestations',
                'edit_item' => 'Éditer le prestations',
                'new_item' => 'Nouveau prestations',
                'view_item' => 'Voir le prestations',
                'search_items' => 'Rechercher parmi les prestationss',
                'not_found' => 'Pas de prestations trouvé',
                'not_found_in_trash' => 'Pas de prestations dans la corbeille'
            ),
            'public' => true,
            'menu_icon' => 'dashicons-businessman',
            'supports' => array(
                'title',
                'excerpt',
                'editor',
                'custom-fields',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
}
add_action('init', 'custom_post_type_prestations');
