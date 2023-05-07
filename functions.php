<?php
/**
 * Armadon functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package armadon
 */

define( 'ARMADON_VERSION', '1.1.1' );


/**
 * Base
 */

if ( ! defined( 'ARMADON_SITE_IDENTITY_CUSTOM_LOGO_SIZE' ) ) {
	define( 'ARMADON_SITE_IDENTITY_CUSTOM_LOGO_SIZE', 145 );
}

if ( ! defined( 'ARMADON_BORDER_RADIUS' ) ) {
	define( 'ARMADON_BORDER_RADIUS', 0.5 );
}

if ( ! defined( 'ARMADON_BORDER_WIDTH' ) ) {
	define( 'ARMADON_BORDER_WIDTH', 1 );
}



/**
 * Colors
 */

if ( ! defined( 'ARMADON_GRAY_DARKEST' ) ) {
	define( 'ARMADON_GRAY_DARKEST', '#1B1A23' );
}

if ( ! defined( 'ARMADON_GRAY_DARKER' ) ) {
	define( 'ARMADON_GRAY_DARKER', '#211F2A' );
}

if ( ! defined( 'ARMADON_GRAY_DARK' ) ) {
	define( 'ARMADON_GRAY_DARK', '#242731' );
}

if ( ! defined( 'ARMADON_GRAY' ) ) {
	define( 'ARMADON_GRAY', '#808191' );
}

if ( ! defined( 'ARMADON_GRAY_LIGHT' ) ) {
	define( 'ARMADON_GRAY_LIGHT', '#BFC0C4' );
}

if ( ! defined( 'ARMADON_GRAY_LIGHTER' ) ) {
	define( 'ARMADON_GRAY_LIGHTER', '#DDDFE7' );
}

if ( ! defined( 'ARMADON_GRAY_LIGHTEST' ) ) {
	define( 'ARMADON_GRAY_LIGHTEST', '#F1F2F8' );
}

if ( ! defined( 'ARMADON_FADED' ) ) {
	define( 'ARMADON_FADED', 'rgba(242, 244, 255, .04)' );
}

if ( ! defined( 'ARMADON_BRAND_SUCCESS' ) ) {
	define( 'ARMADON_BRAND_SUCCESS', '#22AD7C' );
}

if ( ! defined( 'ARMADON_BRAND_INFO' ) ) {
	define( 'ARMADON_BRAND_INFO', '#3CBDC2' );
}

if ( ! defined( 'ARMADON_BRAND_WARNING' ) ) {
	define( 'ARMADON_BRAND_WARNING', '#CCAD70' );
}

if ( ! defined( 'ARMADON_BRAND_DANGER' ) ) {
	define( 'ARMADON_BRAND_DANGER', '#7c6996' );
}

if ( ! defined( 'ARMADON_BRAND_PRIMARY' ) ) {
	define( 'ARMADON_BRAND_PRIMARY', '#6757D6' );
}

if ( ! defined( 'ARMADON_BRAND_PRIMARY_HOVER' ) ) {
	define( 'ARMADON_BRAND_PRIMARY_HOVER', '#5644ca' );
}

if ( ! defined( 'ARMADON_BRAND_SECONDARY' ) ) {
	define( 'ARMADON_BRAND_SECONDARY', '#DF204D' );
}

if ( ! defined( 'ARMADON_BRAND_SECONDARY_HOVER' ) ) {
	define( 'ARMADON_BRAND_SECONDARY_HOVER', '#C5163F' );
}

if ( ! defined( 'ARMADON_BODY_COLOR' ) ) {
	define( 'ARMADON_BODY_COLOR', ARMADON_GRAY_LIGHT );
}

if ( ! defined( 'ARMADON_BODY_BACKGROUND' ) ) {
	define( 'ARMADON_BODY_BACKGROUND', ARMADON_GRAY_DARKER );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE', get_stylesheet_directory_uri() . '/assets/images/body.png' );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE_REPEAT' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE_REPEAT', 'no-repeat' );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE_POSITION_X' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE_POSITION_X', 'center' );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE_POSITION_Y' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE_POSITION_Y', 'top' );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE_ATTACHMENT' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE_ATTACHMENT', 'scroll' );
}

if ( ! defined( 'ARMADON_BACKGROUND_IMAGE_SIZE' ) ) {
	define( 'ARMADON_BACKGROUND_IMAGE_SIZE', 'auto' );
}

if ( ! defined( 'ARMADON_LINK_COLOR' ) ) {
	define( 'ARMADON_LINK_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_LINK_HOVER_COLOR', ARMADON_BRAND_PRIMARY_HOVER );
}


