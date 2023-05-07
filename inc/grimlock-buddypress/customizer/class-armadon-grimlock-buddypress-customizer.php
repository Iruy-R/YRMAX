<?php
/**
 * Armadon_Grimlock_BuddyPress_Customizer Class
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
 * The Armadon Customizer class for BuddyPress.
 */
class Armadon_Grimlock_BuddyPress_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_buddypress_customizer_defaults',                                    array( $this, 'change_defaults'                                               ), 10, 1 );
		add_action( 'after_setup_theme',                                                          array( $this, 'remove_customizer_fields'                                      ), 30, 0 );
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
		$defaults['default_profile_cover_image']                   = get_stylesheet_directory_uri() . '/assets/images/covers/member-cover.jpg';
		$defaults['default_group_cover_image']                     = get_stylesheet_directory_uri() . '/assets/images/covers/group-cover.jpg';

		$defaults['friend_icons']                                  = 'add';

		$defaults['members_actions_text_displayed']                = false;
		$defaults['groups_actions_text_displayed']                 = true;

		$defaults['member_actions_button_background_color']        = '#22212d';
		$defaults['friend_button_background_color']                = ARMADON_BRAND_PRIMARY;
		$defaults['message_button_background_color']               = ARMADON_BRAND_PRIMARY;
		$defaults['success_button_background_color']               = ARMADON_BRAND_SUCCESS;
		$defaults['follow_button_background_color']                = ARMADON_BRAND_SUCCESS;
		$defaults['delete_button_background_color']                = ARMADON_BRAND_DANGER;
		$defaults['miscellaneous_actions_button_background_color'] = ARMADON_BRAND_PRIMARY;

		$defaults['profile_header_background_color']               = 'rgba(103, 87, 214, .75)';
		return $defaults;
	}

	/**
	 * Remove Customizer fields
	 */
	public function remove_customizer_fields() {
		if ( class_exists( 'Kirki' ) ) {
			Kirki::remove_control( 'friend_icons' );
			Kirki::remove_control( 'follow_icons' );
		}
	}

}

return new Armadon_Grimlock_BuddyPress_Customizer();
