<?php 

include 'functions/load-script.php';

include 'functions/register-menu.php';

if( function_exists('register_sidebar')){

	register_sidebar(array(
	'name' => 'sidebar',
	'before_widget' => '<aside>',
	'after_widget' => '</aside>',
	));
	}

add_theme_support( 'post-thumbnails' );


add_theme_support( 'title-tag' );