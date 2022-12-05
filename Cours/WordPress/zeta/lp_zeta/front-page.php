<?php get_header(); ?>


	<!-- Hero Slider -->

	<div class="home">
		<div class="hero_slider_container slider_prlx">
			<div class="owl-carousel owl-theme hero_slider">


			<!-- Test silder -->

	
			<?php $args = array(
				'post_type'  => 'slider',
				'order'      => 'ASC',
				'posts_per_page' => '3',
			
			);

			$query = new WP_Query( $args );

			while( $query->have_posts() ) : $query->the_post(); ?>
                <!-- Slider Item -->

			<div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url(<?= get_the_post_thumbnail_url(null, 'full') ?>)"></div>
                    <div class="main_slider_shapes"><img src="<?= get_stylesheet_directory_uri();?>/assets/images/main_slider_shapes.png" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1><?php the_title();?></h1>
                                    <p><?php the_terms( $post->ID, 'genre', 'Genre : ' ); ?></p>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="button discover_button">
                                        <a href="#" class="d-flex flex-row align-items-center justify-content-center">Découvrir<img src="<?= get_stylesheet_directory_uri();?>/assets/images/arrow_right.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endwhile ?>
           
			<!-- Slider Dots -->

			<div class="main_slider_dots">
				<div class="container">
					<div class="row">
						<div class="col">
							<ul id="main_slider_custom_dots" class="main_slider_custom_dots">
								<li class="main_slider_custom_dot active">01.</li>
								<li class="main_slider_custom_dot">02.</li>
								<li class="main_slider_custom_dot">03.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Dots -->

			<div class="main_slider_nav_left main_slider_nav">
				<i class="fas fa-chevron-left trans_300"></i>
			</div>

			<div class="main_slider_nav_right main_slider_nav">
				<i class="fas fa-chevron-right trans_300"></i>
			</div>

		</div>
	</div>



	<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="home_social">
			<?php if (get_field('url_pinterest', 'option') != null): ?>
				<li><a href="<?php the_field('url_pinterest', 'option');?>"><i class="fab fa-pinterest trans_300"></i></a></li>
			<?php endif ?>
			<?php if (get_field('url_facebook', 'option') != null): ?>
				<li><a href="<?php the_field('url_facebook', 'option');?>"><i class="fab fa-facebook-f trans_300"></i></a></li>
			<?php endif ?>
			<?php if (get_field('url_twitter', 'option') != null): ?>
				<li><a href="<?php the_field('url_twitter', 'option');?>"><i class="fab fa-twitter trans_300"></i></a></li>
			<?php endif ?>
			<?php if (get_field('url_linkedin', 'option') != null): ?>
				<li><a href="<?php the_field('url_linkedin', 'option');?>"><i class="fab fa-linkedin-in trans_300"></i></a></li>
			<?php endif ?>
		</ul>
	</div>

	


	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row align-items-end">

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="<?= get_stylesheet_directory_uri();?>/assets/images/icon_1.svg" alt="">
						</div>
						<h3>Fantastique</h3>
						<p>Partez à la rencontre de créatures mystiques et de phénomènes étranges avec notre collection "Fantastique"</p>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="<?= get_stylesheet_directory_uri();?>/assets/images/icon_2.svg" alt="">
						</div>
						<h3>Fantasy</h3>
						<p>Voyagez au fil des pages dans un monde imaginaire avec notre collection de livres de fantasy.</p>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="<?= get_stylesheet_directory_uri();?>/assets/images/icon_3.svg" alt="">
						</div>
						<h3>Science-Fiction</h3>
						<p>Avec notre collection Science-fiction, plongez-vous dans un univers où la technologie occupe une tout autre place.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

    <?php

    $id_page_a_propos = get_field('id_a_propos', 'option');
    set_query_var( 'id_page_test', $id_page_a_propos );
    get_template_part('/parts/home-a-propos');
    ?>

	</div>


	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>Témoignages</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="testimonials_container">
						<div class="testimonials_container_inner"></div>

						<!-- Testimonials Slider -->

						

						<div class="owl-carousel owl-theme testimonials_slider">

						<?php $args = array(
							'post_type'  => 'temoignage',
							'orderby' => 'title',
							'order'      => 'ASC',
							'posts_per_page' => '3',
						
						);

						$query = new WP_Query( $args );

						while( $query->have_posts() ) : $query->the_post(); ?>
							<!-- Slider Item -->

							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img width="100px" height="100px" src="<?= the_field('photo');?>" alt=""></div>
									<div class="test_name"><?php the_field('nom') ?></div>
									<div class="test_title"><?php the_field('fonction') ?></div>
									<div class="test_quote">"</div>
									<p><?php the_field('temoignage') ?></p>
								</div>
							</div>
							<?php endwhile ?>
						</div>

					</div>
				</div>

				<!-- Testimonials Slider Navigation -->

				<div class="test_slider_nav test_slider_nav_left d-flex flex-column justify-content-center align-items-center trans_200">
					<i class="fas fa-chevron-left trans_200"></i>
				</div>

				<div class="test_slider_nav test_slider_nav_right d-flex flex-column justify-content-center align-items-center trans_200">
					<i class="fas fa-chevron-right trans_200"></i>
				</div>

			</div>
		</div>
	</div>

	<!-- Partenaires -->
	<div class="clients">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>Nos partenaires</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<!-- Partenaires Slider -->
					<div class="clients_slider_container">
						<div class="owl-carousel owl-theme clients_slider">
							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="<?= get_stylesheet_directory_uri();?>/assets/images/client_1.png" alt="">
							</div>
							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="<?= get_stylesheet_directory_uri();?>/assets/images/client_2.png" alt="">
							</div>
							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="<?= get_stylesheet_directory_uri();?>/assets/images/client_3.png" alt="">
							</div>
							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="<?= get_stylesheet_directory_uri();?>/assets/images/client_4.png" alt="">
							</div>
							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="<?= get_stylesheet_directory_uri();?>/assets/images/client_5.png" alt="">
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>





<?php get_footer(); ?>
