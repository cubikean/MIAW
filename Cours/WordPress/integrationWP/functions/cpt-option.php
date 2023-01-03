
<?php
function custom_post_type_option()
{

    register_post_type(
        'option',
        array(
            'label' => 'option',
            'labels' => array(
                'name' => 'Option',
                'singular_name' => 'option',
                'all_items' => 'Tous les option',
                'add_new_item' => 'Ajouter un option',
                'edit_item' => 'Éditer le option',
                'new_item' => 'Nouveau option',
                'view_item' => 'Voir le option',
                'search_items' => 'Rechercher parmi les options',
                'not_found' => 'Pas de option trouvé',
                'not_found_in_trash' => 'Pas de option dans la corbeille'
            ),
            'public' => true,
            'menu_icon' => 'dashicons-admin-generic',
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
add_action('init', 'custom_post_type_option');
