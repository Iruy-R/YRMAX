<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armadon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked into armadon_page action
	 *
	 * @hooked armadon_page          - 10
	 * @hooked armadon_grimlock_page - 10
	 */
	do_action( 'armadon_page' ); ?>
</article><!-- #post-## -->