/**
 * Typography
 */

if ( ! defined( 'ARMADON_FONT_FAMILY_BASE' ) ) {
	define( 'ARMADON_FONT_FAMILY_BASE', 'Barlow' );
}

if ( ! defined( 'ARMADON_FONT_WEIGHT_BASE' ) ) {
	define( 'ARMADON_FONT_WEIGHT_BASE', '400' );
}

if ( ! defined( 'ARMADON_FONT_SIZE_BASE' ) ) {
	define( 'ARMADON_FONT_SIZE_BASE', '1rem' );
}

if ( ! defined( 'ARMADON_LINE_HEIGHT_BASE' ) ) {
	define( 'ARMADON_LINE_HEIGHT_BASE', '1.6' );
}

if ( ! defined( 'ARMADON_LETTER_SPACING' ) ) {
	define( 'ARMADON_LETTER_SPACING', '0px' );
}

if ( ! defined( 'ARMADON_TEXT_TRANSFORM' ) ) {
	define( 'ARMADON_TEXT_TRANSFORM', 'none' );
}

if ( ! defined( 'ARMADON_COLOR' ) ) {
	define( 'ARMADON_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_HEADINGS_FONT_FAMILY' ) ) {
	define( 'ARMADON_HEADINGS_FONT_FAMILY', ARMADON_FONT_FAMILY_BASE );
}

if ( ! defined( 'ARMADON_HEADINGS_FONT_WEIGHT' ) ) {
	define( 'ARMADON_HEADINGS_FONT_WEIGHT', '700' );
}

if ( ! defined( 'ARMADON_HEADINGS_LETTER_SPACING' ) ) {
	define( 'ARMADON_HEADINGS_LETTER_SPACING', '0px' );
}

if ( ! defined( 'ARMADON_HEADING_TEXT_TRANSFORM' ) ) {
	define( 'ARMADON_HEADING_TEXT_TRANSFORM', 'none' );
}

if ( ! defined( 'ARMADON_HEADINGS_COLOR' ) ) {
	define( 'ARMADON_HEADINGS_COLOR', '#ffffff' );
}

if ( ! defined( 'ARMADON_HEADING1_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING1_FONT_SIZE', '2.25rem' );
}

if ( ! defined( 'ARMADON_HEADING2_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING2_FONT_SIZE', '1.875rem' );
}

if ( ! defined( 'ARMADON_HEADING3_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING3_FONT_SIZE', '1.5rem' );
}

if ( ! defined( 'ARMADON_HEADING4_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING4_FONT_SIZE', '1.25rem' );
}

if ( ! defined( 'ARMADON_HEADING5_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING5_FONT_SIZE', '1.125rem' );
}

if ( ! defined( 'ARMADON_HEADING6_FONT_SIZE' ) ) {
	define( 'ARMADON_HEADING6_FONT_SIZE', '1rem' );
}

if ( ! defined( 'ARMADON_HEADINGS_LINE_HEIGHT' ) ) {
	define( 'ARMADON_HEADINGS_LINE_HEIGHT', '1.25' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_FONT_FAMILY' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_FONT_FAMILY', ARMADON_FONT_FAMILY_BASE );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_FONT_WEIGHT' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_FONT_WEIGHT', '900' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_LETTER_SPACING' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_LETTER_SPACING', '0px' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_TEXT_TRANSFORM' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_TEXT_TRANSFORM', 'uppercase' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_COLOR' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_COLOR', ARMADON_HEADINGS_COLOR );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS1_FONT_SIZE' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS1_FONT_SIZE', '4rem' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS2_FONT_SIZE' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS2_FONT_SIZE', '3.1rem' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS3_FONT_SIZE' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS3_FONT_SIZE', '2rem' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS4_FONT_SIZE' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS4_FONT_SIZE', '1.4rem' );
}

if ( ! defined( 'ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT' ) ) {
	define( 'ARMADON_DISPLAY_HEADINGS_LINE_HEIGHT', '1.15' );
}

if ( ! defined( 'ARMADON_SUBHEADING_FONT_FAMILY' ) ) {
	define( 'ARMADON_SUBHEADING_FONT_FAMILY', ARMADON_HEADINGS_FONT_FAMILY );
}

if ( ! defined( 'ARMADON_SUBHEADING_FONT_WEIGHT' ) ) {
	define( 'ARMADON_SUBHEADING_FONT_WEIGHT', '600' );
}

