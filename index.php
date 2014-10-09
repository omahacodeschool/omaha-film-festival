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
        <ul>
          <li class="top-nav"><a href="#" class="nav-item">Home</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Films</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Call for Entries</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Sponsors</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Buzz</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Past Winners</a></li>
          <li class="top-nav"><a href="#" class="nav-item">Contact</a></li>
          <li class="top-nav"><a href="#" class="nav-item">About</a></li>
        </ul>
        <img src="http://www.omahafilmfestival.org/images/index_r4_c1.jpg" class="banner-image">
      </div>
    </div>
    <!-- Start to the body content -->
    <div class="body-wrapper clearfix">
      <!-- Navigation Sidebar -->
      <div class="side-nav sidebar">
        <ul>
          <li class="side-nav"><a href="#" class="nav-item">Showtimes</a></li>
          <li class="side-nav"><a href="#" class="nav-item">Upcoming Events</a></li>
          <li class="side-nav"><a href="#" class="nav-item">Conferences</a></li>
          <li class="side-nav"><a href="#" class="nav-item">Past Events</a></li>
          <li class="side-nav"><a href="#" class="nav-item">Screenplay Finalists</a></li>
          <li class="side-nav"><a href="#" class="nav-item">Festival Passes</a></li>
        </ul>
      </div>
      <!-- Main Body Content -->
      <div class="main-body">
        <div class= "title-banner clearfix">
          <div class= "page-title">
            <h1>Welcome</h1>
          </div>
          <div class= "social-media">
            <h2>Follow | t | f</h2>
          </div>
        </div>
        <div class= "main-body-content">
          <p>Sample text</p>
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