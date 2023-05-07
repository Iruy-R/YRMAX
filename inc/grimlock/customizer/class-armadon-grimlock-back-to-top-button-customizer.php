<?php
/**
 * Armadon_Grimlock_Back_To_Top_Button_Customizer Class
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
 * The back to top button class for the Customizer.
 */
class Armadon_Grimlock_Back_To_Top_Button_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_back_to_top_button_customizer_defaults', array( $this, 'change_defaults' ), 20, 1 );
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
		$defaults['back_to_top_button_displayed']        = true;
		$defaults['back_to_top_button_border_radius']    = 0;
		$defaults['back_to_top_button_padding']          = 1;
		$defaults['back_to_top_button_background_color'] = ARMADON_BRAND_PRIMARY;
		$defaults['back_to_top_button_color']            = '#ffffff';
		$defaults['back_to_top_button_border_color']     = 'rgba(0,0,0,0)';
		$defaults['back_to_top_button_border_width']     = 0;
		return $defaults;
	}
}

return new Armadon_Grimlock_Back_To_Top_Button_Customizer();
