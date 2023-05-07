<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armadon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked into armadon_post action
	 *
	 * @hooked armadon_post          - 10
	 * @hooked armadon_grimlock_post - 10
	 */
	do_action( 'armadon_post' ); ?>
</article><!-- #post-## -->
