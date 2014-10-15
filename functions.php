<?
    function register_entities() {
    	register_nav_menu( 'top-nav', 'Top Navigation Bar');
      register_nav_menu( 'side-nav', 'Side Navigation Bar');
      add_theme_support( 'custom-header' );
    	register_sidebar( array(
    		'name'          => 'Events Sidebar',
    		'id'            => 'sidebar-events',
    		'description'   => 'Contains the Google Calendar Events widget',
    	) );
    	register_sidebar( array(
    		'name'          => 'Footer',
    		'id'            => 'sidebar-footer',
    		'description'   => 'Contains the footer image and not much else',
    	) );
    }
    add_action('init', 'register_entities');

?>
