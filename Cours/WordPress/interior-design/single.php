
<?php get_header(); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  
<div class="w3-container" id="services" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-red"><b><?php the_title() ?></b></h1>
  <hr style="width:50px;border:5px solid red" class="w3-round">
<?php the_post_thumbnail()?>
  <?php the_content() ?>
</div>


<!-- End page content -->
</div>

<?php get_footer(); ?>
