</main>
    <footer class="footer">
        <h3 class="footer-title">Exopets</h3>
        <?php 

wp_nav_menu( array(
    'theme_location' => 'footer_menu',
    'menu_class' => 'footer-list', 
    'container' => 'ul',
    ) );

?>
        <!-- <ul class="footer-list">
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
        </ul> -->
        <p class="footer-credentials">Exopets © <span id="YearDate"></span></p>
    </footer>
    <div class="cookies-banner">
        <p class="cookies-banner_text">Nous nous soucions de vos données et nous aimerions utiliser des cookies pour améliorer votre expérience.</p>
        <div class="cookies-banner_links">
            <a href="#" class="cookies-banner_links_more">En savoir plus</a>
            <a href="#" class="btn close-btn">OK</a>
        </div>
    </div>
<?php wp_footer() ?>

  </body>
</html>
