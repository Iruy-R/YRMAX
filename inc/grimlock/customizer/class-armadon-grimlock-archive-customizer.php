<?php
/**
 * Armadon_Grimlock_Archive_Customizer Class
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
 * The post archive page class for the Customizer.
 */
class Armadon_Grimlock_Archive_Customizer {
	/**
	 * Setup class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'grimlock_archive_customizer_defaults',                              array( $this, 'change_defaults'                          ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_thumbnail_size',                   array( $this, 'change_post_thumbnail_size'               ), 10, 2 );
		add_filter( 'grimlock_archive_customizer_post_background_color_elements',        array( $this, 'add_post_background_color_elements'       ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_color_elements',                   array( $this, 'add_post_color_elements'                  ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_padding_outputs',                  array( $this, 'add_post_padding_outputs'                 ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_border_color_outputs',             array( $this, 'add_post_border_color_outputs'            ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_border_radius_elements',           array( $this, 'add_post_border_radius_elements'          ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_title_color_elements',             array( $this, 'add_post_title_color_elements'            ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_link_color_elements',              array( $this, 'add_post_link_color_elements'             ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_link_color_outputs',               array( $this, 'add_post_link_color_outputs'              ), 10, 1 );
		add_filter( 'grimlock_archive_customizer_post_link_hover_color_elements',        array( $this, 'add_post_link_hover_color_elements'       ), 10, 1 );
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

		$defaults['archive_custom_header_displayed']        = true;
		$defaults['archive_custom_header_layout']           = ARMADON_ARCHIVE_CUSTOM_HEADER_LAYOUT;
		$defaults['archive_custom_header_container_layout'] = ARMADON_ARCHIVE_CUSTOM_HEADER_CONTAINER_LAYOUT;

		$defaults['archive_post_tag_terms_displayed']       = false;
		$defaults['archive_category_terms_displayed']       = true;
		$defaults['archive_post_format_terms_displayed']    = false;
		$defaults['archive_post_date_displayed']            = true;
		$defaults['archive_post_author_displayed']          = true;
		$defaults['archive_post_more_link_displayed']       = true;
		$defaults['archive_post_tag_displayed']             = true;
		$defaults['archive_category_displayed']             = true;
		$defaults['archive_post_format_displayed']          = true;
		$defaults['archive_post_thumbnail_displayed']       = true;
		$defaults['archive_post_content_displayed']         = false;
		$defaults['archive_post_excerpt_displayed']         = true;
		$defaults['archive_comments_link_displayed']        = true;

		$defaults['archive_post_padding']                   = ARMADON_CARD_PADDING; // px.
		$defaults['archive_post_margin']                    = ARMADON_CARD_MARGIN; // px.
		$defaults['archive_post_background_color']          = ARMADON_CARD_BACKGROUND;
		$defaults['archive_post_border_radius']             = ARMADON_CARD_BORDER_RADIUS;
		$defaults['archive_post_thumbnail_border_radius']   = ARMADON_CARD_BORDER_RADIUS;
		$defaults['archive_post_border_width']              = ARMADON_CARD_BORDER_WIDTH;
		$defaults['archive_post_border_color']              = ARMADON_CARD_BORDER_COLOR;

		$defaults['archive_post_box_shadow_x_offset']       = ARMADON_BOX_SHADOW_X_OFFSET;
		$defaults['archive_post_box_shadow_y_offset']       = ARMADON_BOX_SHADOW_Y_OFFSET;
		$defaults['archive_post_box_shadow_blur_radius']    = ARMADON_BOX_SHADOW_BLUR_RADIUS;
		$defaults['archive_post_box_shadow_spread_radius']  = ARMADON_BOX_SHADOW_SPREAD_RADIUS;
		$defaults['archive_post_box_shadow_color']          = ARMADON_BOX_SHADOW_COLOR;

		$defaults['archive_post_color']                     = ARMADON_CARD_COLOR;
		$defaults['archive_post_title_color']               = ARMADON_CARD_TITLE_COLOR;
		$defaults['archive_post_link_color']                = ARMADON_CARD_LINK_COLOR;
		$defaults['archive_post_link_hover_color']          = ARMADON_CARD_LINK_HOVER_COLOR;

		$defaults['archive_layout']                         = ARMADON_ARCHIVE_LAYOUT;
		$defaults['archive_container_layout']               = ARMADON_ARCHIVE_CONTAINER_LAYOUT;
		$defaults['archive_posts_layout']                   = ARMADON_ARCHIVE_POSTS_LAYOUT;
		$defaults['archive_posts_height_equalized']         = ARMADON_ARCHIVE_POSTS_HEIGHT_EQUALIZED;

		$defaults['archive_custom_header_padding_y']        = ARMADON_HEADER_PADDING_Y;
		$defaults['archive_content_padding_y']              = ARMADON_CONTENT_PADDING_Y;

		return $defaults;
	}

	/**
	 * Change default post thumbnail sizes for the archive.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $size         The size for the post thumbnail.
	 * @param  string $posts_layout The layout for the archive posts.
	 *
	 * @return string               The updated size for the post thumbnail.
	 */
	public function change_post_thumbnail_size( $size, $posts_layout ) {
		return "thumbnail-{$posts_layout}";
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post background color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post background color.
	 *
	 * @return array           The updated array of CSS selectors for the archive post background color.
	 */
	public function add_post_background_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.card .card-body',
			'.card .card-body:before',
			'.card .card-body:after',
			'.has-post-thumbnail .card .card-body:before',
			'.has-post-thumbnail .card .card-body:after',
			'.post.type-post .card .card-body:before',
			'.post.type-post .card .card-body:after',
			'.list-group-item',
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post color.
	 *
	 * @return array           The updated array of CSS selectors for the archive post color.
	 */
	public function add_post_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.card',
			'.list-group-item',
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the archive post padding.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the archive post padding.
	 *
	 * @return array          The updated array of CSS selectors for the archive post padding.
	 */
	public function add_post_padding_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.card .card-footer',
				) ),
				'property' => 'padding-left',
				'units'    => 'px',

			),
			array(
				'element'  => implode( ',', array(
					'.card .card-footer',
				) ),
				'property' => 'padding-right',
				'units'    => 'px',
			),
		) );
	}

	/**
	 * Add selectors and properties to the CSS rule-set for the archive post border color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors and properties for the archive post border color.
	 *
	 * @return array          The updated array of CSS selectors for the archive post border color.
	 */
	public function add_post_border_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.card .card-footer',
				) ),
				'property' => 'border-top-color',
			),
			array(
				'element'  => implode( ',', array(
					'.modal .modal-header',
				) ),
				'property' => 'border-bottom-color',
			),
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post border radius.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post border radius.
	 *
	 * @return array           The updated array of CSS selectors for the archive post border radius.
	 */
	public function add_post_border_radius_elements( $elements ) {
		return array_merge( $elements, array(
			'.card .card-body',
			'.card .card-media',
			'.widget.popular-posts ul li img',
			'.sidebar .grimlock-section',
			'.rounded',
			'.flex-control-thumbs li img',
			'.single #content.region--9-3-cols-left #collapseComments',
			'.single #content.region--3-9-cols-left #collapseComments',
			'.wp-block-embed-instagram',
			'.wp-block-embed-twitter',
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post title color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post title color.
	 *
	 * @return array           The updated array of CSS selectors for the archive post title color.
	 */
	public function add_post_title_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.card .entry-title',
			'.card h1',
			'.card h2',
			'.card h3',
			'.card h4',
			'.card h5',
			'.card h6',
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post link color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post link color.
	 *
	 * @return array           The updated array of CSS selectors for the archive post link color.
	 */
	public function add_post_link_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.card .entry-summary a:not(.btn):not(.button):not([rel="tag"])',
			'.card .entry-footer a:not(.btn):not(.button):not([rel="tag"])',
			'.card .entry-content a:not(.btn):not(.button):not([rel="tag"])',
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post link color.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $outputs The array of CSS selectors for the archive post link color.
	 *
	 * @return array           The updated array of CSS selectors for the archive post link color.
	 */
	public function add_post_link_color_outputs( $outputs ) {
		return array_merge( $outputs, array(
			array(
				'element'  => implode( ',', array(
					'.post-tag a',
				) ),
				'property' => 'color',
			),
			array(
				'element'  => implode( ',', array(
					'.post-tag a',
				) ),
				'property' => 'border-color',
				/*'suffix'   => '',*/
			),
		) );
	}

	/**
	 * Add CSS selectors from the array of CSS selectors for the archive post link color on hover.
	 *
	 * @since 1.0.0
	 *
	 * @param  array $elements The array of CSS selectors for the archive post link color on hover.
	 *
	 * @return array           The updated array of CSS selectors for the archive post link color on hover.
	 */
	public function add_post_link_hover_color_elements( $elements ) {
		return array_merge( $elements, array(
			'.card .entry-summary a:not(.btn):not(.button):not([rel="tag"]):hover',
			'.card .entry-footer a:not(.btn):not(.button):not([rel="tag"]):hover',
			'.card .entry-content a:not(.btn):not(.button):not([rel="tag"]):hover',
			'.card .card-body h2.card-body-title a:hover',
		) );
	}

}

return new Armadon_Grimlock_Archive_Customizer();
