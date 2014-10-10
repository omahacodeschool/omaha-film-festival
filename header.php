<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?> <?php bloginfo('name'); ?> </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  
  <?php wp_head(); ?>
  
</head>
<body>
  <div class="content-wrapper">
    <!-- Header content & Navbar -->
    <div class="header">
      <div class="banner">
        <img src="http://www.omahafilmfestival.org/images/index_r1_c1.jpg" class="banner-image">
      </div>
      <!-- Top Navigation Bar -->
      <div class="nav-bar border-top border-bottom centered">
        <?php if( has_nav_menu( 'top-nav' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
        wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'top-nav') ); 
      } ?>
      <img src="http://www.omahafilmfestival.org/images/index_r4_c1.jpg" class="banner-image">
      </div>
    </div>
    <!-- Start to the body content -->
    <div class="body-wrapper clearfix">
    <?php get_sidebar() ?>
    <!-- Main Body Content -->
    <div class="main-body">
      <div class= "title-banner clearfix">
        <div class= "page-title">
          <?php $title = single_term_title('', false) ?>
          <?php if (gettype( $title )=="string" ): ?>
            <h1><?php echo $title ?></h1>
          <?php else: ?>
            <h1><?php the_title() ?></h1>
          <?php endif ?>
        </div>
        <div class= "social-media">
          <h2>Follow | t | f</h2>
        </div>
      </div>