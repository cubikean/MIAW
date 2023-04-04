<?php
get_header();

?>

 <!-- ##### Breadcumb Area Start ##### -->
 <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>Quoi de neuf ?</p>
            <h2>Nouvelles</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

			
                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp left" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>Juin 2018</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">5 Festivals you shouldn’t miss this summer</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">Par<a href="#"> Admin</a></p>
                                <p class="tags"><a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Commentaires</a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p>Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis. Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis.</p>
                        </div>
                    </div>
				
					<?php 
					$args = array(
						'posts_per_page'      => -1,
						'post_type' => 'post',
					);
					?>
					<?php $query = new WP_Query( $args ); ?>

					<?php while( $query->have_posts() ) : $query->the_post(); ?>
						<div class="single-blog-post mb-100 wow fadeInUp left" data-wow-delay="100ms">
							<!-- Post Thumb -->
							<div class="blog-post-thumb mt-30">
								<a href="<?php the_permalink() ?>">
									<?php if(has_post_thumbnail()) :?>
										<?php the_post_thumbnail(); ?>
									<?php else : ?>
										<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/bg-img/blog1.jpg" alt="">
									<?php endif ?>
								</a>
								<!-- Post Date -->
								<div class="post-date">
									<span><?= get_the_date('d') ?></span>
									<span><?= get_the_date('M Y') ?></span>
								</div>
							</div>

							<!-- Blog Content -->
							<div class="blog-content">
								<!-- Post Title -->
								<a href="<?php the_permalink() ?>" class="post-title"><?php the_title()?></a>
								<!-- Post Meta -->
								<div class="post-meta d-flex mb-30">
									<p class="post-author">Par <a href="#"><?php the_author()?></a></p>
									<p class="tags"><a href="#"><?php the_category() ?></a></p>
									<p class="tags"><a href="#"><?= get_comments_number() ?> Commentaires</a></p>
								</div>
								<!-- Post Excerpt -->
								<p><?php the_excerpt()?></p>
							</div>
						</div>
					<?php endwhile ?>
<?php wp_reset_postdata();?>


                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>13</span>
                                <span>Juin 2018</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">5 Festivals you shouldn’t miss this summer</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">Par<a href="#"> Nico</a></p>
                                <p class="tags"><a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Commentaires</a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p>Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis. Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis.</p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp right" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog3.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>12</span>
                                <span>Juin 2019</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">5 Festivals you shouldn’t miss this summer</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">Par<a href="#"> Admin</a></p>
                                <p class="tags"><a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Commentaires</a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p>Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis. Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis.</p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp left" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>Juin 2018</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">5 Festivals you shouldn’t miss this summer</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">Par<a href="#"> Admin</a></p>
                                <p class="tags"><a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Commentaires</a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p>Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis. Pellentesque sit amet velit a libero viverra porta non eu justo. Vivamus mollis metus sem, ac sodales dui lobortis.</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

	<?php get_template_part( 'parts/footer', 'contact') ?>

<?php get_footer(); ?>