
<?php get_header(); ?>

<?php $search_content = get_search_query();?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  
<div class="w3-container" id="services" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-red"><b>Votre recherche pour "<?= $search_content?>"</b></h1>
  <hr style="width:50px;border:5px solid red" class="w3-round">

<ul>
  <?php 
    $args = array(
        's'      => $search_content,
    ); 
    $query = new WP_Query( $args );
    
    if($query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>

          <li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>

        <?php endwhile ?>
    <?php else: ?>
        <p>Pas de résultat pour votre recherche, essayez autre chose</p>
    <?php endif;?>
</ul>


</div>


<!-- End page content -->
</div>

<?php get_footer(); ?>
