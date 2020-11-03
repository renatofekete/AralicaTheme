<?php

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="entry-content partner-archive">
      <?php
      while (have_posts()) :
        the_post(); ?>

        <?php
          get_template_part('./template-parts/single/partners-archive');
          ?>

      <?php
      endwhile; // End of the loop.
      ?>
    </div><!-- .entry-content -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
