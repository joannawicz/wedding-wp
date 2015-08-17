<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
  <!-- ==========================
  ===== SPLASH IMAGE ========-->  
    <div class="hero"> 
    <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      </a>
    <?php endif; ?>
    <?php $thumb_id = get_post_thumbnail_id(); ?>
    <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
    <?php $thumb_url = $thumb_url_array[0]; ?>
    <h2>save the date,</h2>
    <h1><?php the_field('splash_title'); ?></h1>
    <h2>are getting hitched!</h2>
    <img src="<?php echo $thumb_url; ?>">
    </div>
  <!--     ========================
      ===START OF STORY=== -->
      <section class="story">
        
        <h2 class="story-h2">Our Story</h2>
        <div class="outer-story-container clearfix">
          <div class="story-container">
            <div class="profile-pic">
            <?php 
                $photoField = get_field('picture-1');
               ?>
              
              <img src="<?php echo $photoField['url']; ?>" alt"picture of first person">
              <h3><?php the_field('first_name'); ?></h3>
              <p class="profile-info">
                <?php the_field('profile-1'); ?>
              </p>
            </div>
          </div> <!-- end of story-container -->
          <div class="story-container">
            <div class="profile-pic">
            <?php 
                $photoField = get_field('picture-2');
               ?>
              
              <img src="<?php echo $photoField['url']; ?>" alt"picture of first person">
              <h3><?php the_field('second_name'); ?></h3>
              <p class="profile-info">
                <?php the_field('profile-2'); ?>
              </p>
            </div>
          </div><!--  end of story-container -->
        </div> <!-- end of outer-story-container -->
      </section>
       <!--     ========================
           ===END OF STORY=== -->
      <!-- ==============================
          =====START OF LOCATION & VENUE -->
      <section class="event">
        <div class="outer-venue-container clearfix">
          <h2 class="event-h2">Ceremony & Reception</h2>
          <div class="venue-container">
            <div class="venue">
              <h3>Ceremony</h3>
              <p><?php the_field('ceremony_date_time'); ?></p>
              <p><?php the_field('ceremony_venue'); ?></p>
              <p><?php the_field('ceremony_location'); ?></p>
            </div>
            <div class="venue">
              <h3>Reception</h3>
              <p><?php the_field('reception_date_time'); ?></p>
              <p><?php the_field('reception_venue'); ?></p>
              <p><?php the_field('reception_location'); ?></p>
            </div>
          </div><!--  end of venue-container -->
        </div> <!-- end of outer-venue-container -->
      </section> 

      <!-- ====================================== -->
      <!-- === START OF MAP ==== -->
      <section class="map">
        <div class="location">
          <img src="<?php bloginfo('template_directory'); ?>/images/map.png" alt"text">
        </div>
      </section> <!-- end of map section -->
      <!-- ====================================== -->
      <!-- ===START OF REGISTRY -->
      

      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <!-- <h2><?php the_title(); ?></h2> -->

    <div class="photo">
        <h2 class="photo"><?php the_title(); ?></h2>

        <?php the_content(); ?>
    </div>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <!-- // <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>