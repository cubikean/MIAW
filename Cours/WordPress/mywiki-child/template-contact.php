<?php 
/*
Template Name: Page contact
*/

?>
<?php get_header() ?>
<div id="content" class="row clearfix">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <header>
          <h1 class="page-title main-page-title" itemprop="headline">
            <?php the_title(); ?>
          </h1>          
      </header>
      <!-- end article header -->
      <section class="post_content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
    </article>
    <!-- end article -->
    <?php endwhile; ?>
    <?php endif; ?>
    <?php comments_template( '', true ); ?>
  </div>
  <!-- end #main -->
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.6575911404652!2d-1.1605134749272128!3d46.14472004564273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4801535b7f3cf351%3A0xa6870c6d61d42e1e!2sUniversit%C3%A9s!5e0!3m2!1sfr!2sfr!4v1666008979104!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- end #content -->
<?php get_footer();?>