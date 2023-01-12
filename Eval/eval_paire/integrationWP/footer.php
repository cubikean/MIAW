<footer class="footer">
<?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'footer__list', 'container' => false,'add_li_class'  => 'footer__link')); ?>
  <img class="footer__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Logo.svg" alt="Logo">
  <ul class="footer__list footer__list--logo">
    <li class="footer__logo"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/linkedin.svg" alt=""></li>
    <li class="footer__logo"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/twitter.svg" alt=""></li>
    <li class="footer__logo"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/insta.svg" alt=""></li>
    <li class="footer__logo"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg" alt=""></li>
  </ul>
</footer>


<?php wp_footer(); ?>
</body>
</html>
