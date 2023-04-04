<?php get_header(); ?>


            <h1 class="major"><?php the_title()?></h1>
            <p><?= get_the_date()?></p>
            <span class="image fit">
                <?php if(has_post_thumbnail()) :?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?= get_template_directory_uri() .'/assets/img/default-image.jpg'; ?>" alt="test">     
               <?php endif ?></span>
               <p><?php the_content() ?></p>
               <?php comments_template(); ?>
               <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
               ?>

    <!-- Main -->
    

</div>

<?php get_footer(); ?>