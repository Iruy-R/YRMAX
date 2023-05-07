<?php
/**
 * Armadon_Grimlock_Single_Customizer Class
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
class Armadon_Grimlock_Single_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_single_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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

		$defaults['single_custom_header_displayed']                = true;
		$defaults['single_custom_header_padding_y']                = ARMADON_BIG_HEADER_PADDING_Y;
		$defaults['single_content_padding_y']                      = ARMADON_CONTENT_PADDING_Y;
		$defaults['single_custom_header_layout']                   = '6-6-cols-left-reverse';
		$defaults['single_custom_header_container_layout']         = 'classic';

		$defaults['single_post_thumbnail_custom_header_displayed'] = true;
		$defaults['single_post_date_custom_header_displayed']      = true;
		$defaults['single_post_author_custom_header_displayed']    = true;
		$defaults['single_category_custom_header_displayed']       = true;
		$defaults['single_post_format_custom_header_displayed']    = true;

		$defaults['single_layout']                                 = '12-cols-left';
		$defaults['single_sidebar_mobile_displayed']               = true;
		$defaults['single_container_layout']                       = 'classic';

		$defaults['single_post_thumbnail_displayed']               = false;
		$defaults['single_post_date_displayed']                    = false;
		$defaults['single_post_author_displayed']                  = false;
		$defaults['single_post_tag_displayed']                     = true;
		$defaults['single_category_displayed']                     = true;
		$defaults['single_post_format_displayed']                  = true;
		$defaults['single_post_author_biography_displayed']        = true;
		$defaults['single_post_navigation_displayed']              = true;
		$defaults['single_post_navigation_layout']                 = 'modern-floating';

		return $defaults;
	}
}

return new Armadon_Grimlock_Single_Customizer();
