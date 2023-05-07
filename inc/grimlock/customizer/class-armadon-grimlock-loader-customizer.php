<?php
/**
 * Armadon_Grimlock_Loader_Customizer Class
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
 * The loader class for the Customizer.
 */
class Armadon_Grimlock_Loader_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_loader_customizer_defaults',      array( $this, 'change_defaults'   ), 10, 1 );
		add_filter( 'grimlock_loader_customizer_color_outputs', array( $this, 'add_color_outputs' ), 10, 1 );
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
		return array_merge( $defaults, array(
			'loader_fadein_displayed'          => true,
			'loader_fadein_animation_duration' => 500,
			'loader_displayed'                 => ARMADON_LOADER_DISPLAYED,
			'loader_animation_duration'        => 1500,
			'loader_background_color'          => ARMADON_LOADER_BACKGROUND_COLOR,
			'loader_color'                     => ARMADON_LOADER_COLOR,
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the archive post padding.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the archive post padding.
	 *
	 * @return array          The updated array of CSS selectors for the archive post padding.
	 */
	public function add_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.grimlock-loader-wrapper .grimlock-loader:after',
				) ),
				'property' => 'border-top-color',
			),
			array(
				'element'  => implode( ',', array(
					'.grimlock-loader-wrapper .grimlock-loader:before',
				) ),
				'property' => 'border-color',
			),
		) );
	}

}

return new Armadon_Grimlock_Loader_Customizer();
