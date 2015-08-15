<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">

  <!--     ========================
      ===START OF STORY=== -->
      <section class="story">

        <h2 class="story-h2">Our Story</h2>
        <div class="outer-story-container clearfix">
          <div class="story-container">
            <div class="profile-pic">
              <img src="<?php bloginfo('template_directory'); ?>/images/angelina.jpg" alt"text">
              <h3><?php the_field('name'); ?></h3>
              <p class="profile-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni asperiores nesciunt quibusdam minima rerum iusto accusantium voluptatem magnam, tenetur sint facere maxime, sed dolorem sequi dolorum modi doloribus architecto? Nobis!
              </p>
            </div>
          </div> <!-- end of story-container -->
          <div class="story-container">
            <div class="profile-pic">
              <img src="<?php bloginfo('template_directory'); ?>/images/brad.jpg" alt"text">
              <h3><?php the_field('name'); ?></h3>
              <p class="profile-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae fuga architecto inventore provident atque et? Nihil tenetur consequuntur ratione temporibus, maiores libero, impedit vel hic aliquid pariatur minima sunt qui.
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
          <h2 class="story-h2">Ceremony & Reception</h2>
          <div class="venue-container">
            <div class="venue">
              <h3>Ceremony</h3>
              <p>FRIDAY / MAY - 15 - 2015 / 10:00 AM</p>
              <p>ST.AUGUSTINE CHURCH</p>
              <p>l460 MADISON AVE NEW YORK, NY 10022</p>
            </div>
            <div class="venue">
              <h3>Reception</h3>
              <p>SATURDAY / MAY - 15 - 2015 / 10:00 AM</p>
              <p>NORTH KANIKU DRIVE</p>
              <p>EAST 72ND STREET AND PARK DRIVE NORTH NEW YORK, NY</p>
            </div>
          </div><!--  end of venue-container -->
        </div> <!-- end of outer-venue-container -->
      </section> 


      
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