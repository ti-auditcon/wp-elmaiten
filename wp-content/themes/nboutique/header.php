<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nature_Boutique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="site-header-inner width">
				<div class="site-branding">
					<a href="/">
						<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Ir al Inicio">
					</a>
				</div><!-- .site-branding -->

				<button class="hamburger hamburger--squeeze" type="button" id="click-button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-header',
						'menu_id'         => 'header-menu',
						'menu_class'		  => 'the-menu',
						'container_class' => 'menu-container'
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
