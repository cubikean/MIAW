<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zeta</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zeta Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css"> -->
    <?php wp_head(); ?>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header d-flex flex-row justify-content-end align-items-center">

            <!-- Logo -->
            <div class="logo_container mr-auto">
                <div class="logo">
                    <a href="index.html"><span>z</span>zeta<span>.</span></a>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav justify-self-end">
                <!-- <ul class="nav_items">
                    <li class="active"><a href="index.html"><span>Accueil</span></a></li>
                    <li><a href="services.html"><span>A propos</span></a></li>
                    <li><a href="#"><span>Blog</span></a></li>
                    <li><a href="#"><span>Contact</span></a></li>
                </ul> -->
                <?php 

                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'menu_class' => 'nav_items', 
                    'menu_id' => 'menu-mon-menu', 
                    'container' => false,
                    ) );
                
                ?>
            </nav>

            <!-- Hamburger -->
            <div class="hamburger_container">
                <span class="hamburger_text">Menu</span>
                <span class="hamburger_icon"></span>
            </div>

        </header>

        <!-- Menu -->

        <div class="fs_menu_overlay"></div>
        <div class="fs_menu_container">
            <div class="fs_menu_shapes"><img src="<?= get_stylesheet_directory_uri();?>/assets/images/menu_shapes.png" alt=""></div>
            <nav class="fs_menu_nav">
                <!-- <ul class="fs_menu_list">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="services.html">A propos</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul> -->
                <?php 

                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'menu_class' => 'nav_items', 
                    'menu_id' => 'menu-mon-menu', 
                    'container' => false,
                    ) );
                
                ?>
            </nav>
            <div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
                <ul class="fs_social">
                

                    <li><a href="<?php the_field('url_pinterest', 'option'); ?>"><i class="fab fa-pinterest trans_300"></i></a></li>
                    <li><a href="<?php the_field('url_pinterest', 'option'); ?>"><i class="fab fa-facebook-f trans_300"></i></a></li>
                    <li><a href="<?php the_field('url_pinterest', 'option'); ?>"><i class="fab fa-twitter trans_300"></i></a></li>
                    <li><a href="<?php the_field('url_pinterest', 'option'); ?>"><i class="fab fa-linkedin-in trans_300"></i></a></li>
                </ul>
            </div>
        </div>