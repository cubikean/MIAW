<?php get_header(); ?>
<main>
<?php $page1 = get_field('accueil','option'); ?>
  <section class="boulangerie">
    <article class="boulangerie__contain">
      <h1><?= get_the_title($page1) ?></h1>
      <p><?= get_the_excerpt($page1) ?></p>
      <a href="<?php the_permalink($page1) ?>">En savoir plus</a>
    </article>
    <img src="<?= get_stylesheet_directory_uri(); ?>/img/img-fond.png" alt="Image fond pain">
  </section>
</main>

<?php get_footer(); ?>