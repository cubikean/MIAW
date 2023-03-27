<?php get_header(); ?>

<div id="wrapper">

    <section id="main" class="wrapper style1 fade-up">
        <div class="inner">
            <h1 class="major"><?php the_title()?></h1>
            <p><?= get_the_date()?></p>
            <span class="image fit">
                <?php if(has_post_thumbnail()) :?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?= get_template_directory_uri() .'/assets/img/default-image.jpg'; ?>" alt="test">     
               <?php endif ?></span>
               <p><?php the_content() ?></p>
        </div>
    </section>

    <!-- Main -->
    

</div>

<?php get_footer(); ?>