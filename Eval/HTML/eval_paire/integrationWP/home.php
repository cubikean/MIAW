<?php
get_header(); ?>


  <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <figure class="description">
  <figcaption class="description__text">
  <a href="<?=get_post_permalink()?>" class="description__title" ><?=the_title()?></a>
  <?=the_content()?>
  <?=get_post_custom_values('theme')[0]?>
  </figcaption>
  </figure>
  <?php endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>

<?php 
get_footer();
?> 