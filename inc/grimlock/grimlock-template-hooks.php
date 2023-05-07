<?php
/**
 * Armadon template Hooks for Grimlock.
 *
 * @package armadon
 */

/**
 * Before Site Hooks.
 *
 * @see armadon_grimlock_before_site()
 *
 * @since 1.0.0
 */
add_action( 'armadon_before_site', 'armadon_grimlock_before_site', 10 );

/**
 * Header Hooks.
 *
 * @see armadon_header()
 * @see armadon_grimlock_header()
 * @see armadon_grimlock_before_content()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_header', 'armadon_header',                  10 );
add_action(    'armadon_header', 'armadon_grimlock_header',         10 );
add_action(    'armadon_header', 'armadon_grimlock_before_content', 20 );


/**
 * Header After Subtitle.
 *
 * @see armadon_grimlock_custom_header_meta_start()
 * @see armadon_grimlock_custom_header_meta_end()
 *
 * @since 1.0.3
 */
add_action( 'grimlock_custom_header_after_subtitle', 'armadon_grimlock_custom_header_meta_start',  5, 1 );
add_action( 'grimlock_custom_header_after_subtitle', 'armadon_grimlock_custom_header_meta_end',   35, 1 );

/**
 * Navigation Hooks.
 *
 * @see armadon_grimlock_navbar_nav_menu()
 * @see armadon_grimlock_vertical_navbar_nav_menu()
 *
 * @since 1.0.0
 */
add_action( 'grimlock_navbar_nav_menu',           'armadon_grimlock_navbar_nav_menu',           10, 1 );
add_action( 'grimlock_hamburger_navbar_nav_menu', 'armadon_grimlock_hamburger_navbar_nav_menu', 10, 1 );
add_action( 'grimlock_vertical_navbar_nav_menu',  'armadon_grimlock_vertical_navbar_nav_menu',  10, 1 );

/**
 * Footer Hooks.
 *
 * @see armadon_footer()
 * @see armadon_grimlock_footer()
 * @see armadon_grimlock_after_content()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_footer', 'armadon_footer',                 10 );
add_action(    'armadon_footer', 'armadon_grimlock_after_content', 10 );
add_action(    'armadon_footer', 'armadon_grimlock_footer',        20 );

/**
 * After Site Hooks.
 *
 * @see armadon_grimlock_after_site()
 *
 * @since 1.0.0
 */
add_action(    'armadon_after_site', 'armadon_grimlock_after_site', 10 );

/**
 * Sidebar Hooks
 *
 * @see armadon_sidebar_left()
 * @see armadon_sidebar_right()
 * @see armadon_grimlock_sidebar_left()
 * @see armadon_grimlock_sidebar_right()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_sidebar_left', 'armadon_sidebar_left',          10 );
add_action(    'armadon_sidebar_left', 'armadon_grimlock_sidebar_left', 10 );

remove_action( 'armadon_sidebar_right', 'armadon_sidebar_right',          10 );
add_action(    'armadon_sidebar_right', 'armadon_grimlock_sidebar_right', 10 );

/**
 * Before Posts Hooks.
 *
 * @see armadon_before_posts()
 * @see armadon_grimlock_before_posts()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_before_posts', 'armadon_before_posts',          10 );
add_action(    'armadon_before_posts', 'armadon_grimlock_before_posts', 10 );

/**
 * After Posts Hooks.
 *
 * @see armadon_after_posts()
 * @see armadon_grimlock_after_posts()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_after_posts', 'armadon_after_posts',          10 );
add_action(    'armadon_after_posts', 'armadon_grimlock_after_posts', 10 );

/**
 * Post Hooks.
 *
 * @see armadon_post()
 * @see armadon_grimlock_post()
 * @see armadon_grimlock_post_thumbnail_size()
 * @see armadon_the_date()
 * @see armadon_the_author()
 * @see armadon_the_category_list()
 * @see armadon_the_tag_list()
 * @see armadon_the_post_format()
 * @see armadon_the_sticky_mark()
 * @see armadon_get_more_link_text()
 * @see armadon_comments_link()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_post', 'armadon_post',           10 );
add_action(    'armadon_post', 'armadon_grimlock_post',  10 );

remove_action( 'grimlock_post_before_card_body', 'grimlock_post_thumbnail', 10 );
remove_action( 'grimlock_post_card_body',        'grimlock_post_format',    10 );
remove_action( 'grimlock_post_header',           'grimlock_category_list',  20 );
remove_action( 'grimlock_post_header',           'grimlock_post_meta',      30 );
remove_action( 'grimlock_post_footer',           'grimlock_edit_post_link', 40 );
remove_action( 'grimlock_post_footer',           'grimlock_comments_link',  30 );

add_action( 'grimlock_post_before_card_body',    'armadon_grimlock_post_thumbnail',          10 );
add_action( 'grimlock_post_header',              'armadon_the_date',                          5 );
add_action( 'grimlock_post_header',              'armadon_grimlock_card_body_category_list',  4 );
add_action( 'grimlock_post_header',              'armadon_grimlock_card_floating',            5 );
add_action( 'grimlock_post_card_body',           'armadon_grimlock_post_author',             42 );


/**
 * Search Hooks.
 *
 * @see armadon_search_post()
 * @see armadon_grimlock_search_post()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_search_post', 'armadon_search_post',          10 );
add_action(    'armadon_search_post', 'armadon_grimlock_search_post', 10 );

/**
 * Single Post Hooks.
 *
 * @see armadon_single()
 * @see armadon_the_author_biography()
 * @see armadon_grimlock_single()
 * @see grimlock_the_post_navigation()
 *
 * @since 1.0.0
 */

remove_action( 'armadon_single', 'armadon_single',          10 );
add_action(    'armadon_single', 'armadon_grimlock_single', 10 );

remove_action( 'armadon_the_post_navigation', 'the_post_navigation',          10 );
add_action(    'armadon_the_post_navigation', 'grimlock_the_post_navigation', 10 );

remove_action( 'grimlock_single_content', 'grimlock_single_author_biography',     30 );
add_action( 'grimlock_single_content',    'armadon_grimlock_the_author_biography', 30 );

/**
 * Page Hooks.
 *
 * @see armadon_page()
 * @see armadon_grimlock_page()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_page', 'armadon_page',          10 );
add_action(    'armadon_page', 'armadon_grimlock_page', 10 );


/**
 * 404 Hooks.
 *
 * @see armadon_404()
 * @see armadon_grimlock_404()
 *
 * @since 1.0.0
 */
remove_action( 'armadon_404', 'armadon_404',          10 );
add_action(    'armadon_404', 'armadon_grimlock_404', 10 );


/**
 * Other Hooks.
 *
 * @see armadon_grimlock_remove_actions()
 *
 * @since 1.0.0
 */
add_action( 'template_redirect', 'armadon_grimlock_remove_actions', 10 );
