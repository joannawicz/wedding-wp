<?php get_header();  ?>
<!-- Template Name: Gallery page-->
<div class="main">
  <div class="container">

    <div id="gallery-columns" class="gallery-content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('short_desc'); ?></h3>
        <?php the_content(); ?>


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>


