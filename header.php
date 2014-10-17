<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?> <?php bloginfo('name'); ?> </title>  
  <?php wp_enqueue_script("jquery"); ?>
  
  <?php wp_head(); ?>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/columnheight.js"></script>
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  
</head>
<body>
  <div class="content-wrapper">
    <!-- Header content & Navbar -->
    <div class="header">
      <div class="banner">
        <a href="/"><img src="<?php header_image(); ?>" class="banner-image"></a>
      </div>
      <!-- Top Navigation Bar -->
      <div class="nav-bar border-top-and-bottom centered">
        <?php if( has_nav_menu( 'top-nav' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
        wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'top-nav') ); 
      } ?>
      </div>
    </div>
    <!-- Start to the body content -->
    <div class="body-wrapper clearfix">
    <?php get_sidebar() ?>
    <!-- Main Body Content -->
    <div class="main-body">
      <!-- Orange title banner -->
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
          <h2><a href="http://twitter.com/omahafilmfestvl" class="genericon genericon-twitter">Twitter</a> <a href="https://www.facebook.com/OmahaFilmFestival" class="genericon genericon-facebook">Facebook</a></h2>
        </div>
      </div>