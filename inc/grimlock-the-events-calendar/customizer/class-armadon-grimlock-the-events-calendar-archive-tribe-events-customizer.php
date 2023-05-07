<?php
/**
 * Armadon_Grimlock_The_Events_Calendar_Archive_Tribe_Events_Customizer Class
 *
 * @author   Themosaurus
 * @since    1.0.0
 * @package grimlock
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Customizer class for the events archive.
 */
class Armadon_Grimlock_The_Events_Calendar_Archive_Tribe_Events_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_the_events_calendar_archive_tribe_events_customizer_defaults', array( $this, 'change_defaults' ), 30, 1 );
	}

	/**
	 * Change the default values and control settings for the Customizer.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $defaults The array of default values for the Customizer controls.
	 *
	 * @return array          The updated array of default values for the Customizer controls.
	 */
	public function change_defaults( $defaults ) {
		$defaults['the_events_calendar_custom_header_displayed']        = true;
		$defaults['the_events_calendar_custom_header_layout']           = '6-6-cols-left-reverse';
		$defaults['the_events_calendar_custom_header_container_layout'] = 'classic';
		$defaults['the_events_calendar_custom_header_background_image'] = get_stylesheet_directory_uri() . '/assets/images/pages/header-default.jpg';
		$defaults['the_events_calendar_custom_header_padding_y']        = ARMADON_HEADER_PADDING_Y;
		$defaults['the_events_calendar_content_padding_y']              = ARMADON_CONTENT_PADDING_Y;

		$defaults['the_events_calendar_layout']                         = '9-3-cols-left';
		$defaults['the_events_calendar_container_layout']               = 'classic';
		return $defaults;
	}
}

return new Armadon_Grimlock_The_Events_Calendar_Archive_Tribe_Events_Customizer();
