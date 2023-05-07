<?php
/**
 * Armadon_Grimlock_Navigation_Customizer Class
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
 * The navigation class for the Customizer.
 */
class Armadon_Grimlock_Navigation_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_navigation_customizer_defaults',                                   array( $this, 'change_defaults'                                   ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_stick_to_top_background_color_elements',     array( $this, 'remove_stick_to_top_background_color_elements'     ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_border_bottom_width_outputs',                array( $this, 'add_border_bottom_width_outputs'                   ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_menu_item_active_color_elements',            array( $this, 'add_menu_item_active_color_elements'               ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_menu_item_active_background_color_elements', array( $this, 'add_menu_item_active_background_color_elements' ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_menu_item_active_color_outputs',             array( $this, 'add_menu_item_active_color_outputs'                ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_sub_menu_item_background_color_outputs',     array( $this, 'change_sub_menu_item_background_color_outputs'     ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_sub_menu_item_color_outputs',                array( $this, 'change_sub_menu_item_color_outputs'                ), 10, 1 );
		add_filter( 'grimlock_navigation_customizer_font_outputs',                               array( $this, 'add_font_outputs'                                  ), 10, 1 );
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
		$defaults['navigation_font']                                = array(
			'font-family'                                           => ARMADON_HEADINGS_FONT_FAMILY,
			'font-weight'                                           => '700',
			'font-size'                                             => '.95rem',
			'line-height'                                           => '1.25',
			'letter-spacing'                                        => '0',
			'subsets'                                               => array( 'latin-ext' ),
			'text-transform'                                        => 'uppercase',
		);

		$defaults['navigation_background_color']                    = ARMADON_GRAY_DARKEST;
		$defaults['navigation_menu_item_color']                     = '#ffffff';
		$defaults['navigation_menu_item_active_background_color']   = ARMADON_BRAND_SECONDARY;
		$defaults['navigation_menu_item_active_color']              = ARMADON_BRAND_SECONDARY;
		$defaults['navigation_sub_menu_item_color']                 = '#ffffff';
		$defaults['navigation_sub_menu_item_background_color']      = 'rgba(27, 26, 35, .97)';

		$defaults['navigation_border_bottom_width']                 = 1;
		$defaults['navigation_border_bottom_top']                   = 0;
		$defaults['navigation_border_bottom_color']                 = '#292734';

		$defaults['navigation_layout']                              = 'classic-left';
		$defaults['navigation_position']                            = 'classic-top';
		$defaults['navigation_container_layout']                    = 'fluid';
		$defaults['navigation_padding_y']                           = 1.25;
		$defaults['navigation_stick_to_top']                        = true;
		$defaults['navigation_stick_to_top_background_color']       = 'rgba(27, 26, 35, .97)';
		$defaults['navigation_mobile_background_color']             = 'rgba(27, 26, 35, .97)';

		$defaults['navigation_search_form_displayed']               = true;
		$defaults['navigation_search_form_modal_displayed']         = true;
		$defaults['navigation_search_form_color']                   = ARMADON_CONTROL_COLOR;
		$defaults['navigation_search_form_placeholder_color']       = ARMADON_CONTROL_PLACEHOLDER_COLOR;
		$defaults['navigation_search_form_background_color']        = ARMADON_CONTROL_BACKGROUND_COLOR;
		$defaults['navigation_search_form_active_background_color'] = ARMADON_CONTROL_FOCUS_BACKGROUND_COLOR;
		$defaults['navigation_search_form_active_color']            = ARMADON_CONTROL_FOCUS_COLOR;

		return $defaults;
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the navigation bottom border.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the navigation bottom border.
	 *
	 * @return array          The updated array of CSS selectors for the navigation bottom border.
	 */
	public function add_border_bottom_width_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.main-navigation .navbar-nav > .menu-item:after',
				) ),
				'property' => 'bottom',
				'units'    => 'px',
			),
		) );
	}

	/**
	 * Remove CSS selectors from the array of CSS selectors for the sticky navigation background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the sticky navigation background color.
	 *
	 * @return array           The updated array of CSS selectors for the sticky navigation background color.
	 */
	public function remove_stick_to_top_background_color_elements( $elements ) {
		$key = array_search( 'body:not(.grimlock--custom_header-displayed) .grimlock-navigation',  $elements, true );

		if ( false !== $key ) {
			unset( $elements[ $key ] );
		}
		return $elements;
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the menu item active color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the menu item active color.
	 *
	 * @return array           The updated array of CSS selectors for the menu item active color.
	 */
	public function add_menu_item_active_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.navbar-nav--secondary > .menu-item > a:hover i',
			'.navbar-nav--secondary > .menu-item > a:active i',
			'.navbar-nav--secondary > .menu-item > a:focus i',
			'.navbar-search .navbar-search__icon:hover',
			'.navbar-search .navbar-search__icon:active',
			'.navbar-search .navbar-search__icon:focus',
			'#preheader .menu > li.menu-item .sub-menu li.menu-item > a:hover',
			'#preheader .menu > li.menu-item .sub-menu li.menu-item > a:active',
			'#preheader .menu > li.menu-item .sub-menu li.menu-item > a:focus',
			'.priority-nav .priority-nav__wrapper .priority-nav__dropdown .nav-item .nav-link:hover',
			'.priority-nav .priority-nav__wrapper .priority-nav__dropdown .nav-item .nav-link:focus',
			'.priority-nav .priority-nav__wrapper .priority-nav__dropdown .nav-item .nav-link:active',
			'.priority-nav .priority-nav__wrapper .priority-nav__dropdown .nav-item .nav-link.active',
			'div.searchwp-live-search-results div.searchwp-live-search-result a:hover',
			'div.searchwp-live-search-results div.searchwp-live-search-result a:focus',
			'div.searchwp-live-search-results div.searchwp-live-search-result a:active',
		) );
	}

	/**
	 * Remove CSS selectors to the array of CSS selectors for the menu item active background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the menu item active color.
	 *
	 * @return array           The updated array of CSS selectors for the menu item active color.
	 */
	public function add_menu_item_active_background_color_elements( $elements ) {
		$elements = array(
			'.main-navigation .navbar-nav.navbar-nav--main-menu > .menu-item > a:before',
		);

		return $elements;
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the sub-menu item background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the sub-menu item background color.
	 *
	 * @return array          The updated array of CSS selectors for the sub-menu item background color.
	 */
	public function add_menu_item_active_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.preheader .menu > li.menu-item .sub-menu li.menu-item > a:hover',
					'.preheader .menu > li.menu-item .sub-menu li.menu-item > a:active',
					'.preheader .menu > li.menu-item .sub-menu li.menu-item > a:focus',
				) ),
				'property' => 'color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the sub-menu item background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the sub-menu item background color.
	 *
	 * @return array          The updated array of CSS selectors for the sub-menu item background color.
	 */
	public function change_sub_menu_item_background_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.priority-nav .priority-nav__wrapper .priority-nav__dropdown',
					'div.searchwp-live-search-results',
				) ),
				'property' => 'background-color',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the sub-menu item color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the sub-menu item color.
	 *
	 * @return array          The updated array of CSS selectors for the sub-menu item color.
	 */
	public function change_sub_menu_item_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.priority-nav .priority-nav__wrapper .priority-nav__dropdown',
					'.priority-nav .priority-nav__wrapper .priority-nav__dropdown .nav-link',
					'div.searchwp-live-search-results div.searchwp-live-search-result',
					'div.searchwp-live-search-results div.searchwp-live-search-result a',
				) ),
				'property' => 'color',
			),
			array(
				'element' => implode( ',', array(
					'.dropdown-classic .dropdown-menu',
					'.dropdown-classic .dropdown-menu a',
				) ),
				'property' => 'color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the menu item typography.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for menu item typography.
	 *
	 * @return array          The updated array of CSS selectors for the sub-menu item color.
	 */
	public function add_font_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.entry-meta',
					'.posts-filters .posts-filter',
				) ),
				'property' => 'font-weight',
				'choice'   => 'font-weight',
			),
		) );
	}

}

return new Armadon_Grimlock_Navigation_Customizer();
