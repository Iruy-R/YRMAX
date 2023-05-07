<?php
/**
 * Armadon_Grimlock_BuddyPress Class
 *
 * @author   Themosaurus
 * @since    1.0.0
 * @package  armadon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Armadon Grimlock BuddyPress integration class.
 */
class Armadon_Grimlock_BuddyPress {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		global $armadon_grimlock_buddypress_customizer;
		$armadon_grimlock_buddypress_customizer = require_once get_template_directory() . '/inc/grimlock-buddypress/customizer/class-armadon-grimlock-buddypress-customizer.php';
	}

}

return new Armadon_Grimlock_BuddyPress();
