<?php
/**
 * Armadon_Grimlock_Page_Customizer Class
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
 * The single page class for the Customizer.
 */
class Armadon_Grimlock_Page_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_page_customizer_defaults', array( $this, 'change_defaults' ), 10, 1 );
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
			'page_custom_header_displayed'        => ARMADON_PAGE_CUSTOM_HEADER_DISPLAYED,

			'page_custom_header_layout'           => '12-cols-center',
			'page_custom_header_container_layout' => 'classic',

			'page_sidebar_mobile_displayed'       => true,

			'page_custom_header_padding_y'        => ARMADON_HEADER_PADDING_Y,
			'page_content_padding_y'              => ARMADON_CONTENT_PADDING_Y,
		) );
	}
}

return new Armadon_Grimlock_Page_Customizer();
