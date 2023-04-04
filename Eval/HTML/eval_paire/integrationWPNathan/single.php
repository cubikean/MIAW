<?php
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>

    <h1> Champ custom : <?= get_field('titre') ?></h1>
    <p>
        <?php the_content() ?>
    </p>
    <small> Auteur : <?php the_author_link(); ?> </small>

    <small> Catégorie : <?php the_category(); ?> </small>

<?php endwhile; endif;?>

<?php get_footer() ?>
