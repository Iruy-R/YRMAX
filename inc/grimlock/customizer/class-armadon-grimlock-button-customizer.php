<?php
/**
 * Armadon_Grimlock_Button_Customizer Class
 *
 * @author  Themosaurus
 * @since   1.0.0
 * @package armadon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**n,;
 * The button class for the Customizer.
 */
class Armadon_Grimlock_Button_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_button_customizer_defaults',                          array( $this, 'change_defaults'                       ), 10, 1 );
		add_filter( 'grimlock_button_customizer_elements',                          array( $this, 'add_elements'                          ), 10, 1 );
		add_filter( 'grimlock_button_customizer_primary_elements',                  array( $this, 'add_primary_elements'                  ), 10, 1 );
		add_filter( 'grimlock_button_customizer_secondary_elements',                array( $this, 'add_secondary_elements'                ), 10, 1 );
		add_filter( 'grimlock_button_customizer_primary_color_elements',            array( $this, 'add_primary_color_elements'            ), 10, 1 );
		add_filter( 'grimlock_button_customizer_primary_color_outputs',             array( $this, 'add_primary_color_outputs'             ), 10, 1 );
		add_filter( 'grimlock_button_customizer_primary_background_color_elements', array( $this, 'add_primary_background_color_elements' ), 10, 1 );
		add_filter( 'grimlock_button_customizer_primary_background_color_outputs',  array( $this, 'add_primary_background_color_outputs'  ), 10, 1 );
		add_filter( 'grimlock_button_customizer_border_radius_outputs',             array( $this, 'add_border_radius_outputs'             ), 10, 1 );
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
		$defaults['button_font']                             = array(
			'font-family'                                    => ARMADON_HEADINGS_FONT_FAMILY,
			'font-weight'                                    => ARMADON_BUTTON_FONT_WEIGHT,
			'font-size'                                      => ARMADON_BUTTON_FONT_SIZE,
			'line-height'                                    => ARMADON_BUTTON_LINE_HEIGHT,
			'letter-spacing'                                 => ARMADON_BUTTON_LETTER_SPACING,
			'subsets'                                        => array( 'latin-ext' ),
			'text-transform'                                 => ARMADON_BUTTON_TEXT_TRANSFORM,
		);
		$defaults['button_border_radius']                    = ARMADON_BUTTON_BORDER_RADIUS;
		$defaults['button_border_width']                     = ARMADON_BUTTON_BORDER_WIDTH;
		$defaults['button_padding_y']                        = ARMADON_BUTTON_PADDING_Y;
		$defaults['button_padding_x']                        = ARMADON_BUTTON_PADDING_X;

		$defaults['button_primary_background_color']         = ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR;
		$defaults['button_primary_color']                    = ARMADON_BUTTON_PRIMARY_COLOR;
		$defaults['button_primary_border_color']             = ARMADON_BUTTON_PRIMARY_BORDER_COLOR;
		$defaults['button_primary_hover_background_color']   = ARMADON_BUTTON_PRIMARY_HOVER_BACKGROUND_COLOR;
		$defaults['button_primary_hover_color']              = ARMADON_BUTTON_PRIMARY_HOVER_COLOR;
		$defaults['button_primary_hover_border_color']       = ARMADON_BUTTON_PRIMARY_HOVER_BORDER_COLOR;

		$defaults['button_secondary_background_color']       = ARMADON_BUTTON_SECONDARY_BACKGROUND_COLOR;
		$defaults['button_secondary_color']                  = ARMADON_BUTTON_SECONDARY_COLOR;
		$defaults['button_secondary_border_color']           = ARMADON_BUTTON_SECONDARY_BORDER_COLOR;
		$defaults['button_secondary_hover_background_color'] = ARMADON_BUTTON_SECONDARY_HOVER_BACKGROUND_COLOR;
		$defaults['button_secondary_hover_color']            = ARMADON_BUTTON_SECONDARY_HOVER_COLOR;
		$defaults['button_secondary_hover_border_color']     = ARMADON_BUTTON_SECONDARY_HOVER_BORDER_COLOR;
		return $defaults;
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the button.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the button.
	 *
	 * @return array           The updated array of CSS selectors for the button.
	 */
	public function add_elements( $elements ) {
		return array_merge( $elements, array(
			'.btn-selector',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the primary button.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the primary button.
	 *
	 * @return array           The updated array of CSS selectors for the primary button.
	 */
	public function add_primary_elements( $elements ) {
		return array_merge( $elements, array(
			'.btn-primary-selector',
			'.custom-control-input:checked ~ .custom-control-indicator',
			'.post-sticky',
			'.post-format',
			'.site-preheader .menu .menu-item ins',
			'.main-navigation .navbar-nav > .menu-item .sub-menu .menu-item a.btn.btn-primary',
			'.main-navigation .navbar-nav .menu-item.btn-inside > a',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the secondary button.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the primary button.
	 *
	 * @return array           The updated array of CSS selectors for the primary button.
	 */
	public function add_secondary_elements( $elements ) {
		return array_merge( $elements, array(
			'.btn-secondary-selector',
			'.main-navigation .navbar-nav > .menu-item .sub-menu .menu-item a.btn.btn-secondary',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the primary button color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the primary button color.
	 *
	 * @return array           The updated array of CSS selectors for the primary button color.
	 */
	public function add_primary_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.datepicker table tr td.active.active',
			'.datepicker table tr td.active.disabled',
			'.datepicker table tr td.active.disabled.active',
			'.datepicker table tr td.active.disabled.disabled',
			'.datepicker table tr td.active.disabled:active',
			'.datepicker table tr td.active.disabled:hover',
			'.datepicker table tr td.active:active',
			'.datepicker table tr td.active:hover',
			'.blog-posts [id^="post-"].format-quote .entry-content',
			'.archive-posts [id^="post-"].format-quote .entry-content',
			'.grimlock-query-section__posts [id^="post-"].format-quote .entry-content',
			'.search-posts [id^="post-"].format-quote .entry-content',
			'a.post-format[href]',
			'a.post-format i',
			'.entry-content > ol li::before',
			'.entry-content .entry-content__holder > ol li::before',
			'.post-tag a:hover',
			'.post-tag a:focus',
			'.post-tag a:active',
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the primary button color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the primary button color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button color.
	 */
	public function add_primary_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.form-newsletter input[type="submit"]:hover',
					'.form-newsletter input[type="submit"]:active',
					'.form-newsletter input[type="submit"]:focus',
				) ),
				'property' => 'color',
				'suffix'   => '!important',
			),
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the primary button background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the primary button background color.
	 *
	 * @return array           The updated array of CSS selectors for the primary button background color.
	 */
	public function add_primary_background_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.grimlock-section .section__title ins:after',
			'.mejs-controls .mejs-time-rail .mejs-time-current',
			'.entry-content > ol li::before',
			'.entry-content .entry-content__holder > ol li::before',
			'.post-tag a:hover',
			'.post-tag a:focus',
			'.post-tag a:active',
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the button border radius.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the primary button background color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button background color.
	 */
	public function add_border_radius_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.site-preheader .menu > .menu-item .sub-menu',
					'.main-navigation .navbar-nav > .menu-item .sub-menu',
					'.main-navigation .navbar-nav > .menu-item .sub-menu .sub-menu',
					'.main-navigation .navbar-nav > .menu-item .sub-menu .menu-item > a',
				) ),
				'property'      => 'border-radius',
				'value_pattern' => 'calc($rem / 10)',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the primary button background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the primary button background color.
	 *
	 * @return array          The updated array of CSS selectors for the primary button background color.
	 */
	public function add_primary_background_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'.infinite-loader .spinner:before',
					'.addtoany_content .addtoany_list a > span:hover',
					'.form-newsletter input.form-control:hover',
					'.form-newsletter input.form-control:focus',
					'.form-newsletter input.form-control:active',
				) ),
				'property' => 'border-color',
			),

			array(
				'element'  => implode( ',', array(
					'.form-newsletter input[type="submit"]:hover',
					'.form-newsletter input[type="submit"]:active',
					'.form-newsletter input[type="submit"]:focus',
				) ),
				'property' => 'background-color',
				'suffix'   => '!important',
			),

			array(
				'element'  => implode( ',', array(
					'.form-newsletter input[type="submit"]:hover',
					'.form-newsletter input[type="submit"]:active',
					'.form-newsletter input[type="submit"]:focus',
					'.entry-content > ol li ol > li:before',
					'.entry-content .entry-content__holder > ol li ol > li:before',
				) ),
				'property' => 'border-color',
				'suffix'   => '!important',
			),

			array(
				'element' => implode( ',', array(
					'.grimlock-section .section__title ins:before',
					'.posts-filters .posts-filter.nav a.nav-link:hover',
					'.posts-filters .posts-filter.nav a.nav-link:active',
					'.posts-filters .posts-filter.nav a.nav-link:focus',
					'.posts-filters .posts-filter.nav a.nav-link.active',
					'.posts-filters .posts-filter.nav a.nav-link.active:hover',
					'.posts-filters .posts-filter.nav a.nav-link.active:active',
					'.posts-filters .posts-filter.nav a.nav-link.active:focus',
					'.posts-filters .posts-filter.nav a.nav-link.control.active',
					'.posts-filters .posts-filter.nav a.nav-link.control.active:hover',
					'.posts-filters .posts-filter.nav a.nav-link.control.active:active',
					'.posts-filters .posts-filter.nav a.nav-link.control.active:focus',
					'.priority-nav__dropdown-toggle.is-open',
					'.priority-nav__dropdown-toggle:hover',
					'.priority-nav__dropdown-toggle:active',
					'.priority-nav__dropdown-toggle:focus',
					'.site-main > .page-header > span',
					'.bypostauthor .comment-title .fn:after',
					'.entry-content > ol li ol > li:before',
					'.entry-content .entry-content__holder > ol li ol > li:before',
				) ),
				'property' => 'color',
			),
			array(
				'element' => implode( ',', array(
					'#bbpress-forums .dropdown.dropdown-bbp-post-actions .dropdown-toggle:hover',
					'.addtoany_content .addtoany_list a > span:hover',
				) ),
				'property'      => 'box-shadow',
				'value_pattern' => '0 0 0 5px $33',
				'suffix'        => '!important',
			),
			array(
				'element' => implode( ',', array(
					'.blog-posts [id^="post-"].format-quote .card-body',
					'.archive-posts [id^="post-"].format-quote .card-body',
					'.grimlock-query-section__posts [id^="post-"].format-quote .card-body',
					'.search-posts [id^="post-"].format-quote .card-body',
					'.blog-posts [id^="post-"].format-link .card-body',
					'.archive-posts [id^="post-"].format-link .card-body',
					'.grimlock-query-section__posts [id^="post-"].format-link .card-body',
					'.search-posts [id^="post-"].format-link .card-body',
				) ),
				'property' => 'background-color',
				'suffix'   => 'e6',
			),
			array(
				'element'  => implode( ',', array(
					'.post-tag a:hover',
					'.post-tag a:focus',
					'.post-tag a:active',
				) ),
				'property' => 'border-color',
			),
		) );
	}

}

return new Armadon_Grimlock_Button_Customizer();
