<?php get_header(); ?>

<!-- Page Top -->

<div class="home prlx_parent">

<!-- Parallax Background -->
<!-- <div class="page_top_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/services_parallax.jpg"></div> -->
<div class="home_background prlx" style="background-image:url(<?= get_stylesheet_directory_uri();?>/assets/images/services_parallax.jpg)"></div>
<div class="services_page_shapes" style="background-image:url(<?= get_stylesheet_directory_uri();?>/assets/images/services_page_shapes.png)"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="home_content"  style="margin-top: 150px;">
                <h1><?php the_title();?></h1>
                <span><?php the_title();?></span>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Home Social -->
<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
<ul class="home_social">
    <li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
    <li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
</ul>
</div>

<!-- Services -->

<div class="services">

<div class="container">
    <?php the_content();?>
</div>
</div>

<!-- Cards -->

<div class="zeta_cards">

<div class="container">
    <div class="row">

        <!-- Card Item -->
        <div class="col-lg-4 zeta_card zeta_card_1 prlx_parent">
            <div class="zeta_card_background prlx" style="background-image:url(<?= get_stylesheet_directory_uri();?>/assets/images/card_1.jpg)"></div>
            <div class="zeta_card_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
            </div>
        </div>

        <!-- Card Item -->
        <div class="col-lg-4 zeta_card zeta_card_2 prlx_parent">
            <div class="zeta_card_background prlx" style="background-image:url(<?= get_stylesheet_directory_uri();?>/assets/images/card_2.jpg)"></div>
            <div class="zeta_card_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
            </div>
        </div>

        <!-- Card Item -->
        <div class="col-lg-4 zeta_card zeta_card_3 prlx_parent">
            <div class="zeta_card_background prlx" style="background-image:url(<?= get_stylesheet_directory_uri();?>/assets/images/card_3.jpg)"></div>
            <div class="zeta_card_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Pic Boxes -->

<div class="picture_boxes">

<div class="container">
    <div class="row">

        <!-- Pic Box -->
        <div class="col-lg-4 pic_box">
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/images/pic_box_1.jpg" class="card-img-top" alt="">
                <h3 class="card-title pic_box_title">Notre équipe</h3>
                <p class="card-text pic_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen.</p>
                <a href="#" class="pic_box_link">Lire plus
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
                    <polygon id="arrow_poly_1" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Pic Box -->
        <div class="col-lg-4 pic_box">
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/images/pic_box_2.jpg" class="card-img-top" alt="">
                <h3 class="card-title pic_box_title">Nos auteurs</h3>
                <p class="card-text pic_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen.</p>
                <a href="#" class="pic_box_link">Lire plus
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
                    <polygon id="arrow_poly_2" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Pic Box -->
        <div class="col-lg-4 pic_box">
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/images/pic_box_3.jpg" class="card-img-top" alt="">
                <h3 class="card-title pic_box_title">Appel à textes</h3>
                <p class="card-text pic_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen.</p>
                <a href="#" class="pic_box_link">Lire plus
                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
                    <polygon id="arrow_poly_3" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</div>

</div>


<?php get_footer(); ?>