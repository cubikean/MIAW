<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php wp_title('-', true, 'right')?> Interior Design</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <?php wp_head(); ?> 
  </head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Fermer le menu</a>
  <div class="w3-container">
    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="">
  </div>
  <div class="w3-bar-block menu-menu-header-container">
  <?php wp_nav_menu(array('theme_location' => 'main')); ?>
    <!-- <ul class="menu">
      <li><a href="accueil.htm">Accueil</a></li>
      <li><a href="blog.htm">Blog</a></li>
      <li><a href="page.htm">Page d’exemple</a></li>
      <li class="btn-lpmiaw"><a href="https://lpmiaw.univ-lr.fr/">LPMIAW</a></li>
    </ul> -->
  </div>
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Interior Design</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>