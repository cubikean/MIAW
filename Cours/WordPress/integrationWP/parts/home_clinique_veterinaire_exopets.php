<?php
// var_dump($id_page_test);
$args = array(
    'page_id'       => 10,
);

$query = new WP_Query( $args );

while( $query->have_posts() ) : $query->the_post(); ?>
<?php $allMeta = get_post_meta(get_the_ID(), 'Bouton'); ?>
<section class="hero">

<h1 class="hero-title"><?php the_title()?></h1>
<p class="hero-subtitle"><?= wp_strip_all_tags( get_the_content() );?></p>
<div class="hero_btns">
    <a href="<?php the_field('url_bouton')?>" class="card_btn btn btn--green"><?php the_field('titre_bouton')?></a>
    <a href="<?php the_field('url_bouton_2')?>" class="card_btn btn"><?php the_field('titre_bouton_2')?></a>
  </div>
</section>
    <?php endwhile ?>