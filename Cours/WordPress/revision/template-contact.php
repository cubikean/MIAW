<?php
/* Template Name: Template Contact */
get_header();

?>



<div id="wrapper">

    <!-- Contact -->
    <section id="three" class="wrapper style1 fade-up">
        <div class="inner">
            <h2><?php the_title()?></h2>
            <p><?php the_content()?></p>
            <div class="split style1">
                <section>
                   <?= do_shortcode('[contact-form-7 id="42" title="Formulaire de contact 1"]') ?>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Adresse</h3>
                            <span><?php the_field('adresse')?></span>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <a href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a>
                        </li>
                        <li>
                            <h3>Téléphone</h3>
                            <span><?php the_field('telephone')?></span>
                        </li>
                        <li>
                            <h3>Réseaux sociaux</h3>
                            <ul class="icons">
                                <?php foreach (get_field('social') as $key => $icons) { ?>
                                    <?php foreach ($icons as $key => $value) { ?>
                                <li><a href="#" class="icon brands fa-<?=$value ?>"><span class="label"><?=$value ?></span></a></li>
                           <?php } ?>
                           <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>

</div>
<?php get_footer() ?>