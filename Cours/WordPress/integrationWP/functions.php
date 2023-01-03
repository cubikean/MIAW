<?php 



// include CPT
include 'functions/cpt-collaborateurs.php';

include 'functions/cpt-option.php';

include 'functions/cpt-prestations.php';

// include Script et CSS
include 'functions/load-script.php';

include 'functions/load-style.php';

// Menu Header
function add_menu(){
    register_nav_menus(array('main_menu' => 'Navigation Principale'));
}
add_action( 'init','add_menu' );

// Menu Footer
function add_menu_footer(){
    register_nav_menus(array('footer_menu' => 'Navigation Footer'));
}
add_action( 'init','add_menu_footer' );


// Ajout des thumbnails
add_theme_support( 'post-thumbnails' );

// Title Dynamique
add_theme_support( 'title-tag' );

// Excerpt
add_post_type_support('page', 'excerpt');

// Contact form 7 remove span
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    $content = str_replace('<p>', '', $content);
        
    return $content;
});




