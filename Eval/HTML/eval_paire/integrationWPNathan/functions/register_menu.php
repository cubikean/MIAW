<?php

function register_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'register_menu' );


function register_menu_legal() {
    register_nav_menus(
        array(
            'legal-menu' => __( 'Legal Menu' ),
        )
    );
}
add_action( 'init', 'register_menu_legal' );

function register_menu_contact() {
    register_nav_menus(
        array(
            'contact-menu' => __( 'Contact Menu' ),
        )
    );
}
add_action( 'init', 'register_menu_contact' );