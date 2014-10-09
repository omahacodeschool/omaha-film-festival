<?
    function register_menus() {
    	register_nav_menu( 'top-nav', 'Top Navigation Bar');
      register_nav_menu( 'side-nav', 'Side Navigation Bar');
    }
    add_action('init', 'register_menus');

?>
