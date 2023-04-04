<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<main>
  <section class="boulangerie">
    <article class="boulangerie__contain">
      <h1><?php the_title() ?></h1>
      <?php
            the_content();
            the_post_thumbnail();
            endwhile;
            ?>
    </article>
  </section>
</main>
<?php get_footer(); ?>