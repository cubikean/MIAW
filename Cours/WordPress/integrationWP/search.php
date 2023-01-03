
<?php get_header(); ?>
<?php $search_content = get_search_query();?>


<section class="prestation">
        <h1 class="prestation-title">Votre recherche pour "<?= $search_content?>"</h1>
<div class="prestation-card-container" style="--nb-cards:3">

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
</div>
</section>

<?php get_footer(); ?>
