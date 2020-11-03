<div class="apartments-card">
  <div class="apartments-card__img"><?php the_post_thumbnail('medium_large'); ?></div>
  <div class="apartments-card__text">
    <h3><?php the_title(); ?></h3>
    <p><?php esc_html_e('Apartment size', 'aralica'); ?>: <?php the_field('apartment_size'); ?></p>
    <p><?php esc_html_e('Rooms', 'aralica'); ?>: <?php the_field('apartment_rooms'); ?></p>
    <p><?php esc_html_e('Guests', 'aralica'); ?>: <?php the_field('apartment_guests'); ?></p>
    <div class="ar-btn"><a class="ar-btn__link" href="<?php the_permalink(); ?>"><?php esc_html_e('See more', 'aralica'); ?></a></div>
  </div>
</div>