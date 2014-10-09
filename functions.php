<?
   // function register_nav_menus() {
   //   register_nav_menus( array(
   //     'top-nav' => __( 'Top Navigation Bar', 'OmahaFilmFestival' ),
   //     'side-nav' => __( 'Side Navigation Bar', 'OmahaFilmFestival' ),
   //   ) );
   // }
   //
   //   add_action( 'after_setup_theme', 'register_nav_menus' );
// }
//
// add_action( 'after_setup_theme', 'register_my_menu' );

  //
  //
  // register_nav_menus( array(
  //   'top-nav'   => __( 'Top primary menu', 'twentyfourteen' ),
  //   'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
  // ) );
    // add_action( 'after_setup_theme', 'register_nav_menus' );

    function register_menus() {
    	register_nav_menu( 'top-nav', 'Top Navigation Bar');
      register_nav_menu( 'side-nav', 'Side Navigation Bar');
    }
    add_action('init', 'register_menus');


?>
