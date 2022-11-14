<?php get_header(); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- #### FIN HEADER #### -->
  
  <div class="w3-container" style="margin-top:75px">
    <!-- <h1 class="w3-xxxlarge w3-text-red"><b>Accueil</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      Baroque, épurée ou bohème, la décoration réalise une percée remarquée dans tous les intérieurs et le phénomène n’en est qu’à ses débuts. Mais si tout un chacun rêve sur les pièces ultra-lookées des nombreux magazines consacrés à la question, tout le monde n’a pas forcément le temps, ou le talent, de personnaliser lui-même son lieu de vie. C’est là qu’entre en scène le décorateur d’intérieur.
    </p>
    <p>
      A la différence de l’architecte qui intervient sur la structure des pièces ou l’agencement des cloisons, le décorateur d’intérieur apporte la touche finale pour créer l’ambiance : les revêtements, le mobiliers, les rideaux, réaménager une chambre d’amis, réaliser une fresque murale, rendre fonctionnel, esthétique et confortable un espace de travail… Créatif et cultivé, le décorateur puise son inspiration dans le monde qui l’entoure. Et compose pour ses clients une décoration qui leur ressemble.
    </p> -->


    <?php  while ( have_posts() ) : the_post(); ?>
        <h1 class="w3-xxxlarge w3-text-red"><b><?php the_title() ?></b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        
        <?php the_content() ?>
        <?php endwhile; ?>
  </div>




  <div class="w3-container">
  <h2 class="w3-text-red">Nos 3 dernières actualités</h1>
  </div>
  <div class="w3-row-padding">


  <?php get_template_part('parts/last', 'actu');?>
    
  </div>

</div>



<!-- End page content -->
</div>


<?php get_footer(); ?>