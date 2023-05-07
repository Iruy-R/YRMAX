<?php
/**
 * Armadon_Grimlock_Pagination_Customizer Class
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
 * The pagination class for the Customizer.
 */
class Armadon_Grimlock_Pagination_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_pagination_customizer_defaults',                 array( $this, 'change_defaults'              ), 10, 1 );
		add_filter( 'grimlock_pagination_customizer_color_outputs',            array( $this, 'add_color_outputs'            ), 10, 1 );
		add_filter( 'grimlock_pagination_customizer_background_color_outputs', array( $this, 'add_background_color_outputs' ), 10, 1 );
		add_filter( 'grimlock_pagination_customizer_border_width_outputs',     array( $this, 'add_border_width_outputs'     ), 10, 1 );
		add_filter( 'grimlock_pagination_customizer_border_color_outputs',     array( $this, 'add_border_color_outputs'     ), 10, 1 );
		add_filter( 'grimlock_pagination_customizer_border_radius_outputs',    array( $this, 'add_border_radius_outputs'    ), 10, 1 );
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
		$defaults['pagination_background_color']       = ARMADON_CARD_BACKGROUND;
		$defaults['pagination_hover_background_color'] = ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR;
		$defaults['pagination_color']                  = ARMADON_CARD_COLOR;
		$defaults['pagination_hover_color']            = ARMADON_BUTTON_PRIMARY_COLOR;
		$defaults['pagination_border_width']           = ARMADON_CARD_BORDER_WIDTH;
		$defaults['pagination_border_color']           = ARMADON_CARD_BORDER_COLOR;
		$defaults['pagination_hover_border_color']     = ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR;
		$defaults['pagination_padding_y']              = 0.75;
		$defaults['pagination_padding_x']              = 1.15;
		$defaults['pagination_border_radius']          = ARMADON_CARD_BORDER_RADIUS;
		return $defaults;
	}

	/**
	 * Add selectors and properties to the CSS rule-set for pagination color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the pagination color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.post-password-form',
					'.single .wp-playlist-light',
				) ),
				'property' => 'color',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for pagination background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the pagination background color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_background_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.post-password-form',
					'.single .wp-playlist-light',
				) ),
				'property' => 'background-color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for pagination border width.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the pagination border width.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_border_width_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.post-password-form',
					'.single .wp-playlist-light',
				) ),
				'property' => 'border-width',
				'units'    => 'px',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for pagination border color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the pagination border color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_border_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.post-password-form',
					'.single .wp-playlist-light',
				) ),
				'property' => 'border-color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for pagination border radius.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the pagination border radius.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_border_radius_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.entry-author.border',
					'.post-password-form',
					'.single .wp-playlist-light',
				) ),
				'property' => 'border-radius',
				'units'    => 'rem',
			),
		) );
	}
}

return new Armadon_Grimlock_Pagination_Customizer();
