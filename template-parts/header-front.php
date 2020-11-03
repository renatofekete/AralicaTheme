<div class="site-branding__front">
  <div class="site-branding__front-bg" style="background-image: linear-gradient(black,black), url(<?php echo header_image(); ?>)"></div>
  <div class="site-branding__front-text">
    <h1>
      <?php
      echo get_bloginfo('description');
      ?>
    </h1>
    <?php wp_nav_menu(array(
      'theme_location' => 'menu-2',
      'menu_id'        => 'header-cta',
      'menu_class'     => 'header-cta'
    )); ?>
  </div>
</div>