

<?php get_header();  ?>

<!--Template Name: Form Page -->

<div class="main">
  <div class="container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!--        <h2 class="rsvp"><?php the_title(); ?></h2> -->
    <div class="form">
        <?php the_content(); ?>
      <?php endwhile; // end the loop?>
    </div>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>