<?php
/**
 * Armadon_Grimlock Class
 *
 * @author  Themosaurus
 * @since   1.0.0
 * @package armadon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Armadon_Grimlock' ) ) :
	/**
	 * The Armadon integration class for Grimlock
	 */
	class Armadon_Grimlock {
		/**
		 * Setup class.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			add_action( 'init',                 array( $this, 'add_excerpt_support_for_pages' ), 10    );
			add_filter( 'armadon_widget_areas', array( $this, 'add_widget_areas'              ), 10, 1 );
			add_filter( 'armadon_nav_menus',    array( $this, 'add_nav_menus'                 ), 10, 1 );
			add_action( 'wp_enqueue_scripts',   array( $this, 'dequeue_scripts'               ), 20    );

			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-site-identity-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-global-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-typography-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-navigation-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-preheader-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-custom-header-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-prefooter-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-footer-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-control-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-button-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-back-to-top-button-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-pagination-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-table-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-loader-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-archive-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-search-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-single-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-page-customizer.php';
			require_once get_template_directory() . '/inc/grimlock/customizer/class-armadon-grimlock-404-customizer.php';

			add_filter( 'grimlock_color_field_palettes',                              array( $this, 'color_field_palettes'                          ), 10, 1 );
			add_filter( 'grimlock_section_widget_defaults',                           array( $this, 'change_section_defaults'                       ), 10, 1 );
			add_filter( 'grimlock_section_block_defaults',                            array( $this, 'change_section_defaults'                       ), 10, 1 );
			add_filter( 'grimlock_nav_menu_section_widget_defaults',                  array( $this, 'change_nav_menu_section_defaults'              ), 10, 1 );
			add_filter( 'grimlock_nav_menu_section_block_defaults',                   array( $this, 'change_nav_menu_section_defaults'              ), 10, 1 );
			add_filter( 'grimlock_query_section_widget_post_thumbnail_size',          array( $this, 'change_query_section_post_thumbnail_size'      ), 10, 2 );
			add_filter( 'grimlock_query_section_block_post_thumbnail_size',           array( $this, 'change_query_section_post_thumbnail_size'      ), 10, 2 );
			add_filter( 'grimlock_posts_section_widget_post_thumbnail_size',          array( $this, 'change_query_section_post_thumbnail_size'      ), 10, 2 );
			add_filter( 'grimlock_posts_section_block_post_thumbnail_size',           array( $this, 'change_query_section_post_thumbnail_size'      ), 10, 2 );
			add_filter( 'grimlock_term_query_section_widget_term_thumbnail_size',     array( $this, 'change_term_query_section_term_thumbnail_size' ), 10, 2 );
			add_filter( 'grimlock_term_query_section_block_term_thumbnail_size',      array( $this, 'change_term_query_section_term_thumbnail_size' ), 10, 2 );

			add_filter( 'grimlock_archive_customizer_custom_header_thumbnail_size',   array( $this, 'change_thumbnail_size'                         ), 10, 2 );
			add_filter( 'grimlock_single_customizer_custom_header_thumbnail_size',    array( $this, 'change_thumbnail_size'                         ), 10, 2 );
			add_filter( 'grimlock_page_customizer_custom_header_thumbnail_size',      array( $this, 'change_thumbnail_size'                         ), 10, 2 );
			add_filter( 'grimlock_404_customizer_custom_header_thumbnail_size',       array( $this, 'change_thumbnail_size'                         ), 10, 2 );
			add_filter( 'grimlock_search_customizer_custom_header_thumbnail_size',    array( $this, 'change_thumbnail_size'                         ), 10, 2 );
			add_filter( 'grimlock_section_widget_thumbnail_size',                     array( $this, 'change_thumbnail_size'                         ), 10, 2 );

			add_filter( 'grimlock_query_section_widget_defaults',                     array( $this, 'change_query_section_defaults'                 ), 10, 1 );
			add_filter( 'grimlock_query_section_block_defaults',                      array( $this, 'change_query_section_defaults'                 ), 10, 1 );
			add_filter( 'grimlock_term_query_section_widget_defaults',                array( $this, 'change_term_query_section_defaults'            ), 10, 1 );
			add_filter( 'grimlock_term_query_section_block_defaults',                 array( $this, 'change_term_query_section_defaults'            ), 10, 1 );
			add_filter( 'grimlock_site_identity_args',                                array( $this, 'change_site_identity_args'                     ), 10, 1 );
			add_filter( 'grimlock_content_class',                                     array( $this, 'add_content_classes'                           ), 10, 1 );
		}

		/**
		 * Remove stylesheets.
		 *
		 * @since 1.0.0
		 */
		public function dequeue_scripts() {

			wp_dequeue_style(    'armadon-google-fonts' );
			wp_deregister_style( 'armadon-google-fonts' );
			wp_dequeue_script(   'armadon-navigation-search' );
			wp_dequeue_style(    'armadon-skeleton-styles' );
			wp_deregister_style( 'armadon-skeleton-styles' );


			if ( apply_filters( 'armadon_grimlock_priority_nav_enqueued', is_home() || is_tag() ||  is_category() || is_date() ) ) {
				wp_enqueue_style(  'priority-nav', get_template_directory_uri() . '/assets/css/vendor/priority-nav-core.css', array(), '1.0.12' );
				wp_enqueue_script( 'priority-nav', get_template_directory_uri() . '/assets/js/vendor/priority-nav.min.js', array(), '1.0.12', true );
				wp_enqueue_script( 'armadon-home', get_template_directory_uri() . '/assets/js/home.js', array( 'armadon', 'priority-nav' ), ARMADON_VERSION, true );
			}

			wp_enqueue_style( 'dashicons' );

		}

		/**
		 * Define available colors in the palette of the color picker.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $colors The color palette for the color picker.
		 *
		 * @return array         The updated color palette for the color picker.
		 */
		public function color_field_palettes( $colors ) {
			return array(
				ARMADON_BRAND_PRIMARY,
				ARMADON_BRAND_SECONDARY,
				ARMADON_GRAY_DARKEST,
				ARMADON_GRAY_DARKER,
				ARMADON_GRAY_DARK,
			);
		}

		/**
		 * Enables the Excerpt meta box in Page edit screen.
		 *
		 * @since 1.0.0
		 */
		public function add_excerpt_support_for_pages() {
			add_post_type_support( 'page', 'excerpt' );
		}

		/**
		 * Change the default values for the section widget.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $defaults The array of defaults values for the widget.
		 *
		 * @return array           The updated array of defaults values for the widget.
		 */
		public function change_section_defaults( $defaults ) {
			$defaults['padding_y']        = ARMADON_SECTION_PADDING_Y; // Legacy widget default TODO: remove
			$defaults['padding_top']      = ARMADON_SECTION_PADDING_Y;
			$defaults['padding_bottom']   = ARMADON_SECTION_PADDING_Y;
			$defaults['background_color'] = ARMADON_SECTION_BACKGROUND_COLOR;
			$defaults['title_format']     = 'display-1';
			return $defaults;
		}

		/**
		 * Change the default values for the nav menu section widget.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $defaults The array of defaults values for the widget.
		 *
		 * @return array           The updated array of defaults values for the widget.
		 */
		public function change_nav_menu_section_defaults( $defaults ) {
			$defaults['padding_y']        = ARMADON_SECTION_PADDING_Y; // Legacy widget default TODO: remove
			$defaults['padding_top']      = ARMADON_SECTION_PADDING_Y;
			$defaults['padding_bottom']   = ARMADON_SECTION_PADDING_Y;
			$defaults['background_color'] = ARMADON_SECTION_BACKGROUND_COLOR;
			$defaults['title_format']     = 'display-1';
			return $defaults;
		}

		/**
		 * Change the default values for the query section widget.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $defaults The array of defaults values for the widget.
		 *
		 * @return array           The updated array of defaults values for the widget.
		 */
		public function change_query_section_defaults( $defaults ) {
			$defaults['padding_y']        = ARMADON_SECTION_PADDING_Y; // Legacy widget default TODO: remove
			$defaults['padding_top']      = ARMADON_SECTION_PADDING_Y;
			$defaults['padding_bottom']   = ARMADON_SECTION_PADDING_Y;
			$defaults['background_color'] = ARMADON_SECTION_BACKGROUND_COLOR;
			$defaults['title_format']     = 'display-1';
			return $defaults;
		}

		/**
		 * Change the default values for the term query section widget.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $defaults The array of defaults values for the widget.
		 *
		 * @return array           The updated array of defaults values for the widget.
		 */
		public function change_term_query_section_defaults( $defaults ) {
			$defaults['padding_y']        = ARMADON_SECTION_PADDING_Y; // Legacy widget default TODO: remove
			$defaults['padding_top']      = ARMADON_SECTION_PADDING_Y;
			$defaults['padding_bottom']   = ARMADON_SECTION_PADDING_Y;
			$defaults['background_color'] = ARMADON_SECTION_BACKGROUND_COLOR;
			$defaults['title_format']     = 'display-1';
			return $defaults;
		}

		/**
		 * Change the default values for the query section widget.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $defaults The array of defaults values for the widget.
		 *
		 * @return array           The updated array of defaults values for the widget.
		 */
		public function add_section_widget_defaults( $defaults ) {
			$defaults['padding_y']        = ARMADON_SECTION_PADDING_Y; // Legacy widget default TODO: remove
			$defaults['padding_top']      = ARMADON_SECTION_PADDING_Y;
			$defaults['padding_bottom']   = ARMADON_SECTION_PADDING_Y;
			$defaults['background_color'] = ARMADON_SECTION_BACKGROUND_COLOR;
			$defaults['title_format']     = 'display-1';
			return $defaults;
		}

		/**
		 * Change props for the Site Identity component to display default logo.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $args The array of props for the component.
		 *
		 * @return array       The filtred array of props for the component.
		 */
		public function change_site_identity_args( $args ) {
			$logo = '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/logo-icon.svg' ) . '" alt="' . esc_attr__( 'logo', 'armadon' ) . '" /></a>';
			$args['custom_logo'] = empty( $args['custom_logo'] ) ? $logo : $args['custom_logo'];
			return $args;
		}

		/**
		 * Override hamburger navbar component to modify its markups.
		 *
		 * @since 1.0.0
		 *
		 * @param array $args The array of arguments for the post component.
		 */
		public function vertical_navbar( $args = array() ) {
			$post = new Armadon_Grimlock_Vertical_Navbar_Component( apply_filters( 'grimlock_vertical_navbar_args', (array) $args ) );
			$post->render();
		}

		/**
		 * Add widget areas for the theme.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $widget_areas The array of registered widget areas.
		 *
		 * @return array               The updated array of registered widget areas.
		 */
		public function add_widget_areas( $widget_areas ) {
			return array_merge( $widget_areas, array(
				'vertical-navbar-widget-area-40' => array(
					'id'          => 'vertical-navbar-1',
					'name'        => esc_html__( 'Vertical Navbar', 'armadon' ),
					'description' => esc_html__( 'The area for vertical navbar.', 'armadon' ),
				),
			) );
		}

		/**
		 * Add nav menus for the theme.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $nav_menus The array of registered nav menus.
		 *
		 * @return array               The updated array of registered nav menus.
		 */
		public function add_nav_menus( $nav_menus ) {
			return array_merge( $nav_menus, array(
				'secondary' => esc_html__( 'Secondary', 'armadon' ),
			) );
		}

		/**
		 * Add custom classes to content to modify layout.
		 *
		 * @since 1.0.0
		 *
		 * @param  array $classes The array of CSS classes for the content.
		 *
		 * @return array          The updated array of CSS classes for the content.
		 */
		public function add_content_classes( $classes ) {
			if ( is_page() ) {

				$page_template = get_page_template_slug( get_queried_object_id() );

				if ( $page_template === '' && ! is_front_page() ) {
					$classes[] = 'region--3-6-3-cols-left';
					$classes[] = 'region--container-classic';
				}
			}
			return $classes;
		}

		/**
		 * Change default post thumbnail sizes for the query section block/widget.
		 *
		 * @since 1.0.0
		 *
		 * @param string $size         The size for the post thumbnail.
		 * @param string $posts_layout The layout for the query.
		 *
		 * @return string              The updated size for the post thumbnail.
		 */
		public function change_query_section_post_thumbnail_size( $size, $posts_layout ) {
			switch ( $posts_layout ) {
				case '12-cols-overlay':
				case '6-6-cols-overlay':
				case '4-4-4-cols-overlay':
				case '3-3-3-3-cols-overlay':
				case '12-cols-classic-slider':
				case '6-6-cols-classic-slider':
				case '4-4-4-cols-classic-slider':
				case '3-3-3-3-cols-classic-slider':
				case '12-cols-overlay-slider':
				case '6-6-cols-overlay-slider':
				case '4-4-4-cols-overlay-slider':
					$size = str_replace( array('overlay', '-slider'), array('classic', ''), "thumbnail-{$posts_layout}" );
					break;
				case '3-3-3-3-cols-overlay-grid':
				case '4-4-4-cols-overlay-grid':
				case '3-3-3-3-cols-overlay-slider':
					$size = "thumbnail-4-4-4-cols-classic";
					break;
				case '12-cols-lateral-reverse':
					$size = 'thumbnail-12-cols-lateral';
					break;
				case '6-6-cols-lateral-reverse':
				case '6-6-cols-lateral-modern-alternate':
					$size = 'thumbnail-6-6-cols-lateral';
					break;
				case '8-4-cols-featured-grid':
					$size = "thumbnail-6-6-cols-lateral";
					break;
				default:
					$size = "thumbnail-{$posts_layout}";
			}
			return $size;
		}

		/**
		 * Change default term thumbnail sizes for the query section block/widget.
		 *
		 * @since 1.0.0
		 *
		 * @param string $size         The size for the term thumbnail.
		 * @param string $terms_layout The layout for the term query.
		 *
		 * @return string              The updated size for the term thumbnail.
		 */
		public function change_term_query_section_term_thumbnail_size( $size, $terms_layout ) {
			return "thumbnail-{$terms_layout}";
		}

		/**
		 * Change default image sizes depending on the layout
		 *
		 * @since 1.0.0
		 *
		 * @param string $size         The size for the term thumbnail.
		 * @param string $terms_layout The layout for the term query.
		 *
		 * @return string              The updated size for the term thumbnail.
		 */
		public function change_thumbnail_size( $size, $layout ) {
			switch ( $layout ) {
				case '6-6-cols-left-reverse-modern':
				case '8-4-cols-left-modern':
				case '8-4-cols-left-reverse-modern':
					$size = 'thumbnail-6-6-cols-left-modern';
					break;
			}
			return $size;
		}
	}
endif;

return new Armadon_Grimlock();
