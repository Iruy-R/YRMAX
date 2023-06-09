'use strict';

/*global
 jQuery
 */

/**
 * File home.js
 *
 * Theme enhancements for a better user experience when visiting the posts page.
 */

jQuery( function( $ ) {

	var $priorityNavContainer = $('.posts-filter');

	if ($priorityNavContainer.length) {
		priorityNav.init({
			mainNavWrapper:             '.posts-filters__child',
			mainNav:                    '.posts-filter',
			navDropdownLabel:           '<i class="armadon-icon armadon-dots-horizontal-rounded-regular"></i>',
			throttleDelay:              0,
			breakPoint:                 768,
			navDropdownBreakpointLabel: '<span class="priority_menu_label_categories">' + armadon.priority_nav_dropdown_breakpoint_label_categories + '</span><span class="priority_menu_label_tags">' + armadon.priority_nav_dropdown_breakpoint_label_tags + '</span><span class="priority_menu_label_formats">' + armadon.priority_nav_dropdown_breakpoint_label_formats + '</span>'
		});
	}

});
