<?php
/**
 * Armadon_Grimlock_Prefooter_Customizer Class
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
 * The prefooter class for the Customizer.
 */
class Armadon_Grimlock_Prefooter_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_prefooter_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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
		$defaults['prefooter_background_image']    = ARMADON_PREFOOTER_BACKGROUND_IMAGE;
		$defaults['prefooter_layout']              = ARMADON_PREFOOTER_LAYOUT;
		$defaults['prefooter_container_layout']    = ARMADON_PREFOOTER_CONTAINER_LAYOUT;
		$defaults['prefooter_padding_y']           = ARMADON_PREFOOTER_PADDING_Y;
		$defaults['prefooter_mobile_displayed']    = true;
		$defaults['prefooter_background_color']    = ARMADON_PREFOOTER_BACKGROUND_COLOR;
		$defaults['prefooter_heading_color']       = ARMADON_PREFOOTER_HEADING_COLOR;
		$defaults['prefooter_color']               = ARMADON_PREFOOTER_COLOR;
		$defaults['prefooter_link_color']          = ARMADON_PREFOOTER_LINK_COLOR;
		$defaults['prefooter_link_hover_color']    = ARMADON_PREFOOTER_LINK_HOVER_COLOR;
		$defaults['prefooter_border_top_color']    = ARMADON_PREFOOTER_BORDER_TOP_COLOR;
		$defaults['prefooter_border_top_width']    = ARMADON_PREFOOTER_BORDER_TOP_WIDTH;
		$defaults['prefooter_border_bottom_color'] = ARMADON_PREFOOTER_BORDER_BOTTOM_COLOR;
		$defaults['prefooter_border_bottom_width'] = ARMADON_PREFOOTER_BORDER_BOTTOM_WIDTH;
		return $defaults;
	}
}

return new Armadon_Grimlock_Prefooter_Customizer();