if ( ! defined( 'ARMADON_SUBHEADING_FONT_STYLE' ) ) {
	define( 'ARMADON_SUBHEADING_FONT_STYLE', 'italic' );
}

if ( ! defined( 'ARMADON_SUBHEADING_FONT_SIZE' ) ) {
	define( 'ARMADON_SUBHEADING_FONT_SIZE', '1.15rem' );
}

if ( ! defined( 'ARMADON_SUBHEADING_LINE_HEIGHT' ) ) {
	define( 'ARMADON_SUBHEADING_LINE_HEIGHT', '1.35' );
}

if ( ! defined( 'ARMADON_SUBHEADING_LETTER_SPACING' ) ) {
	define( 'ARMADON_SUBHEADING_LETTER_SPACING', '0px' );
}

if ( ! defined( 'ARMADON_SUBHEADING_TEXT_TRANSFORM' ) ) {
	define( 'ARMADON_SUBHEADING_TEXT_TRANSFORM', 'uppercase' );
}

if ( ! defined( 'ARMADON_SUBHEADINGS_COLOR' ) ) {
	define( 'ARMADON_SUBHEADINGS_COLOR', ARMADON_BRAND_SECONDARY );
}


/**
 * Buttons
 */

if ( ! defined( 'ARMADON_BUTTON_FONT_WEIGHT' ) ) {
	define( 'ARMADON_BUTTON_FONT_WEIGHT', '700' );
}

if ( ! defined( 'ARMADON_BUTTON_FONT_SIZE' ) ) {
	define( 'ARMADON_BUTTON_FONT_SIZE', '15px' );
}

if ( ! defined( 'ARMADON_BUTTON_LINE_HEIGHT' ) ) {
	define( 'ARMADON_BUTTON_LINE_HEIGHT', '1.25rem' );
}

if ( ! defined( 'ARMADON_BUTTON_LETTER_SPACING' ) ) {
	define( 'ARMADON_BUTTON_LETTER_SPACING', '0' );
}

if ( ! defined( 'ARMADON_BUTTON_TEXT_TRANSFORM' ) ) {
	define( 'ARMADON_BUTTON_TEXT_TRANSFORM', 'uppercase' );
}

if ( ! defined( 'ARMADON_BUTTON_BORDER_RADIUS' ) ) {
	define( 'ARMADON_BUTTON_BORDER_RADIUS', ARMADON_BORDER_RADIUS );
}

if ( ! defined( 'ARMADON_BUTTON_BORDER_WIDTH' ) ) {
	define( 'ARMADON_BUTTON_BORDER_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_BUTTON_PADDING_Y' ) ) {
	define( 'ARMADON_BUTTON_PADDING_Y', 1 );
}

if ( ! defined( 'ARMADON_BUTTON_PADDING_X' ) ) {
	define( 'ARMADON_BUTTON_PADDING_X', 2 );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_BACKGROUND_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_COLOR', '#FFFFFF' );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_BORDER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_BORDER_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_HOVER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_HOVER_BACKGROUND_COLOR', ARMADON_BRAND_PRIMARY_HOVER );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_HOVER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_HOVER_COLOR', ARMADON_BUTTON_PRIMARY_COLOR );
}

if ( ! defined( 'ARMADON_BUTTON_PRIMARY_HOVER_BORDER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_PRIMARY_HOVER_BORDER_COLOR', ARMADON_BRAND_PRIMARY_HOVER );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_BACKGROUND_COLOR', ARMADON_BRAND_SECONDARY  );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_COLOR', '#ffffff' );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_BORDER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_BORDER_COLOR', ARMADON_BRAND_SECONDARY );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_HOVER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_HOVER_BACKGROUND_COLOR', ARMADON_BRAND_SECONDARY_HOVER );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_HOVER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_HOVER_COLOR', '#FFFFFF' );
}

if ( ! defined( 'ARMADON_BUTTON_SECONDARY_HOVER_BORDER_COLOR' ) ) {
	define( 'ARMADON_BUTTON_SECONDARY_HOVER_BORDER_COLOR', ARMADON_BRAND_SECONDARY_HOVER );
}


/**
 * Sections
 */

if ( ! defined( 'ARMADON_SECTION_PADDING_Y' ) ) {
	define( 'ARMADON_SECTION_PADDING_Y', 7 );
}

if ( ! defined( 'ARMADON_SECTION_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_SECTION_BACKGROUND_COLOR', 'rgba(0, 0, 0, 0)' );
}


