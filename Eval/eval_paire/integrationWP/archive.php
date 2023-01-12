<?php
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>

    <h1><a href="<?php the_permalink(); ?>"><?= get_the_title() ?></a></h1>

<?php endwhile; endif;?>

<?php get_footer() ?>