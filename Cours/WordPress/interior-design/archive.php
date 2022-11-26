
<?php get_header(); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  
<div class="w3-container" id="services" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-red"><b><?php the_title() ?></b></h1>
  <hr style="width:50px;border:5px solid red" class="w3-round">
</div>

<?php 
    $year = get_the_date('Y');
    $month = get_the_date('m');
    $args = array(
        'posts_per_page'      => -1,
	    'post_type' => 'post',
        'order' => 'DESC',
        'date_query' => array(
            'year' => $year,
            'month' => $month,
        )
        
        
    );
    ?>
    <?php $query = new WP_Query( $args ); ?>

    <?php while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
        <a href="<?php the_permalink()?>">
                <?php if(has_post_thumbnail()) :?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?= get_template_directory_uri() .'/assets/img/default-image.jpg'; ?>" alt="test">     
               <?php endif ?>
            </a>
          <div class="w3-container">
            <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
            <p class="w3-opacity"><a href=""><?php the_category() ?></a></p>
            <p><?php the_content() ?></p>
          </div>
        </div>
      </div>

    
    <?php endwhile ?>


<!-- End page content -->
</div>

<?php get_footer(); ?>
