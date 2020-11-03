<?php

get_header();
?>

<div class="aralica-front-page">
  <h2 class="aralica-front-page__h2"><?php esc_html_e('Apartments', 'aralica'); ?></h2>
  <div class="apartments-container">
    <?php

    $loop = new WP_Query(array('post_type' => 'apartments'));

    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

        get_template_part('./template-parts/single/apartment-card');

      endwhile;
    endif;
    wp_reset_query();
    ?>
  </div>
  <?php
  while (have_posts()) :
    the_post();
    the_content();
  endwhile; // End of the loop.
  ?>
</div>
<?php
get_footer();
