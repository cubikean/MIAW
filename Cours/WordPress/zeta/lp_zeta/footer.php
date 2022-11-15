<!-- Ici commence le Footer -->
	<!-- Contact -->
    <?php 
    $id_page_contact = get_field('id_contact', 'option');

$args = array(
    // 'pagename' => 'contact',
    'page_id'       => $id_page_contact,
);

$query = new WP_Query( $args );

while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="contact prlx_parent">
		<!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
		<div class="contact_background prlx" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'full') ?>);"></div>
		<div class="contact_shapes"><img src="<?= get_stylesheet_directory_uri();?>/assets/images/contact_shape.png" alt=""></div>
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
					<h2><?php the_title() ?></h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center contact_text">
					<p><?php the_excerpt_embed(); ?></p>
					<div class="button contact_button">
						<a href="<?php the_permalink() ?>" class="d-flex flex-row align-items-center justify-content-center">contact<img src="<?= get_stylesheet_directory_uri();?>/assets/images/arrow_right.svg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php endwhile ?>

   
   
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
				<div class="col-sm-6 cr text-sm-left text-center">
					<p>Copyright 2022 All rights reserved</p>
				</div>
				<div class="col-sm-6 text-sm-right text-center">
					<div class="footer_social_container">
						<ul class="footer_social">
							<li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<!-- <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="js/custom.js"></script> -->

<?php wp_footer() ?>
</body>

</html>