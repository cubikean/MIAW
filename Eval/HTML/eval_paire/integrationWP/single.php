<?php

get_header(); ?>

<figure class="description">
  <figcaption class="description__text">
  <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <h2 class="description__title"><?=the_title()?></h2>
  <?=the_content()?>
  <?=get_post_custom_values('theme')[0]?>
  </figcaption>


  
  <?php endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
</figure>
<?php 
get_footer();

?> 