/** 404 */
if ( ! defined( 'ARMADON_404_PADDING_Y' ) ) {
	define( 'ARMADON_404_PADDING_Y', 10 );
}

if ( ! defined( 'ARMADON_404_FULL_SCREEN_DISPLAYED' ) ) {
	define( 'ARMADON_404_FULL_SCREEN_DISPLAYED', true );
}

if ( ! defined( 'ARMADON_404_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_404_BACKGROUND_COLOR', 'rgba(27,26,35,0.55)' );
}

if ( ! defined( 'ARMADON_404_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_404_BACKGROUND_IMAGE', get_stylesheet_directory_uri() . '/assets/images/pages/page-404.jpg' );
}

if ( ! defined( 'ARMADON_404_THUMBNAIL' ) ) {
	define( 'ARMADON_404_THUMBNAIL', '' );
}


/**
 * Preheader
 */

if ( ! defined( 'ARMADON_PREHEADER_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_PREHEADER_BACKGROUND_IMAGE', '' );
}

if ( ! defined( 'ARMADON_PREHEADER_LAYOUT' ) ) {
	define( 'ARMADON_PREHEADER_LAYOUT', '6-6-cols-left-right' );
}

if ( ! defined( 'ARMADON_PREHEADER_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_PREHEADER_CONTAINER_LAYOUT', 'fluid' );
}

if ( ! defined( 'ARMADON_PREHEADER_PADDING_Y' ) ) {
	define( 'ARMADON_PREHEADER_PADDING_Y', 0 ); // %
}

if ( ! defined( 'ARMADON_PREHEADER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_BACKGROUND_COLOR', '#14141A' );
}

if ( ! defined( 'ARMADON_PREHEADER_HEADING_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_HEADING_COLOR', ARMADON_HEADINGS_COLOR );
}

if ( ! defined( 'ARMADON_PREHEADER_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_PREHEADER_LINK_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_LINK_COLOR', ARMADON_LINK_COLOR );
}

if ( ! defined( 'ARMADON_PREHEADER_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_LINK_HOVER_COLOR', ARMADON_LINK_HOVER_COLOR );
}

if ( ! defined( 'ARMADON_PREHEADER_BORDER_TOP_WIDTH' ) ) {
	define( 'ARMADON_PREHEADER_BORDER_TOP_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_PREHEADER_BORDER_TOP_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_BORDER_TOP_COLOR', ARMADON_GRAY_LIGHTER );
}

if ( ! defined( 'ARMADON_PREHEADER_BORDER_BOTTOM_WIDTH' ) ) {
	define( 'ARMADON_PREHEADER_BORDER_BOTTOM_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_PREHEADER_BORDER_BOTTOM_COLOR' ) ) {
	define( 'ARMADON_PREHEADER_BORDER_BOTTOM_COLOR', ARMADON_GRAY_LIGHTER );
}


/**
 * Pages
 */

if ( ! defined( 'ARMADON_PAGE_CUSTOM_HEADER_DISPLAYED' ) ) {
	define( 'ARMADON_PAGE_CUSTOM_HEADER_DISPLAYED', true );
}


/**
 * Header
 */

if ( ! defined( 'ARMADON_BIG_HEADER_PADDING_Y' ) ) {
	define( 'ARMADON_BIG_HEADER_PADDING_Y', 8 );
}

if ( ! defined( 'ARMADON_HEADER_PADDING_Y' ) ) {
	define( 'ARMADON_HEADER_PADDING_Y', 6 );
}

if ( ! defined( 'ARMADON_HEADER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_HEADER_BACKGROUND_COLOR', 'rgba(122, 39, 255, .45)' );
}

if ( ! defined( 'ARMADON_HEADER_BORDER_COLOR' ) ) {
	define( 'ARMADON_HEADER_BORDER_COLOR', ARMADON_GRAY_DARKER );
}

if ( ! defined( 'ARMADON_HEADER_BORDER_TOP_WIDTH' ) ) {
	define( 'ARMADON_HEADER_BORDER_TOP_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_HEADER_BORDER_BOTTOM_WIDTH' ) ) {
	define( 'ARMADON_HEADER_BORDER_BOTTOM_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_HEADER_TITLE_COLOR' ) ) {
	define( 'ARMADON_HEADER_TITLE_COLOR', '#FFFFFF' );
}

if ( ! defined( 'ARMADON_HEADER_SUBTITLE_COLOR' ) ) {
	define( 'ARMADON_HEADER_SUBTITLE_COLOR', 'rgba(255, 255, 255, 0.87)' );
}

