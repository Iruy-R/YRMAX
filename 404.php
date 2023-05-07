<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package armadon
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked into armadon_404 action
			 *
			 * @hooked armadon_404          - 10
			 * @hooked armadon_grimlock_404 - 10
			 */
			do_action( 'armadon_404' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
