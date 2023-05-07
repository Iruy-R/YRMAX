<?php
/**
 * Armadon_Grimlock_Author_Avatars Class
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
 * The Armadon Grimlock Author Avatars integration class
 */
class Armadon_Grimlock_Author_Avatars {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_author_avatars_section_widget_defaults', array( $this, 'change_author_avatars_section_widget_defaults' ), 10, 1 );
	}

	/**
	 * Change the default args for the author avatars section widget.
	 *
	 * @param  array $defaults The default args for the widget.
	 *
	 * @return array           The updated default args for the widget.
	 */
	public function change_author_avatars_section_widget_defaults( $defaults ) {
		$defaults['background_color'] = ARMADON_GRAY_LIGHTEST;
		$defaults['user_link']        = 'bp_memberpage';
		return $defaults;
	}
}

return new Armadon_Grimlock_Author_Avatars();