if ( ! defined( 'ARMADON_HEADER_LINK_COLOR' ) ) {
	define( 'ARMADON_HEADER_LINK_COLOR', 'rgba(255, 255, 255, 0.87)' );
}

if ( ! defined( 'ARMADON_HEADER_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_HEADER_LINK_HOVER_COLOR', '#FFFFFF' );
}


/**
 * Content
 */

if ( ! defined( 'ARMADON_CONTENT_PADDING_Y' ) ) {
	define( 'ARMADON_CONTENT_PADDING_Y', 3 );
}

if ( ! defined( 'ARMADON_CONTENT_BACKGROUND' ) ) {
	define( 'ARMADON_CONTENT_BACKGROUND', 'rgba(33, 31, 42, .1)' );
}

if ( ! defined( 'ARMADON_CONTENT_LAYOUT' ) ) {
	define( 'ARMADON_CONTENT_LAYOUT', 'classic' );
}


/**
 * Cards
 */

if ( ! defined( 'ARMADON_CARD_BACKGROUND' ) ) {
	define( 'ARMADON_CARD_BACKGROUND', '#252836' );
}

if ( ! defined( 'ARMADON_CARD_PADDING' ) ) {
	define( 'ARMADON_CARD_PADDING', 20 );
}

if ( ! defined( 'ARMADON_CARD_MARGIN' ) ) {
	define( 'ARMADON_CARD_MARGIN', 20 );
}

if ( ! defined( 'ARMADON_CARD_BORDER_RADIUS' ) ) {
	define( 'ARMADON_CARD_BORDER_RADIUS', .5 );
}

if ( ! defined( 'ARMADON_CARD_BORDER_WIDTH' ) ) {
	define( 'ARMADON_CARD_BORDER_WIDTH', 1 );
}

if ( ! defined( 'ARMADON_CARD_BORDER_COLOR' ) ) {
	define( 'ARMADON_CARD_BORDER_COLOR', '#292D3D' );
}

if ( ! defined( 'ARMADON_BOX_SHADOW_X_OFFSET' ) ) {
	define( 'ARMADON_BOX_SHADOW_X_OFFSET', 0 );
}

if ( ! defined( 'ARMADON_BOX_SHADOW_Y_OFFSET' ) ) {
	define( 'ARMADON_BOX_SHADOW_Y_OFFSET', 0 );
}

if ( ! defined( 'ARMADON_BOX_SHADOW_BLUR_RADIUS' ) ) {
	define( 'ARMADON_BOX_SHADOW_BLUR_RADIUS', 20 );
}

if ( ! defined( 'ARMADON_BOX_SHADOW_SPREAD_RADIUS' ) ) {
	define( 'ARMADON_BOX_SHADOW_SPREAD_RADIUS', 0 );
}

if ( ! defined( 'ARMADON_BOX_SHADOW_COLOR' ) ) {
	define('ARMADON_BOX_SHADOW_COLOR', 'rgba(27, 26, 35, .3)' );
}

if ( ! defined( 'ARMADON_CARD_COLOR' ) ) {
	define( 'ARMADON_CARD_COLOR', '#CFD3DA' );
}

if ( ! defined( 'ARMADON_CARD_TITLE_COLOR' ) ) {
	define( 'ARMADON_CARD_TITLE_COLOR', '#ffffff' );
}

if ( ! defined( 'ARMADON_CARD_LINK_COLOR' ) ) {
	define( 'ARMADON_CARD_LINK_COLOR', ARMADON_CARD_COLOR );
}

if ( ! defined( 'ARMADON_CARD_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_CARD_LINK_HOVER_COLOR', ARMADON_BRAND_PRIMARY );
}


if ( ! defined( 'ARMADON_ARCHIVE_CUSTOM_HEADER_LAYOUT' ) ) {
	define('ARMADON_ARCHIVE_CUSTOM_HEADER_LAYOUT', '6-6-cols-left-reverse' );
}

if ( ! defined( 'ARMADON_ARCHIVE_CUSTOM_HEADER_CONTAINER_LAYOUT' ) ) {
	define('ARMADON_ARCHIVE_CUSTOM_HEADER_CONTAINER_LAYOUT', 'classic' );
}

if ( ! defined( 'ARMADON_ARCHIVE_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_LAYOUT', '12-cols-left' );
}

if ( ! defined( 'ARMADON_ARCHIVE_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_CONTAINER_LAYOUT', 'classic' );
}

if ( ! defined( 'ARMADON_ARCHIVE_POSTS_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_POSTS_LAYOUT', '4-4-4-cols-classic' );
}

