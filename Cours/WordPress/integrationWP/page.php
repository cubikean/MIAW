
<?php get_header(); ?>

<section class="hero">

        <h1 class="hero-title"><?php the_title()?></h1>
        <?php if(get_the_title() === 'Contact'):?>
            <p class="hero-subtitle"><?php the_content()?></p>
            <?php else: ?>
            <p class="hero-subtitle"><?= wp_strip_all_tags( get_the_content() );?></p>
        <?php endif;?>

        <div class="hero_btns">
            <?php if(get_field('titre_bouton')):?>
                <a href="<?php the_field('url_bouton') ?>" class="btn btn--green "><?php the_field('titre_bouton') ?></a>
                <a href="<?php the_field('url_bouton_2') ?>" class="btn"><?php the_field('titre_bouton_2') ?></a>
                <?php endif;?>

          </div>

    </section>

<?php get_footer(); ?>
