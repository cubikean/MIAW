<?php 
    $args = array(
        'posts_per_page'      => 3,
	    // 'post_type' => 'post',
    ); 
    $query = new WP_Query( $args );
    
    while( $query->have_posts() ) : $query->the_post(); 
        
    ?>

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

            <p class="w3-opacity"><?php the_category() ?></p>

            <p><small><i>le <?php the_time('d/m/Y')?></i></small></p>
            <p><?php the_content() ?></p>
          </div>
        </div>
      </div>

    
    <?php endwhile ?>