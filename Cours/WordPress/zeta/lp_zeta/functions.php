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

