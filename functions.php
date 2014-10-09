<?

function register_custom_menus() {
  register_nav_menu('top-nav', 'Top Navigation Bar');
  register_nav_menu('sidebar-nav', 'Sidebar');
}

add_action('after_setup_theme', 'register_custom_menus');

?>
