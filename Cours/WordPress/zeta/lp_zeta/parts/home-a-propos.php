<?php
var_dump($id_page_test);
$args = array(
    // 'pagename' => 'a-propos',
    'page_id'       => $id_page_test,
);

$query = new WP_Query( $args );

while( $query->have_posts() ) : $query->the_post(); ?>
<div class="about prlx_parent">
    <!-- https://unsplash.com/@nativemello -->
    <div class="about_background prlx" style="background-image:url(<?= get_the_post_thumbnail_url(null, 'full') ?>)"></div>
    <div class="about_shapes"><img src="<?= get_stylesheet_directory_uri();?>/assets/images/about_shapes.png" alt=""></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center section_title">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
            <div class="about_text">
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
    </div>
    <?php endwhile ?>