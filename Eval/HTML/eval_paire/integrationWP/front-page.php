<?php get_header() ?>


<figure class="description">
  <figcaption class="description__text">
  <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <a href="<?=get_post_permalink()?>" class="description__title"><?=the_title()?></a>
  <?=the_content()?></span>
  <button class="description__button"> En savoir +</button>
  </figcaption>
  <img class="description__img" src="<?= the_post_thumbnail_url( ) ?>" alt="Salade de tomates dans un bol">

  
  <?php endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
</figure>

<section class="articles" id="formule">
    <h2 class="articles__title">Nos formules</h2>




     <?php $args = array ( 'post_type' => 'formules', 'post_per_page'=>3);
           $the_query = new WP_Query( $args );
           while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
      <div class="article"> 
        <img class="article__logo" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo1.svg" alt="logo">
        <figure class="formule">
          <div class="formuleimg__container">
            <h3 class="formuleimg__nom_mobile"><?=the_title()?></h3>
            <img class="formuleimg__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/image-2.png"
            alt="assiette et petits plats" />
          </div>
        <figcaption class="formule__description">
          <h3 class="formule__nom"><?=the_title()?></h3>
          <ul class="formule__list">
            <li class="formule__info">  durée :<?=get_post_custom_values('duree')[0]?></li>
            <li class="formule__info"> prix: <?=get_post_custom_values('prix')[0]?></li>
            <li class="formule__info">nombres de cours : <?=get_post_custom_values('nombre_de_cours')[0]?></li>
          </ul>
          <p><?=the_content()?></p>
        </figcaption>
        </figure>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
  </div>
  

</section>

    <?php echo do_shortcode('[contact-form-7 id="44" title="inscription" html_class="formulaire"]')?>


<?php get_footer() ?>