if ( ! defined( 'ARMADON_ARCHIVE_POSTS_HEIGHT_EQUALIZED' ) ) {
	define( 'ARMADON_ARCHIVE_POSTS_HEIGHT_EQUALIZED', true );
}


/**
 * Form Controls
 */

if ( ! defined( 'ARMADON_CONTROL_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_CONTROL_BACKGROUND_COLOR', '#2b2f40' );
}

if ( ! defined( 'ARMADON_CONTROL_COLOR' ) ) {
	define( 'ARMADON_CONTROL_COLOR', ARMADON_GRAY_LIGHT );
}

if ( ! defined( 'ARMADON_CONTROL_PLACEHOLDER_COLOR' ) ) {
	define( 'ARMADON_CONTROL_PLACEHOLDER_COLOR', ARMADON_GRAY );
}

if ( ! defined( 'ARMADON_CONTROL_BORDER_COLOR' ) ) {
	define( 'ARMADON_CONTROL_BORDER_COLOR', 'rgba(255,255,255,.07)' );
}

if ( ! defined( 'ARMADON_CONTROL_FOCUS_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_CONTROL_FOCUS_BACKGROUND_COLOR', '#2b2f50' );
}

if ( ! defined( 'ARMADON_CONTROL_FOCUS_COLOR' ) ) {
	define( 'ARMADON_CONTROL_FOCUS_COLOR', ARMADON_CONTROL_COLOR );
}

if ( ! defined( 'ARMADON_CONTROL_FOCUS_BORDER_COLOR' ) ) {
	define( 'ARMADON_CONTROL_FOCUS_BORDER_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_CONTROL_BORDER_WIDTH' ) ) {
	define( 'ARMADON_CONTROL_BORDER_WIDTH', ARMADON_CARD_BORDER_WIDTH );
}

if ( ! defined( 'ARMADON_CONTROL_BORDER_RADIUS' ) ) {
	define( 'ARMADON_CONTROL_BORDER_RADIUS', ARMADON_CARD_BORDER_RADIUS );
}

/**
 * Loader
 */

if ( ! defined( 'ARMADON_LOADER_DISPLAYED' ) ) {
	define( 'ARMADON_LOADER_DISPLAYED', false );
}

if ( ! defined( 'ARMADON_LOADER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_LOADER_BACKGROUND_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_LOADER_COLOR' ) ) {
	define( 'ARMADON_LOADER_COLOR', '#FFFFFF' );
}


/**
 * Prefooter
 */

if ( ! defined( 'ARMADON_PREFOOTER_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_PREFOOTER_BACKGROUND_IMAGE', '' );
}

if ( ! defined( 'ARMADON_PREFOOTER_LAYOUT' ) ) {
	define( 'ARMADON_PREFOOTER_LAYOUT', '4-4-4-cols-left' );
}

if ( ! defined( 'ARMADON_PREFOOTER_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_PREFOOTER_CONTAINER_LAYOUT', 'classic' );
}

if ( ! defined( 'ARMADON_PREFOOTER_PADDING_Y' ) ) {
	define( 'ARMADON_PREFOOTER_PADDING_Y', 4 );
}

if ( ! defined( 'ARMADON_PREFOOTER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_BACKGROUND_COLOR', '#1c1a23' );
}

if ( ! defined( 'ARMADON_PREFOOTER_HEADING_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_HEADING_COLOR', ARMADON_HEADINGS_COLOR );
}

if ( ! defined( 'ARMADON_PREFOOTER_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_PREFOOTER_LINK_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_LINK_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_PREFOOTER_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_LINK_HOVER_COLOR', '#ffffff' );
}

if ( ! defined( 'ARMADON_PREFOOTER_BORDER_TOP_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_BORDER_TOP_COLOR', ARMADON_CARD_BORDER_COLOR );
}

if ( ! defined( 'ARMADON_PREFOOTER_BORDER_TOP_WIDTH' ) ) {
	define( 'ARMADON_PREFOOTER_BORDER_TOP_WIDTH', 1 );
}

if ( ! defined( 'ARMADON_PREFOOTER_BORDER_BOTTOM_COLOR' ) ) {
	define( 'ARMADON_PREFOOTER_BORDER_BOTTOM_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_PREFOOTER_BORDER_BOTTOM_WIDTH' ) ) {
	define( 'ARMADON_PREFOOTER_BORDER_BOTTOM_WIDTH', 0 );
}


/**
 * Footer
 */

