<?php get_header(); ?>
<section class="prestation">
        <h1 class="prestation-title">Page blog</h1>
<div class="prestation-card-container" style="--nb-cards:3">

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

    <div class="card">
                <div class="card-top">
                    <img class="card-top_img" src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="image de vaccin">
                    <h3 class="card-top_title"><?php the_title()?></h3>
                    <h4>Autheur : <?= get_the_author()?></h4>
                    <h4>Ecrit le : <?= get_the_date()?></h4>
                    <h4>Cat : <?php the_category(', ')?></h4>

                </div>
                <ul class="card-content">
                    <?php the_excerpt()?>
                    
                </ul>
                <?php if ($query->current_post % 2 == 0): ?>
                    <!-- check even change btn color on even -->
                <a href="<?php  the_permalink()?>" class="card_btn btn btn--green">Voir l'article</a>
                <?php else: ?>
                    <!-- check odd change btn color on odd -->
                <a href="<?php the_permalink()?>" class="card_btn btn">Voir l'article</a>
                    
                <?php endif ?>
            </div>

    
    <?php endwhile ?>
</div>
</section>
    <?php get_footer(); ?>
