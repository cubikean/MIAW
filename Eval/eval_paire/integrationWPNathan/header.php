<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body>
<header id="header">
    <nav class="menu">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo Meticulous" class="menu__logo">
        <input type="checkbox" id="icone-burger-close" class="menu__input burger__mobile">
        <label for="icone-burger-close" class="menu__burger burger__mobile"></label>
        <ul class="menu__desktop">
            <li class="menu__item">
                <img class="item__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/home.svg" alt="home">
                <span class="item__text"><a href="" class="text__link">Home</a></span>
            </li>
        </ul>
        <ul class="menu__content">
            <div class="content__items">
                <input type="checkbox" id="icone-burger-close" class="menu__input">
                <label for="icone-burger-close" class="menu__burger burger__desktop"></label>
                <!-- On récupère seulement les items du menu pour pouvoir gérer plus facilement les images
                (il faut bien préciser un attribut title lorque de la création d'un item, qui servira à retrouver le nom de l'image) -->
                <?php
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['header-menu'];
                $primaryNav = wp_get_nav_menu_items($menuID);
                ?>
                <?php foreach ( $primaryNav as $navItem ) : ?>
                    <li class="content__item">
                        <a href="<?= $navItem->url?>" class="item__link">
                            <img class="item__img" src="<?= get_stylesheet_directory_uri();?>/assets/img/<?= strtolower($navItem->attr_title) ?>.svg" alt="<?= strtolower($navItem->title) ?>"><?= $navItem->title ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <a href="#header" class="menu__logo-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo Meticulous" class="menu__logo menu__logo-desktop"></a>
            </div>
            <div class="content__social-networks">
                <ul class="social-networks">
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook"></a></li>
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/linkedin.svg" alt="linkedin"></a></li>
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a></li>
                </ul>
            </div>
        </ul>
    </nav>

</header>
