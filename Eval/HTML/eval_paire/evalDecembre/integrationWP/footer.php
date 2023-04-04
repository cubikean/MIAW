

<footer>
    <article class="footer__article footer__social">
      <h2 class="footer__social__titre">Suivez-nous</h2>
      <article class="footer__social_figures">
        <figure> <img src="<?= get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="logo facebook"> <figcaption><a href="#">Facebook</a></figcaption></figure>
        <figure> <img src="<?= get_stylesheet_directory_uri(); ?>/img/instagram.svg" alt="logo Instagram"> <figcaption><a href="#">Instagram</a></figcaption></figure>
        <figure> <img src="<?= get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="logo Twitter"> <figcaption><a href="#">Twitter</a></figcaption></figure>
      </article>
    </article>
    <article class="footer__article footer__menu">
      <h2 class="footer__menu__titre">Menu</h2>
      <?php wp_nav_menu(
                    array('theme_location' => 'main_menu','container' => 'ul')
                ); ?>
    </article>
    <article class="footer__article footer__image">
      <img src="<?= get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Le logo de la boulangerie">
    </article>
    <article class="footer__article footer__nous">
      <h2>Trouvez nous</h2>
      <p>44 Avenue Albert Einstein</p>
      <p>17000 La Rochelle</p>
    </article>
    <article class="footer__article footer__contact">
      <h2>Contact</h2>
      <p>06 06 06 06 06</p>
      <p>contact.mims@gmail.com</p>
    </article>
</footer>

<?php wp_footer();?>
</body>

</html>