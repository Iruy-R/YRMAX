<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armadon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
	<meta name="application-name" content="<?php bloginfo('name'); ?>">
	<meta name="theme-color" content="<?php echo esc_attr( apply_filters( 'armadon_theme_color', '#ffffff' ) ); ?>">

	<link rel="profile" href="<?php echo esc_url( 'http' . ( is_ssl() ? 's' : '' ) . '://gmpg.org/xfn/11' ); ?>">

	<!-- Icons -->
	<?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) : ?>
		<link rel="apple-touch-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/apple-touch-icon.png' ); ?>" sizes="180x180"/>
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/favicon-32x32.png' ); ?>" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/favicon-16x16.png' ); ?>" sizes="16x16">
		<link rel="manifest" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/site.webmanifest' ); ?> ">
		<link rel="mask-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/safari-pinned-tab.svg' ); ?>" color="#ec7a5c">
		<meta name="msapplication-TileColor" content="#ffffff">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to main content', 'armadon' ); ?></a>

<div id="site-wrapper" class="site-wrapper">
	<?php
	/**
	 * Functions hooked into armadon_before_site action
	 *
	 * @hooked armadon_grimlock_before_site - 10
	 */
	do_action( 'armadon_before_site' ); ?>

	<div id="site" class="site">

		<?php
		/**
		 * Functions hooked into armadon_header action
		 *
		 * @hooked armadon_header                  - 10
		 * @hooked armadon_grimlock_header         - 10
		 * @hooked armadon_grimlock_before_content - 20
		 */
		do_action( 'armadon_header' ); ?>
