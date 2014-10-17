<!-- Navigation Sidebar -->
<div class="side-nav sidebar top-container-padding">
  <?php if( has_nav_menu( 'side-nav' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
  wp_nav_menu( array( 'theme_location' => 'side-nav', 'menu_class' => 'side-nav') ); }  ?>
</div>