if ( ! defined( 'ARMADON_FOOTER_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_FOOTER_BACKGROUND_IMAGE', '' );
}

if ( ! defined( 'ARMADON_FOOTER_LAYOUT' ) ) {
	define( 'ARMADON_FOOTER_LAYOUT', '6-6-cols-left-right' );
}

if ( ! defined( 'ARMADON_FOOTER_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_FOOTER_CONTAINER_LAYOUT', 'classic' );
}

if ( ! defined( 'ARMADON_FOOTER_PADDING_Y' ) ) {
	define( 'ARMADON_FOOTER_PADDING_Y', 1 ); // %.
}

if ( ! defined( 'ARMADON_FOOTER_BACKGROUND_COLOR' ) ) {
	define( 'ARMADON_FOOTER_BACKGROUND_COLOR', '#1c1a23' );
}

if ( ! defined( 'ARMADON_FOOTER_HEADING_COLOR' ) ) {
	define( 'ARMADON_FOOTER_HEADING_COLOR', ARMADON_HEADINGS_COLOR );
}

if ( ! defined( 'ARMADON_FOOTER_COLOR' ) ) {
	define( 'ARMADON_FOOTER_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_FOOTER_LINK_COLOR' ) ) {
	define( 'ARMADON_FOOTER_LINK_COLOR', ARMADON_BODY_COLOR );
}

if ( ! defined( 'ARMADON_FOOTER_LINK_HOVER_COLOR' ) ) {
	define( 'ARMADON_FOOTER_LINK_HOVER_COLOR', '#ffffff' );
}

if ( ! defined( 'ARMADON_FOOTER_BORDER_TOP_COLOR' ) ) {
	define( 'ARMADON_FOOTER_BORDER_TOP_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_FOOTER_BORDER_TOP_WIDTH' ) ) {
	define( 'ARMADON_FOOTER_BORDER_TOP_WIDTH', 0 );
}

if ( ! defined( 'ARMADON_FOOTER_BORDER_BOTTOM_COLOR' ) ) {
	define( 'ARMADON_FOOTER_BORDER_BOTTOM_COLOR', ARMADON_BRAND_PRIMARY );
}

if ( ! defined( 'ARMADON_FOOTER_BORDER_BOTTOM_WIDTH' ) ) {
	define( 'ARMADON_FOOTER_BORDER_BOTTOM_WIDTH', 0 );
}

/**
 * BBPRESS
 */

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_TITLE' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_TITLE', esc_html__( 'Welcome to the Forum', 'armadon' ) );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_DESCRIPTION' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_DESCRIPTION', esc_html__( 'Join community forum to share your passion for gaming', 'armadon' ) );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_LAYOUT', '12-cols-left' );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_BACKGROUND_IMAGE' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_BACKGROUND_IMAGE', get_stylesheet_directory_uri() . '/assets/images/pages/header-default-forum.jpg' );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_PADDING_Y' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_PADDING_Y', ARMADON_HEADER_PADDING_Y );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CONTENT_PADDING_Y' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CONTENT_PADDING_Y', ARMADON_CONTENT_PADDING_Y );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_DISPLAYED' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_DISPLAYED', true );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_LAYOUT', '12-cols-left' );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CUSTOM_HEADER_CONTAINER_LAYOUT', 'classic' );
}

if ( ! defined( 'ARMADON_ARCHIVE_FORUM_CONTAINER_LAYOUT' ) ) {
	define( 'ARMADON_ARCHIVE_FORUM_CONTAINER_LAYOUT', 'classic' );
}


/**
 * Require plugins for this theme
 */

require get_template_directory() . '/libs/tgm-plugin-activation/class-tgm-plugin-activation.php';
global $armadon_tgm_plugin_activation;
$armadon_tgm_plugin_activation = require get_template_directory() . '/inc/tgm-plugin-activation/class-armadon-tgm-plugin-activation.php';

/**
 * Load Merlin
 */
require get_template_directory() . '/libs/merlin/vendor/autoload.php';
require get_template_directory() . '/libs/merlin/class-merlin.php';
require get_template_directory() . '/libs/themosaurus-merlin/class-themosaurus-merlin.php';
global $armadon_merlin;
$armadon_merlin = require get_template_directory() . '/inc/merlin/class-armadon-merlin.php';

/**
 * Initialize all the things.
 */

global $armadon;
$armadon = require get_template_directory() . '/inc/class-armadon.php';


/**
 * Custom template hooks and functions for this theme.
 */

require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-hooks.php';


/**
 * Plugins integration.
 */

