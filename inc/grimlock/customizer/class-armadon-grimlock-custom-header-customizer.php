<?php
/**
 * Armadon_Grimlock_Custom_Header_Customizer Class
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
 * The custom header class for the Customizer.
 */
class Armadon_Grimlock_Custom_Header_Customizer extends Grimlock_Custom_Header_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		parent::__construct();
		add_filter( 'grimlock_custom_header_customizer_defaults',                array( $this, 'change_defaults'                ), 10, 1 );
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
		$defaults['custom_header_padding_y']          = ARMADON_HEADER_PADDING_Y;
		$defaults['custom_header_background_color']   = ARMADON_HEADER_BACKGROUND_COLOR;

		$defaults['custom_header_background_gradient_displayed']    = true;
		$defaults['custom_header_background_gradient_first_color']  = 'rgba(30, 33, 39, .15)';
		$defaults['custom_header_background_gradient_second_color'] = 'rgba(20, 23, 29, .85)';
		$defaults['custom_header_background_gradient_direction']    = '35deg';
		$defaults['custom_header_background_gradient_position']     = '20';

		$defaults['custom_header_border_top_color']    = ARMADON_GRAY_DARKER;
		$defaults['custom_header_border_top_width']    = '0';
		$defaults['custom_header_border_bottom_color'] = ARMADON_GRAY_DARKER;
		$defaults['custom_header_border_bottom_width'] = '0';

		$defaults['custom_header_displayed']          = true;
		$defaults['custom_header_title_displayed']    = true;
		$defaults['custom_header_title_format']       = 'display-1';
		$defaults['custom_header_title_color']        = '#FFFFFF';

		$defaults['custom_header_subtitle_displayed'] = true;
		$defaults['custom_header_subtitle_format']    = 'lead';
		$defaults['custom_header_subtitle_color']     = '#9890d2';

		$defaults['custom_header_link_color']         = ARMADON_HEADER_LINK_COLOR;
		$defaults['custom_header_link_hover_color']   = ARMADON_HEADER_LINK_HOVER_COLOR;

		$defaults['custom_header_layout']             = '6-6-cols-left-reverse';
		$defaults['custom_header_container_layout']   = 'narrow';
		$defaults['custom_header_mobile_displayed']   = true;
		return $defaults;
	}
}

return new Armadon_Grimlock_Custom_Header_Customizer();
