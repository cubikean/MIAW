<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mims Bakery</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navigation">
      <img class="navigation__logo" src="<?= get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Le logo de la boulangerie">
      <input type="checkbox" id="icone-burger">
      <label for="icone-burger"></label>
      <?php wp_nav_menu(
                    array('theme_location' => 'main_menu','menu_class' => 'navigation__liste','container' => 'ul',  'li_class'  => 'navigation__element')
                ); ?>
    </nav>
</header>