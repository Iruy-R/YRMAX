<?php
/**
 * Armadon_Grimlock_Typography_Customizer Class
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
 * The typography class for the Customizer.
 */
class Armadon_Grimlock_Typography_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_typography_customizer_defaults',                             array( $this, 'change_defaults'                          ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_heading_color_outputs',                array( $this, 'add_heading_color_outputs'                ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_heading_font_outputs',                 array( $this, 'add_heading_font_outputs'                 ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_display_heading_font_elements',        array( $this, 'add_display_heading_font_elements'        ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_display_heading1_font_elements',       array( $this, 'add_display_heading1_font_elements'       ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_display_heading3_font_elements',       array( $this, 'add_display_heading3_font_elements'       ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_display_heading3_font_outputs',        array( $this, 'add_display_heading3_font_outputs'        ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_display_heading4_font_outputs',        array( $this, 'add_display_heading4_font_outputs'        ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_text_color_outputs',                   array( $this, 'add_text_color_outputs'                   ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_link_hover_color_outputs',             array( $this, 'add_link_hover_color_outputs'             ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_blockquote_color_elements',            array( $this, 'add_blockquote_color_elements'            ), 10, 1 );
		add_filter( 'grimlock_typography_customizer_blockquote_background_color_elements', array( $this, 'add_blockquote_background_color_elements' ), 10, 1 );
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
		$defaults['text_font']                       = array(
			'font-family'                            => ARMADON_FONT_FAMILY_BASE,
			'font-weight'                            => ARMADON_FONT_WEIGHT_BASE,
			'font-size'                              => ARMADON_FONT_SIZE_BASE,
			'line-height'                            => ARMADON_LINE_HEIGHT_BASE,
			'letter-spacing'                         => ARMADON_LETTER_SPACING,
			'subsets'                                => array( 'latin-ext' ),
			'text-transform'                         => ARMADON_TEXT_TRANSFORM,
		);
		$defaults['text_color']                      = ARMADON_COLOR;
		$defaults['text_selection_background_color'] = 'rgba(103, 87, 214, .28)';

		$defaults['heading_font']                    = array(
			'font-family'                            => ARMADON_HEADINGS_FONT_FAMILY,
			'font-weight'                            => ARMADON_HEADINGS_FONT_WEIGHT,
			'letter-spacing'                         => ARMADON_HEADINGS_LETTER_SPACING,
			'subsets'                                => array( 'latin-ext' ),
			'text-transform'                         => ARMADON_HEADING_TEXT_TRANSFORM,
		);
		$defaults['heading_color']                   = ARMADON_HEADINGS_COLOR;

		$defaults['heading1_font']                   = array(
			'font-size'                              => ARMADON_HEADING1_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['heading2_font']                   = array(
			'font-size'                              => ARMADON_HEADING2_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['heading3_font']                   = array(
			'font-size'                              => ARMADON_HEADING3_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['heading4_font']                   = array(
			'font-size'                              => ARMADON_HEADING4_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['heading5_font']                   = array(
			'font-size'                              => ARMADON_HEADING5_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['heading6_font']                   = array(
			'font-size'                              => ARMADON_HEADING6_FONT_SIZE,
			'line-height'                            => ARMADON_HEADINGS_LINE_HEIGHT,
		);
		$defaults['display_heading_font']            = array(
			'font-family'                            => ARMADON_DISPLAY_HEADINGS_FONT_FAMILY,
			'font-weight'                            => ARMADON_DISPLAY_HEADINGS_FONT_WEIGHT,
			'letter-spacing'                         => ARMADON_DISPLAY_HEADINGS_LETTER_SPACING,
			'subsets'                                => array( 'latin-ext' ),
			'text-transform'                         => ARMADON_DISPLAY_HEADINGS_TEXT_TRANSFORM,
		);
		$defaults['display_heading_color']           = ARMADON_DISPLAY_HEADINGS_COLOR;

		$defaults['display_heading1_font']           = array(
			'font-size'                              => ARMADON_DISPLAY_HEADINGS1_FONT_SIZE,
			'line-height'                            => ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT,
		);
		$defaults['display_heading2_font']           = array(
			'font-size'                              => ARMADON_DISPLAY_HEADINGS2_FONT_SIZE,
			'line-height'                            => ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT,
		);
		$defaults['display_heading3_font']           = array(
			'font-size'                              => ARMADON_DISPLAY_HEADINGS3_FONT_SIZE,
			'line-height'                            => ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT,
		);
		$defaults['display_heading4_font']           = array(
			'font-size'                              => ARMADON_DISPLAY_HEADINGS4_FONT_SIZE,
			'line-height'                            => ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT,
		);
		$defaults['subheading_font']                 = array(
			'font-family'                            => ARMADON_SUBHEADING_FONT_FAMILY,
			'font-weight'                            => ARMADON_SUBHEADING_FONT_WEIGHT,
			'font-style'                             => ARMADON_SUBHEADING_FONT_STYLE,
			'font-size'                              => ARMADON_SUBHEADING_FONT_SIZE,
			'line-height'                            => ARMADON_SUBHEADING_LINE_HEIGHT,
			'letter-spacing'                         => ARMADON_SUBHEADING_LETTER_SPACING,
			'subsets'                                => array( 'latin-ext' ),
			'text-transform'                         => ARMADON_SUBHEADING_TEXT_TRANSFORM,
		);
		$defaults['subheading_color']                = ARMADON_SUBHEADINGS_COLOR;

		$defaults['link_color']                      = ARMADON_LINK_COLOR;
		$defaults['link_hover_color']                = ARMADON_LINK_HOVER_COLOR;

		$defaults['blockquote_font']                 = array(
			'font-family'                            => ARMADON_DISPLAY_HEADINGS_FONT_FAMILY,
			'font-weight'                            => ARMADON_FONT_WEIGHT_BASE,
			'font-size'                              => '1.6rem',
			'line-height'                            => ARMADON_LINE_HEIGHT_BASE,
			'letter-spacing'                         => ARMADON_LETTER_SPACING,
			'subsets'                                => array( 'latin-ext' ),
			'text-transform'                         => ARMADON_TEXT_TRANSFORM,
			'text-align'                             => 'left',
		);
		$defaults['blockquote_color']                = '#ffffff';
		$defaults['blockquote_background_color']     = ARMADON_BRAND_PRIMARY;
		$defaults['blockquote_icon_color']           = '#ffffff';
		$defaults['blockquote_border_color']         = ARMADON_BRAND_PRIMARY_HOVER;
		$defaults['blockquote_margin']               = 3; // rem.
		return $defaults;
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the heading color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the heading color.
	 *
	 * @return array          The updated array of CSS selectors for the heading color.
	 */
	public function add_heading_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.page-template-template-minimal .site-content article.page > .entry-header .entry-title:after',
					'.page-template-template-minimal .site-content article.page > .entry-header .entry-page:after',
					'.minimal-title .entry-title:after',
					'hr.hr-vertical',
				) ),
				'property' => 'background-color',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the heading font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the heading font.
	 *
	 * @return array          The updated array of CSS selectors for the heading font.
	 */
	public function add_heading_font_outputs( $outputs ) {

		$elements_headings = array(
			'.nav-register a',
			'.entry-meta',
			'.posts-filters .posts-filter',
		);

		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', $elements_headings ),
				'property' => 'font-family',
				'choice'   => 'font-family',
			),
			array(
				'element'  => implode( ',', $elements_headings ),
				'property' => 'text-transform',
				'choice'   => 'text-transform',
			),
			array(
				'element'  => implode( ',', $elements_headings ),
				'property' => 'font-weight',
				'choice'   => 'font-weight',
			),
			array(
				'element'  => implode( ',', $elements_headings ),
				'property' => 'font-style',
				'choice'   => 'font-style',
			),
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the display heading font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the display heading font.
	 *
	 * @return array           The updated array of CSS selectors for the display heading font.
	 */
	public function add_display_heading_font_elements( $elements ) {
		return array_merge( $elements, array(
			'#primary > #main > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
			'#before_content > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
			'#after_content > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
			'.page-template-template-minimal .site-content article.page > .entry-header .entry-title, .minimal-title .entry-title',
			'.page-template-template-minimal .site-content article.page > .entry-header .entry-title, .minimal-title .page-title',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the display heading 1 font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the display heading 1 font.
	 *
	 * @return array           The updated array of CSS selectors for the display heading 1 font.
	 */
	public function add_display_heading1_font_elements( $elements ) {
		return array_merge( $elements, array(
			'.page-template-template-minimal .site-content article.page > .entry-header .entry-title, .minimal-title .entry-title',
			'.page-template-template-minimal .site-content article.page > .entry-header .entry-title, .minimal-title .page-title',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the display heading 3 font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the display heading 3 font.
	 *
	 * @return array           The updated array of CSS selectors for the display heading 3 font.
	 */
	public function add_display_heading3_font_elements( $elements ) {
		return array_merge( $elements, array(
			'#primary > #main > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
			'#before_content > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
			'#after_content > .widget-area .widget:not([class*="widget_grimlock_"]) .widget-title',
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the heading 3 font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the heading font.
	 *
	 * @return array          The updated array of CSS selectors for the heading font.
	 */
	public function add_display_heading3_font_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.page-template-template-minimal .site-content article.page > .entry-header .entry-title',
					'.page-template-template-minimal .site-content article.page > .entry-header .page-title',
					'.minimal-title .entry-title',
				) ),
				'property'    => 'font-size',
				'media_query' => '@media (max-width: 768px)',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the heading 4 font.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the heading font.
	 *
	 * @return array          The updated array of CSS selectors for the heading font.
	 */
	public function add_display_heading4_font_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'[class*="posts--4-4-4"] h2.entry-title',
					'[class*="posts--3-3-3-3"] h2.entry-title',
				) ),
				'property' => 'font-size',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the text.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the heading font.
	 *
	 * @return array          The updated array of CSS selectors for the heading font.
	 */
	public function add_text_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.addtoany_content .addtoany_list a > span svg path',
					'.addtoany_content .addtoany_list a > span svg g',
				) ),
				'property' => 'fill',
				'suffix'   => ' !important',
			),
			array(
				'element'  => implode( ',', array(
					'.post-tag a',
					'.form-newsletter input.form-control',
					'.form-newsletter input[type="submit"]',
				) ),
				'property' => 'border-color',
				'suffix'   => ' !important',
			),
			array(
				'element'  => implode( ',', array(
					'.site-main > .page-header > *:last-child:after',
					'.page .site-main > [id^="post-"] > header > *:last-child:after',
					'#secondary-left .widget .widget-title:after',
					'#secondary-right .widget .widget-title:after',
					'.cross-sells > h2:after',
					'.up-sells > h2:after',
					'.related.products > h2:after',
					'span#reply-title:after',
					'.related-title:after',
				) ),
				'property'      => 'background-image',
				'value_pattern' => 'radial-gradient($ 15%, transparent 16%), radial-gradient($ 15%, transparent 16%)',
			),
			array(
				'element' => implode( ',', array(
					'.bs-tooltip-top .arrow::before',
					'.bs-tooltip-auto[x-placement^="top"] .arrow::before',
				) ),
				'property'    => 'border-top-color',
			),

		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the link hover.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the link hover.
	 *
	 * @return array          The updated array of CSS selectors for the link hover.
	 */
	public function add_link_hover_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element' => implode( ',', array(
					'body.single.single-post #content [id^="post-"] > .entry-content p > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
					'body.single.single-post #content [id^="post-"] > .entry-content ul > li > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
					'body.single.single-post #content [id^="post-"] > .entry-content ol > li > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
					'body.page #content [id^="post-"] .entry-content > p > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
					'body.page #content [id^="post-"] .entry-content > ul > li > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
					'body.page #content [id^="post-"] .entry-content > ol > li > a:not([class*="button"]):not([class*="btn"]):not(.more-link)',
				) ),
				'property'      => 'background-image',
				'value_pattern' => 'linear-gradient(transparent calc(100% - 2px), $ 0), linear-gradient(transparent calc(100% - 2px), $ 0)',
			),
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the text color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the text color.
	 *
	 * @return array           The updated array of CSS selectors for the text color.
	 */
	public function add_blockquote_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.wp-block-pullquote:not(.is-style-solid-color) blockquote:not(.has-text-color)',
		) );
	}

	/**
	 * Add CSS selectors to the array of CSS selectors for the text color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the text color.
	 *
	 * @return array           The updated array of CSS selectors for the text color.
	 */
	public function add_blockquote_background_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.wp-block-pullquote:not(.is-style-solid-color) blockquote:not(.has-text-color)',
		) );
	}

}

return new Armadon_Grimlock_Typography_Customizer();
