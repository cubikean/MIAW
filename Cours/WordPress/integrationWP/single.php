<?php get_header(); ?>
<section class="prestation">
        <h1 class="prestation-title"><?php the_title()?></h1>
        <?php if(the_post_thumbnail()) :?>
            <img class="card-top_img" src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="">
        <?php endif;?>
            <?php the_content()?>
</section>


<?php get_footer(); ?>
