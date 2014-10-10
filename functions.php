<?
    function register_entities() {
    	register_nav_menu( 'top-nav', 'Top Navigation Bar');
      register_nav_menu( 'side-nav', 'Side Navigation Bar');
      register_sidebar('events');
    }
    add_action('init', 'register_entities');

?>
