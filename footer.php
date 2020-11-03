<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aralica
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-inner">
		<div class="footer-inner__info">
			<h3><?php esc_html_e('Contact', 'aralica'); ?></h3>
			<ul>
				<li><i class="fas fa-map-marker"></i> <?php echo esc_attr(get_option('aralica_info_address')); ?></li>
				<li><i class="fas fa-phone-alt"></i> <?php echo esc_attr(get_option('aralica_info_telephone')); ?></li>
				<li><i class="fas fa-envelope"></i> <?php echo esc_attr(get_option('aralica_info_email')); ?></li>
				<li><i class="fas fa-home"></i> <?php echo esc_attr(get_option('aralica_info_website')); ?></li>
			</ul>
		</div>
		<div class="footer-inner__activities">
			<h3><?php esc_html_e('Programs', 'aralica'); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-4',
				'menu_id'        => 'footer-activities',
				'menu_class'     => 'footer-activities'
			));
			?>

		</div>
		<div class="footer-inner__social">
			<h3><?php esc_html_e('Social', 'aralica'); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'footer-social',
				'menu_class'     => 'footer-social'
			));
			?>
		</div>
	</div>
	<div class="aralica-copy">&copy; <?php esc_html_e('Aralica Apartment', 'aralica'); ?> - <?php echo date("Y"); ?></div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>