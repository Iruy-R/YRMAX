<?php
/**
 * Armadon_Grimlock_The_Events_Calendar Class
 *
 * @package  armadon
 * @author   Themosaurus
 * @since    1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Armadon Grimlock integration class for The Events Calendar
 */
class Armadon_Grimlock_The_Events_Calendar {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		require_once get_template_directory() . '/inc/grimlock-the-events-calendar/customizer/class-armadon-grimlock-the-events-calendar-single-tribe-events-customizer.php';
		require_once get_template_directory() . '/inc/grimlock-the-events-calendar/customizer/class-armadon-grimlock-the-events-calendar-archive-tribe-events-customizer.php';
		add_filter( 'grimlock_the_events_calendar_organizer_default_avatar', array( $this, 'change_default_organizer_avatar' ), 10, 1 );
	}


	/**
	 * Add a custom logo URL when empty.
	 *
	 * @since 1.1.9
	 *
	 * @param  string $default_avatar_url The URL for the default avatar.
	 *
	 * @return string The updated URL for the default avatar.
	 */
	public function change_default_organizer_avatar( $default_avatar_url ) {
		return get_stylesheet_directory_uri() . '/assets/images/avatars/user-avatar.png';
	}
}

return new Armadon_Grimlock_The_Events_Calendar();
