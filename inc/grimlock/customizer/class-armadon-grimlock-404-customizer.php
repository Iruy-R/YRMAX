<?php
/**
 * Armadon_Grimlock_404_Customizer Class
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
 * The single post class for the Customizer.
 */
class Armadon_Grimlock_404_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_404_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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

		$allowed_html = array(
			'em'     => array( 'class' => array() ),
			'i'      => array( 'class' => array() ),
			'b'      => array( 'class' => array() ),
			'strong' => array( 'class' => array() ),
			'ins'    => array( 'class' => array() ),
			'del'    => array( 'class' => array() ),
			'br'     => array( 'class' => array() ),
			'span'   => array( 'class' => array() ),
			'a'      => array( 'href'  => array(), 'title' => array() ),
		);

		$text_404    = wp_kses( __( "It looks like nothing was found at this location. <br/>Maybe try one of the links below or a search?", 'armadon' ), $allowed_html );

		$defaults['404_padding_y']                     = ARMADON_404_PADDING_Y;
		$defaults['404_full_screen_displayed']         = ARMADON_404_FULL_SCREEN_DISPLAYED;
		$defaults['404_background_color']              = ARMADON_404_BACKGROUND_COLOR;
		$defaults['404_background_image']              = ARMADON_404_BACKGROUND_IMAGE;
		$defaults['404_thumbnail']                     = ARMADON_404_THUMBNAIL;
		$defaults['404_title']                         = esc_html__( '404 • Page not found', 'armadon' );
		$defaults['404_title_format']                  = 'display-1';
		$defaults['404_title_color']                   = ARMADON_HEADINGS_COLOR;
		$defaults['404_subtitle']                      = '';
		$defaults['404_subtitle_color']                = ARMADON_SUBHEADINGS_COLOR;
		$defaults['404_text']                          = $text_404;
		$defaults['404_text_color']                    = ARMADON_BODY_COLOR;
		$defaults['404_button_displayed']              = true;
		$defaults['404_button_color']                  = ARMADON_BUTTON_PRIMARY_COLOR;
		$defaults['404_button_background_color']       = ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR;
		$defaults['404_button_border_color']           = ARMADON_BUTTON_PRIMARY_BORDER_COLOR;
		$defaults['404_button_hover_background_color'] = ARMADON_BUTTON_PRIMARY_HOVER_BACKGROUND_COLOR;
		$defaults['404_button_hover_color']            = ARMADON_BUTTON_PRIMARY_HOVER_COLOR;
		$defaults['404_button_hover_border_color']     = ARMADON_BUTTON_PRIMARY_HOVER_BORDER_COLOR;
		$defaults['404_layout']                        = '12-cols-center';
		$defaults['404_container_layout']              = 'narrower';
		return $defaults;
	}
}

return new Armadon_Grimlock_404_Customizer();
