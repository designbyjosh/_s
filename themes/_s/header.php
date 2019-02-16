<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">
	<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
		
		Off canvas menu

	</div><!-- #offCanvas -->
	<div class="off-canvas-content" data-off-canvas-content>
		
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

			<header id="masthead" class="site-header">


				<div class="site-branding">

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<ul id="primary-menu" class="dropdown menu" data-dropdown-menu>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'container'		 =>  null,
							'items_wrap' 	 => '%3$s',
							'walker' => new My_Walker_Nav_Menu()
						) );
						?>
					</ul>
				</nav><!-- #site-navigation -->


			</header><!-- #masthead -->




			<div id="content" class="site-content">





