<footer class="footer">
    <section class="footer__inner">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo meticulous" class="footer__logo">
<!--        On récupère le menu des mentions légales-->
        <?php
//        add_li_class permet de rajouter des classes aux li. Cela est possible grâce au fichier add_li_classes_menu
        wp_nav_menu(
            array(
                'theme_location' => 'legal-menu',
                'container'      => 'ul',
                'menu_class'     => 'footer__menu',
                'add_li_class'   => 'menu__item'
            )
        );
        ?>
        <ul class="footer__menu">
<!--            On récupère seulement les items du menu de contact-->
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['contact-menu'];
            $primaryNav = wp_get_nav_menu_items($menuID);
            ?>
            <?php foreach ( $primaryNav as $navItem ) :?>
                <li class="menu__item">
                    <?php if(strlen($navItem->url) === 0): ?>
                        <?=$navItem->title?>
                    <?php else: ?>
                        <a href="<?=$navItem->url?>"><?=$navItem->title?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
<!--            On affiche le reste du menu -->
            <li>
                <ul class="social-networks">
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook"></a></li>
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/linkedin.svg" alt="linkedin"></a></li>
                    <li class="social-networks__item"><a href="" class="item__link"><img
                                    src="<?= get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a></li>
                </ul>
            </li>
        </ul>
        <span class="footer__right">meticulous © all rights reserved</span>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>