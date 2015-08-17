<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta tag from responsive menu plugin -->
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,900italic|Lato:400,100,300|Meddon' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="navigation">
  <div class="container clearfix">
    <div class="img-holder">
      <img src="<?php bloginfo('template_directory'); ?>/images/noun_183479_cc.png" alt="image">      
    </div>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

