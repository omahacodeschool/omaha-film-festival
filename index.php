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
      }
      ?>
      <img src="http://www.omahafilmfestival.org/images/index_r4_c1.jpg" class="banner-image">
    </div>
  </div>
    
  <!-- Start to the body content -->
  <div class="body-wrapper clearfix">
    <!-- Navigation Sidebar -->
    <div class="side-nav sidebar">
      <?php if( has_nav_menu( 'side-nav' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
      wp_nav_menu( array( 'theme_location' => 'side-nav', 'menu_class' => 'side-nav') ); 
    }
    ?>
  </div>
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
    <div class= "main-body-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(__('(more...)')); ?></p>
        <hr> 
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
        </div>
      </div>
      <!-- Events sidebar -->
      <div class="events-sidebar sidebar">
        <h1>Events</h1>
        <ul>
          <li>Sample content</li>
          <li>Sample content</li>
          <li>Sample content</li>
          <li>Sample content</li>
        </ul>
      </div>
    </div>
    <!-- Footer -->
    <div class="footer clearfix">
      <div class="sponsors-list">
        <ul>
        
          <li><img src="http://www.omahafilmfestival.org/images/NSF.jpg">      
          </li>
              
          <li><img src="http://www.omahafilmfestival.org/images/WOWT.jpg">
          </li>
          
          <li><img src="http://www.omahafilmfestival.org/images/Withoutabox.jpg">
          </li>
            
          <li><img src="http://www.omahafilmfestival.org/images/Sony.jpg">            
          </li>
              
          <li><img src="http://www.omahafilmfestival.org/images/NoCoast.jpg">
          </li>
          
          <li><img src="http://www.omahafilmfestival.org/images/DGE.jpg">
          </li>
            
          <li><img src="http://www.omahafilmfestival.org/images/Marcus.jpg">
          </li>
          
          <li><img src="http://www.omahafilmfestival.org/images/Borgata.jpg">
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>