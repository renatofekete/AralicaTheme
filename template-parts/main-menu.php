<nav id="site-navigation" class="main-menu">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'menu_class'     => 'primary-menu'
  ));
  ?>
  <div class="hamburger">
    <i class="fas fa-bars"></i>
  </div>
  <div class="hamburger-close">
    <i class="fas fa-times"></i>
  </div>
</nav><!-- #site-navigation -->