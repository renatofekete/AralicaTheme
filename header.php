<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aralica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'aralica'); ?></a>

		<header id="masthead" class="site-header">
			<div class="nav-container">
				<nav class="nav-container-inner">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-5',
						'menu_id'        => 'aralica-lang',
						'menu_class'     => 'nav-container-inner--lang'
					));
					?>
				</nav>
				<div class="nav-container-inner">
					<div class="nav-container__logo"><?php the_custom_logo(); ?></div>
					<?php get_template_part('template-parts/main-menu'); ?>
				</div>
			</div>
			<div class="site-branding">
				<?php
				if (is_front_page()) :
					get_template_part('template-parts/header-front');

				endif;
				?>
			</div><!-- .site-branding -->


		</header><!-- #masthead -->

		<div id="content" class="site-content">