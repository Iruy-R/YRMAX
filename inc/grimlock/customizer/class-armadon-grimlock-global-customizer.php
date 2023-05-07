<?php
/**
 * Armadon_Grimlock_Global_Customizer Class
 *
 * @author  Themosaurus
 * @since   1.0.0
 * @package armadon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The background image class for the Customizer.
 */
class Armadon_Grimlock_Global_Customizer extends Grimlock_Global_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		parent::__construct();

		add_filter( 'grimlock_global_customizer_defaults',                          array( $this, 'change_defaults'                       ), 10, 1 );
		add_filter( 'grimlock_global_customizer_content_background_color_elements', array( $this, 'add_content_background_color_elements' ), 10, 1 );
		add_filter( 'grimlock_global_customizer_content_background_color_outputs',  array( $this, 'add_content_background_color_outputs'  ), 10, 1 );
		add_filter( 'kirki_grimlock_dynamic_css',                                   array( $this, 'print_styles'                          ), 10, 1 );

		add_filter( 'body_class',                                                   array( $this, 'add_body_classes'                      ), 10, 1 );

		add_action( 'wp_enqueue_scripts',                                           array( $this, 'enqueue_styles'                        ), 1000  );
	}

	/**
	 * Register default values, settings and custom controls for the Theme Customizer.
	 *
	 * @since 2.0.0
	 */
	public function add_customizer_fields() {
		parent::add_customizer_fields();
		$this->defaults = apply_filters( 'armadon_grimlock_global_customizer_defaults', array(
			'theme_ornaments_displayed' => true,
		) );

		// @codingStandardsIgnoreStart

		// Allow associative array to be declared in a single line.
		$this->add_theme_ornaments_displayed_field( array( 'priority' => 30 ) );
		// @codingStandardsIgnoreEnd
	}

	/**
	 * Add tabs to the Customizer to group controls.
	 *
	 * @param  array $js_data The array of data for the Customizer controls.
	 *
	 * @return array          The filtered array of data for the Customizer controls.
	 */
	public function add_customizer_controls_js_data( $js_data ) {
		$js_data['tabs'][ $this->section ][3] = array(
			'label'    => esc_html__( 'Style', 'armadon' ),
			'class'    => 'background_image-style-tab',
			'controls' => array(
				'theme_ornaments_displayed',
			),
		);
		return $js_data;
	}

	/**
	 * Add a Kirki checkbox field in the Customizer to set whether to display the theme ornaments.
	 *
	 * @since 2.0.0
	 *
	 * @param array $args The array of arguments for the Kirki field.
	 */
	protected function add_theme_ornaments_displayed_field( $args = array() ) {
		if ( class_exists( 'Kirki' ) ) {
			$args = wp_parse_args( $args, array(
				'type'     => 'checkbox',
				'section'  => $this->section,
				'label'    => esc_html__( 'Display theme ornaments', 'armadon' ),
				'settings' => 'theme_ornaments_displayed',
				'default'  => $this->get_default( 'theme_ornaments_displayed' ),
				'priority' => 10,
			) );

			Kirki::add_field( 'grimlock', apply_filters( 'armadon_grimlock_global_customizer_theme_ornaments_displayed_field_args', $args ) );
		}
	}

	/**
	 * Add custom classes to body to modify layout.
	 *
	 * @since 2.0.0
	 * @param $classes
	 *
	 * @return string
	 */
	public function add_body_classes( $classes ) {
		if ( ! empty( $this->get_theme_mod( 'theme_ornaments_displayed' ) ) ) {
			$classes[] = 'armadon--theme-ornaments-displayed';
		}
		return $classes;
	}

	/**
	 * Change default values and control settings for the Customizer.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $defaults The array of default values for the Customizer controls.
	 *
	 * @return array           The updated array of default values for the Customizer controls.
	 */
	public function change_defaults( $defaults ) {
		$defaults['background_color']         = ARMADON_BODY_BACKGROUND;
		$defaults['wrapper_layout']           = ARMADON_CONTENT_LAYOUT;
		$defaults['content_background_color'] = ARMADON_CONTENT_BACKGROUND;
		return $defaults;
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the content background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the content background color.
	 *
	 * @return array           The updated array of CSS selectors for the content background color.
	 */
	public function add_content_background_color_elements( $elements ) {
		return array_merge( $elements, array(
			'#custom_header.region--6-6-cols-left-modern:after',
			'#custom_header.region--6-6-cols-left-reverse-modern:after',
			'.addtoany_content .addtoany_list a > span:after',
			'.modal-backdrop',
			'.navbar-search__close',
			'.grimlock-gallery-section:not(.no-content).region--12-cols-center.region--container-fluid .region__col--2',
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the content background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the content background color.
	 *
	 * @return array          The updated array of CSS selectors for the content background color.
	 */
	public function add_content_background_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.card .author img:hover',
					'.custom-control-indicator',
				) ),
				'property' => 'border-color',
			),
			array(
				'element' => implode( ',', array(
					'.bg-light',
				) ),
				'property' => 'background-color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Enqueue custom styles based on theme mods.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {
		$background_color = get_theme_mod( 'background_color' );
		if ( empty( $background_color ) ) {
			$background_color = get_theme_mod( 'background_color', ARMADON_BODY_BACKGROUND );
			$styles = "
			body,
			body:after {
				background-color: {$background_color};
			}";
			wp_add_inline_style( apply_filters( 'grimlock_stylesheet', 'kirki-styles-grimlock' ), $styles );
		}
	}


	/**
	 * Enqueue custom styles based on theme mods.
	 *
	 * @since 1.0.0
	 */
	public function print_styles( $styles ) {
		$background_color = get_theme_mod( 'background_color' );
		if ( empty( $background_color ) ) {
			$background_color = get_theme_mod( 'background_color', ARMADON_BODY_BACKGROUND );
			$styles .= "
			body,
			body:after {
				background-color: {$background_color};
			}";
		}
		return $styles;
	}

}

return new Armadon_Grimlock_Global_Customizer();
