<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./css/styles.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;700&family=Raleway&display=swap" rel="stylesheet">
    <!-- <script src="./assets/js/common.js"></script> -->

    <!-- Primary Meta Tags -->
    <meta name="title" content="Exopets - Clinique Vétérinaire">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hchatign.lpmiaw.univ-lr.fr/evalDecembre/integration/">
    <meta property="og:title" content="Exopets - Clinique Vétérinaire">
    <meta property="og:description" content="Notre clinique vétérinaire offre une gamme de services, y compris les soins de routine tels que les vaccins et les examens physiques, ainsi que des soins plus complexes tels que les chirurgies et les traitements pour des maladies chroniques">
    <meta property="og:image" content="https://hchatign.lpmiaw.univ-lr.fr/evalDecembre/integration/assets/img/lapin.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="Agence - Digitélior">
    <meta property="twitter:url" content="https://hchatign.lpmiaw.univ-lr.fr/evalDecembre/integration/">
    <meta property="twitter:title" content="Agence - Digitélior">
    <meta property="twitter:description" content="Notre clinique vétérinaire offre une gamme de services, y compris les soins de routine tels que les vaccins et les examens physiques, ainsi que des soins plus complexes tels que les chirurgies et les traitements pour des maladies chroniques">
    <meta property="twitter:image" content="https://hchatign.lpmiaw.univ-lr.fr/evalDecembre/integration/assets/img/lapin.webp">


    <title>Exopets - <?php wp_title('', true, 'right')?></title>

    <?php wp_head(); ?>



  </head>
  <body>
    <header class="header">
      <h2 class="header_title"><a href="<?= get_home_url() ?>">Exopets</a></h2>
      <nav class="header-nav">
        <i class="fa-solid fa-bars"></i>
        <i class="fa-solid fa-xmark"></i>
        <?php 

                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'menu_class' => 'header-nav_list disable', 
                    'container' => 'ul',
                    ) );
                
                ?>
        <!-- <ul class="header-nav_list disable"> -->
        <!-- <li class="header-nav_list_item"><a href="<?php the_permalink(34) ?>" class="btn btns btn--green">Prendre rendez-vous</a></li>
            <li class="header-nav_list_item"><a href="#" class="btn btns">Urgence</a></li> -->
        
            
            <!-- <li>
              <div class="header-nav_btns">
                  <a href="#" class="btn btn--green">Prendre rendez-vous</a>
                <a href="#" class="btn">Urgence</a>
                </div>
            </li> -->
            
            
          </ul>
      </nav>
    </header>
    <main>