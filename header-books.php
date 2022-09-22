<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?><?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version . '-alt' ); ?>

		<div class="hero__bg-alt"></div>
		<div class="hero-banner-wrapper">
			<div class="hero-banner-alt">
				<div class="hero__img-wrapper">
					<img class='hero-img' src="<?php echo get_stylesheet_directory_uri(); ?>/img/kei-red-bg.webp" alt="Kei Gambit performing comedy">
				</div>
				<div class="text-group">
					<svg class='hero__autograph signature' version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="497" height="333" xml:space="preserve"><path class="stroke-1" d="M56.7 30.5S70.1 178 40 296.5"/><path class="stroke-2" d="M203.5 44.4s-104.1 79-139.1 115.2c0 0 39.3 25.3 59.1 66.1 0 0 13.7 24.5 23.4 33.2 0 0 18.5 19.7 31.3 25"/><path class="stroke-3" d="M294.9 55.7s-11.1-11.1-52.3 18.2c0 0-69 46.7-88.3 115.7 0 0-8.9 36.4 8.5 67.5 0 0 19.3 40.8 76.8 14.5 0 0 44.1-27.1 49.3-48.2 0 0-.4-37.8-31.2-42.3 0 0-16.7-5.9-27.8 14.1 0 0-12.6 22.3-23.7 37.8 0 0-30.4 37.5-56.8 51.2 0 0-22.3 14.1-69.4 7 0 0-37.5-5.9-30.2-21.5 0 0 4.3-24.5 54.4-52.3 0 0 154.3-89.4 280.5-130.6 0 0 62.7-22.6 86.4-35.6"/></svg>
					<h1 class='desktop-only alt'>Kei Gambit</h1>
					<h2 class='desktop-only'>Writer</h2>
				</div>
			</div>
		</div>
	
	</header><!-- #wrapper-navbar end -->
