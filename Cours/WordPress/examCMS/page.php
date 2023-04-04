<?php get_header(); ?>


<div id="wrapper">

    <section id="two" class="wrapper style3 fade-up">
        <div class="inner">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            <div class="features">

                <?php
                $args = array(
                    'post_type' => 'metier',
                    'order'   => 'ASC',
                );
                ?>
                <?php $query = new WP_Query($args); ?>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <section>
                        <span class="icon solid major <?php the_field('icon')?>"></span>
                        <h3><?php the_title()?></h3>
                        <p><?php the_content()?></p>
                        <a href="<?php the_permalink()?>">En savoir plus</a>
                    </section>
                <?php endwhile ?>

            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>