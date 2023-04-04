 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cuistourd</title>
  <link href="https://api.fontshare.com/v2/css?f[]=chillax@700&display=swap" rel="stylesheet"> 
  <link href="https://api.fontshare.com/v2/css?f[]=plein@500,400&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header">
    <section class="header-bar">
      <img class="header-bar__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Logo.svg" alt="Logo de Cuistourd">
      <h1 class="header-bar__text">Cuistourd</h1>
    </section>
    <div class="header-description">
        <h1 class="header-description__text">Cuistourd, la cuisine pour les malentendants</h1>
    </div>
    <nav></nav>
  
</header>
<nav class="menu">
  <img class="menu__img" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Logo.svg" alt="Logo de cuistourd">
    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'menu__list', 'container' => false,'add_li_class'  => 'menu__link')); ?>
</nav>
<nav class="menu-mobile">
  <ul class="menu-mobile__list">
    <li class="menu-mobile__link"><a href="#header"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/multi.svg" alt=""></a></li>
    <li class="menu-mobile__link"><a href="#formule"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/cocotte.svg" alt=""></a></li>
    <li class="menu-mobile__link"><a href="#inscription"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/personn.svg" alt=""></a></li>
  </ul>
</nav>