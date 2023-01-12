<?php get_header(); ?>
    <main>
    <section class="produits">
    <?php while (have_posts()) : the_post(); ?>
        <article class="produits__card produits__card-new">
        <img src="<?= get_stylesheet_directory_uri(); ?>/img/informations.png" class="produits__card__info" alt="informations">
        <figure class="produits__card__figure">
        <?php the_post_thumbnail(); ?>
            <figcaption><p class="card_left">5,00 €</p> <p class="card_right">390g</p></figcaption>
        </figure>
        <span>
            <p class="produits__card__titre"><?php the_title() ?></p>
            <a href="<?php the_permalink() ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/img/panier.png" alt="Panier"></a>
        </span>
        </article>
        <?php endwhile; ?>
    </section>
    </main>
<?php get_footer(); ?>