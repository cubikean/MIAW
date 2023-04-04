<?php
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>
    <div style="display: flex; flex-direction: column; align-items: center">

        <h1><?= get_the_title() ?></h1>
        <?= get_the_post_thumbnail(get_the_ID()) ?>

    </div>
<?php endwhile; endif;?>

<?php get_footer() ?><?php
