<?php
/**
 * Armadon_Grimlock_Footer_Customizer Class
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
 * The footer class for the Customizer.
 */
class Armadon_Grimlock_Footer_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_footer_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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
		$defaults['footer_background_image']    = ARMADON_FOOTER_BACKGROUND_IMAGE;
		$defaults['footer_layout']              = ARMADON_FOOTER_LAYOUT;
		$defaults['footer_container_layout']    = ARMADON_FOOTER_CONTAINER_LAYOUT;
		$defaults['footer_padding_y']           = ARMADON_FOOTER_PADDING_Y;
		$defaults['footer_mobile_displayed']    = true;
		$defaults['footer_background_color']    = ARMADON_FOOTER_BACKGROUND_COLOR;
		$defaults['footer_heading_color']       = ARMADON_FOOTER_HEADING_COLOR;
		$defaults['footer_color']               = ARMADON_FOOTER_COLOR;
		$defaults['footer_link_color']          = ARMADON_FOOTER_LINK_COLOR;
		$defaults['footer_link_hover_color']    = ARMADON_FOOTER_LINK_HOVER_COLOR;
		$defaults['footer_border_top_color']    = ARMADON_FOOTER_BORDER_TOP_COLOR;
		$defaults['footer_border_top_width']    = ARMADON_FOOTER_BORDER_TOP_WIDTH;
		$defaults['footer_border_bottom_color'] = ARMADON_FOOTER_BORDER_BOTTOM_COLOR;
		$defaults['footer_border_bottom_width'] = ARMADON_FOOTER_BORDER_BOTTOM_WIDTH;
		return $defaults;
	}

}

return new Armadon_Grimlock_Footer_Customizer();
