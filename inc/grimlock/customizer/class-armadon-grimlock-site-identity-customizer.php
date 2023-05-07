<?php
/**
 * Armadon_Grimlock_Site_Identity_Customizer Class
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
 * The site itdentity class for the Customizer.
 */
class Armadon_Grimlock_Site_Identity_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_site_identity_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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
		$defaults['site_identity_custom_logo_size']          = ARMADON_SITE_IDENTITY_CUSTOM_LOGO_SIZE;
		$defaults['site_identity_custom_logo_displayed']     = true;
		$defaults['site_identity_blogname_displayed']        = false;
		$defaults['site_identity_blogdescription_displayed'] = false;
		$defaults['site_identity_blogname_color']            = '#fff';
		$defaults['site_identity_blogname_hover_color']      = ARMADON_BRAND_PRIMARY;
		$defaults['site_identity_blogname_font']             = array(
			'font-family'                                    => ARMADON_HEADINGS_FONT_FAMILY,
			'font-weight'                                    => ARMADON_HEADINGS_FONT_WEIGHT,
			'font-size'                                      => ARMADON_HEADING4_FONT_SIZE,
			'line-height'                                    => ARMADON_HEADINGS_LINE_HEIGHT,
			'letter-spacing'                                 => ARMADON_HEADINGS_LETTER_SPACING,
			'subsets'                                        => array( 'latin-ext' ),
			'text-transform'                                 => ARMADON_HEADING_TEXT_TRANSFORM,
		);
		return $defaults;
	}
}

return new Armadon_Grimlock_Site_Identity_Customizer();
