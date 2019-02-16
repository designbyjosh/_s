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

<div class="off-canvas-wrapper" style="padding-bottom: 20px;">
	<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
		
		<div class="off-canvas-top">
				<div class="off-canvas-close">

					<button class="close-button hamburger--collapse is-active" type="button" aria-label="Close menu"  data-close>
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>


				</div><!-- .off-canvas-close -->
		</div><!-- .off-canvas-top -->

	</div><!-- #offCanvas -->
	<div class="off-canvas-content" data-off-canvas-content>
		
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

			<header id="masthead" class="site-header">
				<div class="site-header-grid">

					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-100.png" /></a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="site-navigation">
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

					<div class="header-hamburger">
						<button type="button" class="hamburger hamburger--collapse" data-toggle="offCanvas">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div><!-- .header-hamburger -->

					<div class="header-info">
						Info
					</div><!-- .header-hamburger -->
				</div><!-- .site-header-grid -->


			</header><!-- #masthead -->




			<div id="content" class="site-content">





