<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() . '/images/the-wilderness-of-manitoba-logo.png'; ?>" alt="The Wilderness of Manitoba Logo" />
						</a>
						<h2>Across the Dark</h2>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .site-branding -->

					<nav class="social">
						<ul>
							<li>
								<a href="https://www.facebook.com/wildernessofmanitoba"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href-"https://www.instagram.com/wildernessofmanitoba/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://twitter.com/wildofmanitoba"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href-"https://www.youtube.com/user/wildernessofmanitoba"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
							</li>
						</ul>
					</nav><!-- .social -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content container">
