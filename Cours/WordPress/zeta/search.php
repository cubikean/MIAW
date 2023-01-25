<?php
get_header();
?>

<div class="services">
    <div class="container">
        <h1>
            Recherche 
        </h1>
        <hr>
        <?php get_search_form( true ); ?>
        <hr>
        <div class="row">
        <?php while ( have_posts()) : the_post(); ?>
            <div class="col-lg-4 features_col">
                <div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                        </a>
                    </div>
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p>
                        <?php the_time('d/m/Y'); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </div>
</div>

<?php
get_footer();
?>