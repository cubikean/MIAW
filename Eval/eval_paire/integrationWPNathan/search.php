<?php get_header() ?>

<div>
    <?php
    $s = get_search_query();
    $args = array(
        's' =>$s
    );
    // The Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) : ?>
        <h2>Search Results for: <?= get_query_var('s') ?></h2>
        <?php while(have_posts()): the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php
        endwhile;
    else: ?>
        <p>Aucun résultat pour votre recherche</p>
        <?php
        wp_reset_postdata();
    endif;?>
</div>


<?php get_footer();?>
