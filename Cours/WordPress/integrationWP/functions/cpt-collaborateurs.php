<?php
function custom_post_type_collaborateurs()
{

    register_post_type(
        'collaborateurs',
        array(
            'label' => 'collaborateurs',
            'labels' => array(
                'name' => 'Collaborateurs',
                'singular_name' => 'collaborateurs',
                'all_items' => 'Tous les collaborateurs',
                'add_new_item' => 'Ajouter un collaborateurs',
                'edit_item' => 'Éditer le collaborateurs',
                'new_item' => 'Nouveau collaborateurs',
                'view_item' => 'Voir le collaborateurs',
                'search_items' => 'Rechercher parmi les collaborateurss',
                'not_found' => 'Pas de collaborateurs trouvé',
                'not_found_in_trash' => 'Pas de collaborateurs dans la corbeille'
            ),
            'public' => true,
            'menu_icon' => 'dashicons-groups',
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
add_action('init', 'custom_post_type_collaborateurs');