if ( class_exists( 'Grimlock' ) ) {
	global $armadon_grimlock;
	$armadon_grimlock = require get_template_directory() . '/inc/grimlock/class-armadon-grimlock.php';
	require get_template_directory() . '/inc/grimlock/grimlock-template-functions.php';
	require get_template_directory() . '/inc/grimlock/grimlock-template-hooks.php';
}

if ( class_exists( 'Jetpack' ) ) {
	require get_template_directory() . '/inc/jetpack/jetpack-template-hooks.php';
}

if ( function_exists( 'wp_pagenavi' ) ) {
	require get_template_directory() . '/inc/wp-pagenavi/wp-pagenavi-template-functions.php';
	require get_template_directory() . '/inc/wp-pagenavi/wp-pagenavi-template-hooks.php';
}

if ( function_exists( 'yoast_breadcrumb' ) ) {
	require get_template_directory() . '/inc/wordpress-seo/wordpress-seo-template-functions.php';
	require get_template_directory() . '/inc/wordpress-seo/wordpress-seo-template-hooks.php';
}

if ( class_exists( 'Grimlock_WordPress_SEO' ) ) {
	global $armadon_grimlock_wordpress_seo;
	$armadon_grimlock_wordpress_seo = require get_template_directory() . '/inc/grimlock-wordpress-seo/class-armadon-grimlock-wordpress-seo.php';
}

if ( class_exists( 'WP_Menu_Image' ) ) {
	global $armadon_menu_image;
	$armadon_menu_image = require get_template_directory() . '/inc/menu-image/class-armadon-menu-image.php';
}

if ( class_exists( 'Grimlock_Login' ) ) {
	global $armadon_grimlock_login;
	$armadon_grimlock_login = require get_template_directory() . '/inc/grimlock-login/class-armadon-grimlock-login.php';
}

if ( function_exists( 'buddypress' ) ) {

	if ( ! class_exists( 'Youzer' ) && ! class_exists( 'Youzify' ) ) {
		define( 'BP_AVATAR_THUMB_WIDTH',        300 );
		define( 'BP_AVATAR_THUMB_HEIGHT',       300 );
		define( 'BP_AVATAR_FULL_WIDTH',         450 );
		define( 'BP_AVATAR_FULL_HEIGHT',        450 );
		define( 'BP_AVATAR_ORIGINAL_MAX_WIDTH', 999 );
		define( 'BP_AVATAR_DEFAULT',            get_stylesheet_directory_uri() . '/assets/images/avatars/user-avatar.png' );
		define( 'BP_AVATAR_DEFAULT_THUMB',      get_stylesheet_directory_uri() . '/assets/images/avatars/user-avatar-thumb.png' );
	}

	global $armadon_buddypress;
	$armadon_buddypress = require get_template_directory() . '/inc/buddypress/class-armadon-buddypress.php';
}

if ( class_exists( 'Grimlock_BuddyPress' ) ) {
	global $armadon_grimlock_buddypress;
	$armadon_grimlock_buddypress = require get_template_directory() . '/inc/grimlock-buddypress/class-armadon-grimlock-buddypress.php';
}

if ( class_exists( 'Grimlock_bbPress' ) ) {
	global $armadon_grimlock_bbpress;
	$armadon_grimlock_bbpress = require get_template_directory() . '/inc/grimlock-bbpress/class-armadon-grimlock-bbpress.php';
}

if ( class_exists( 'Grimlock_Author_Avatars' ) ) {
	global $armadon_grimlock_author_avatars;
	$armadon_grimlock_author_avatars = require get_template_directory() . '/inc/grimlock-author-avatars/class-armadon-grimlock-author-avatars.php';
}

if ( class_exists( 'Grimlock_The_Events_Calendar' ) ) {
	global $armadon_grimlock_the_events_calendar;
	$armadon_grimlock_the_events_calendar = require get_template_directory() . '/inc/grimlock-the-events-calendar/class-armadon-grimlock-the-events-calendar.php';
}

if ( class_exists( 'Grimlock_WooCommerce' ) ) {
	global $armadon_grimlock_woocommerce;
	$armadon_grimlock_woocommerce = require get_template_directory() . '/inc/grimlock-woocommerce/class-armadon-grimlock-woocommerce.php';
	require get_template_directory() . '/inc/grimlock-woocommerce/grimlock-woocommerce-template-hooks.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin or a child theme
 * so that your customizations aren't lost during updates.
 *
 * @link https://doc.themosaurus.com/creating-child-theme/
 */
