<?php

function products_cpt()
{
    $labels = array(
        'name'      => __('Products'),
        'menu_name' => __('Products')
    );
    $args = array(
        'labels'             => $labels,
        'supports'           => array('title', 'thumbnail'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-products'
    );
    register_post_type('products', $args);
}

add_action('init', 'products_cpt');