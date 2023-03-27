<?php get_header(); ?>


<div id="wrapper">

	<!-- Intro -->
	<?php  while ( have_posts() ) : the_post(); ?>
	<section id="intro" class="wrapper style1 fullscreen fade-up">
		<div class="inner">
			<h1><?php the_title()?></h1>
			<p><?php the_content()?></p>
			<ul class="actions">
				<li><a href="#one" class="button scrolly">Continuer la lecture</a></li>
			</ul>
		</div>
	</section>
        <?php endwhile; ?>
	

	<!-- One -->
	<section id="one" class="wrapper style2 spotlights">
	<?php 
    $args = array(
        'posts_per_page'      => 3,
	    'post_type' => 'post',
    );
    ?>
    <?php $query = new WP_Query( $args ); ?>

    <?php while( $query->have_posts() ) : $query->the_post(); ?>

    <section>
			<a href="<?php the_permalink()?>" class="image">
			<?php if(has_post_thumbnail()) :?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                    <img src="<?= get_template_directory_uri() .'/images/pic01.jpg'; ?>" data-position="center center" alt="test">     
               <?php endif ?>
		</a>
			<div class="content">
				<div class="inner">
					<h2><?php the_title() ?></h2>
					<p><?php the_content()?></p>
					<ul class="actions">
						<li><a href="<?php the_permalink()?>" class="button">Lire la suite</a></li>
					</ul>
				</div>
			</div>
		</section>

    
    <?php endwhile ?>
	
	</section>

</div>




<?php get_footer(); ?>