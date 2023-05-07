<?php
/**
 * Armadon_Grimlock_bbPress Class
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
 * The Armadon Grimlock bbPress integration class
 */
class Armadon_Grimlock_bbPress {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		require_once get_template_directory() . '/inc/grimlock-bbpress/customizer/class-armadon-grimlock-bbpress-archive-forum-customizer.php';
	}
}

return new Armadon_Grimlock_bbPress();
