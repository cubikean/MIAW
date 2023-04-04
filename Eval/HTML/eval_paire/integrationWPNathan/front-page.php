<?php
get_header();
?>
<section class="header__content">
    <h1 class="content__title">Create your own
        <span class="text__block">
            <span class="title__background">
                customized
            </span>
                drone
        </span>
    </h1>
    <span class="content__scroll">scroll here
        <a href="#products">
            <img class="scroll__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/down.svg" alt="scroll down">
        </a>
    </span>

</section>
<section class="description" id="description">

    <?php
    //    On récupère le contenu de la page du champ ACF page_de_description
    $the_query = new WP_Query(array(
        'page_id' => get_field('page_de_description', 'option')->ID
    ));

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
            ?>
            <h3 class="description__title"><?= get_the_title() ?></h3>
            <div class="description__content">
                <?php the_content() ?>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</section>

<section class="our-products" id="products">
    <h2 class="our-products__title">Our products</h2>
    <article class="products">
        <img class="products__arrow products__arrow-right" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/arrow.svg" alt="slide right">
        <?php
        //        On récupère les produits et on "order" en fonction du champ ACF "ordre"
        $the_query = new WP_Query(
            array(
                'post_type'         => 'products',
                'meta_key'          => 'ordre',
                'orderby'           => 'meta_value',
                'order'             => 'ASC'
            )
        );
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();
                ?>
                <article class="product">
                    <a href="<?php the_permalink(); ?>">
                        <img class="product__img" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="drone mark 2">
                        <h3 class="product__title"><?= get_the_title() ?></h3>
                    </a>
                </article>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
        <img class="products__arrow products__arrow-left" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/arrow.svg" alt="slide left">
    </article>
    <a href="" class="button button__sm">Show more</a>
</section>

<section class="about-us" id="about-us">
    <h2 class="about-us__title">About us</h2>
    <div class="about-us__inner">
        <ul class="short-information">
            <li class="short-information__item">
                <img class="short-information__icon" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/location.svg" alt="location">
                <span class="short-information__text">Based in San Francisco</span>
            </li>
            <li class="short-information__item">
                <img class="short-information__icon" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/members.svg" alt="members">
                <span class="short-information__text">A team of 6 peoples</span>
            </li>
            <li class="short-information__item">
                <img class="short-information__icon" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/checked.svg" alt="what we do">
                <span class="short-information__text">Bring 34 projects to success</span>
            </li>
        </ul>
        <img class="about-us__map" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/location-map.png" alt="location maps">
        <p class="about-us__content">
            Founded in 2004 our company started with 3 friends that wanted to make the drone more accessible for
            everyone.
            <span class="paragraph">
                    It turns out that Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem
                    <strong>Ipsum</strong>
                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley
                    of type and scrambled it to make a type specimen book. <strong>It has survived</strong> not only
                    five centuries, but
                    also
                    the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                    1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                </span>
        </p>
        <a href="" class="button button__sm">Contact us</a>
    </div>
</section>
<section class="creation" id="creation">
    <article class="steps-list">
        <article class="step">
            <img class="step__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/step1.jpg" alt="step 1">
            <span class="step__number">1</span>
            <h4 class="step__title">Review the specifications</h4>
            <p class="step__description">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the in</p>
        </article>
        <article class="step">
            <img class="step__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/step2.jpg" alt="step 1">
            <span class="step__number">2</span>
            <h4 class="step__title">Build the product</h4>
            <p class="step__description">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the in</p>
        </article>
        <article class="step">
            <img class="step__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/step3.jpg" alt="step 1">
            <span class="step__number">3</span>
            <h4 class="step__title">Testing and reviewing</h4>
            <p class="step__description">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the in</p>
        </article>
        <article class="step">
            <img class="step__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/step4.jpg" alt="step 1">
            <span class="step__number">4</span>
            <h4 class="step__title">Support and maintenance</h4>
            <p class="step__description">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the in</p>
        </article>
    </article>
</section>

<section class="contact" id="contact">
    <h2 class="contact__title">Stay in touch</h2>
    <!--    On affiche le formulaire de contact-->
    <?= do_shortcode('[contact-form-7 id="40" title="Formulaire de contact 1"]')?>
</section>


<?php get_footer();?>
