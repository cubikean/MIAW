<?php
function import_css()
{
    wp_enqueue_style('css_parent', get_template_directory_uri() .
        '/css/styles.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Jaldi');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Passion+One:wght@400;700');
}

add_action('wp_enqueue_scripts', 'import_css');
