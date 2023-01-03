<?php get_header(); ?>

    <?php

    get_template_part('/parts/home_clinique_veterinaire_exopets');
    ?>

    <section class="prestation">
        <h2 class="prestation-title">Nos prestations</h2>
        <div class="prestation-card-container" style="--nb-cards:3">
        <!-- Boucle de rendu pour les prestations -->
        <?php $args = array(
				'post_type'  => 'prestations',
				'order'      => 'ASC',
				'posts_per_page' => '3',
			
			);

			$query = new WP_Query( $args );

			while( $query->have_posts() ) : $query->the_post(); ?>
            <div class="card">
                <div class="card-top">
                    <img class="card-top_img" src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="image de vaccin">
                    <h3 class="card-top_title"><?php the_title()?></h3>
                </div>
                <ul class="card-content">
                    <?php the_content()?>
                    
                </ul>
                <?php if ($query->current_post % 2 == 0): ?>
                    <!-- check even change btn color on even -->
                <a href="<?php the_field('url_bouton')?>" class="card_btn btn btn--green"><?php the_field('titre_bouton')?></a>
                <?php else: ?>
                    <!-- check odd change btn color on odd -->
                <a href="<?php the_field('url_bouton')?>" class="card_btn btn"><?php the_field('titre_bouton')?></a>
                    
                <?php endif ?>
            </div>

				<?php endwhile ?>

            
            
           
        </div>
    </section>

    <section class="collaborateurs">
            
        <h2 class="collaborateurs-title">Nos collaborateurs</h2>
        <div class="collaborateurs-card-container">

        <!-- Boucle de rendu pour les collaborateurs -->
        <?php $args = array(
				'post_type'  => 'collaborateurs',
				'order'      => 'ASC',
				'posts_per_page' => '2',
			
			);

			$query = new WP_Query( $args );

			while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="card-collab">
            <img src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="image collaborateur femme" class="card-collab_img">
            <div class="card-collab_info">
                <p class="card-collab_info_title"><?php the_title();?></p>
                
                <p class="card-collab_info_subtitle"><?=get_post_meta(get_the_ID(),'profession',true)?></p>
                <!-- <p class="card-collab_info_text"><?php the_excerpt(); ?></p> -->
                <?= '<p class="card-collab_info_text">' . get_the_excerpt() . '</p>';?>
            </div>
        </div>
				<?php endwhile ?>

    </div>
    </section>

    <div class="pre-footer">
    <section class="coordonees">
        <h2 class="coordonees-title">Coordonées</h2>
        <div class="coordonees-map">
            <div class="coordonees-map_text">
                <p class="coordonees-map_text_single"><?php the_field('adresse',29)?></p>
                <p class="coordonees-map_text_single"><?php the_field('contact',29)?></p>
                <p class="coordonees-map_text_single"><?php the_field('tel',29)?></p>
            </div>
            <div class="coordonees-map_container">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44219.65715345475!2d-1.1930340776218586!3d46.1561508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153a4ba281d3b%3A0x8153b2ef533eafe6!2sLes%204%20Sergents!5e0!3m2!1sfr!2sfr!4v1671100328509!5m2!1sfr!2sfr" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="coordonees-map-horaires">
                <p class="coordonees-map-horaires_text underline">Horaires d'ouverture</p>
                <p class="coordonees-map-horaires_text"><?php the_field('horaires',29)?></p>
            </div>
        </div>
        

        
       
    </section>
    <div class="pre-footer-sub">
    <section class="contact">
        <h2 class="contact-title">Contact</h2>
        <?= do_shortcode('[contact-form-7 id="22" title="Formulaire de contact 1"]')?>
        <!-- <form action="#">

            <input required placeholder="Nom" type="text" name="Nom" id="Nom">
            <input required placeholder="Prénom" type="text" name="Prenom" id="Prenom">
            <input required placeholder="Email" type="email" name="Email" id="Email">
            <input required placeholder="Téléphone" type="tel" name="Tel" id="Tel">
            <textarea placeholder="Message" name="Message" id="Message" cols="10" rows="5"></textarea>
            <a href="#" class="btn">Envoyer</a>
        </form> -->
    </section>
    <section class="urgence">
        <h2 class="urgence-title">Une urgence ?</h2>
        <p class="urgence-text"><?php the_field('urgence',29)?></p>
            <a href="#" class="btn">Urgence</a>
        </section>
    </div>
    </div>

<?php get_footer(); ?>
