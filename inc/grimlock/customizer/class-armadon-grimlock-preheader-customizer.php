<?php
/**
 * Armadon_Grimlock_Preheader_Customizer Class
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
 * The preheader class for the Customizer.
 */
class Armadon_Grimlock_Preheader_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_preheader_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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
			'preheader_background_image'        => ARMADON_PREHEADER_BACKGROUND_IMAGE,
			'preheader_layout'                  => ARMADON_PREHEADER_LAYOUT,
			'preheader_container_layout'        => ARMADON_PREHEADER_CONTAINER_LAYOUT,
			'preheader_padding_y'               => ARMADON_PREHEADER_PADDING_Y,
			'preheader_mobile_displayed'        => false,
			'preheader_background_color'        => ARMADON_PREHEADER_BACKGROUND_COLOR,
			'preheader_heading_color'           => ARMADON_PREHEADER_HEADING_COLOR,
			'preheader_color'                   => ARMADON_PREHEADER_COLOR,
			'preheader_link_color'              => ARMADON_PREHEADER_LINK_COLOR,
			'preheader_link_hover_color'        => ARMADON_PREHEADER_LINK_HOVER_COLOR,
			'preheader_border_top_color'        => ARMADON_PREHEADER_BORDER_TOP_COLOR,
			'preheader_border_top_width'        => ARMADON_PREHEADER_BORDER_TOP_WIDTH,
			'preheader_border_bottom_color'     => ARMADON_PREHEADER_BORDER_BOTTOM_COLOR,
			'preheader_border_bottom_width'     => ARMADON_PREHEADER_BORDER_BOTTOM_WIDTH,
		) );
	}
}

return new Armadon_Grimlock_Preheader_Customizer();
