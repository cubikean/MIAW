<?php
$mywiki_options = get_option( 'faster_theme_options' );
$meta = get_post_meta( get_the_ID(), 'sous_titre', true);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Mono&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();   }  ?>
<div id="wrap">
  
<header role="banner">
  <div class="covid">Nous serons fermé jusqu'à nouvel ordre en raison de la COVID-19</div>
  <div id="inner-header" class="clearfix">
    <div class="navbar navbar-default">
      <div class="container" id="navbarcont">
        <div class="row">
        <div class="nav-container col-md-9">
          <nav role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <?php if(has_custom_logo()){  
                     the_custom_logo();
                } 
               if (display_header_text()==true){ ?>
              <a class="navbar-brand logo" id="logo" title="<?php echo esc_html(get_bloginfo('description')); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <p><span class="header-text"><?php echo esc_html(bloginfo("name"));?></span></p>
                <h4><span class="header-description-text"><?php echo esc_html(get_bloginfo('description')); ?></span></h4>
              </a>
              <?php } ?>
              <p><?= $meta ?></p>
            </div>
            <!-- end .navbar-header -->
          </nav>
        </div>
        <div class="navbar-collapse collapse top-menu">
          <?php	wp_nav_menu( array(
            'theme_location'  => 'primary',
            'container'       => 'div',         
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',          
            'items_wrap'      => '<ul id="menu" class="nav navbar-nav navbar-right mywiki-header-menu">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
            ) ); ?>
          

        </div>
        <!-- end .nav-container -->
        </div>  
      </div>
      <!-- end #navcont -->
    </div>
    <!-- end .navbar --> 
  </div>
  <!-- end #inner-header --> 
</header>
<!-- end header -->
<div class="container " id="maincnot">