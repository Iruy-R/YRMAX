<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armadon
 */

?>

<div class="container container--narrow">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="p-4 bg-primary rounded search-module">
			<form role="search" method="get" class="search-form text-center pos-r" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="form-group mb-0">
					<label class="sr-only">
						<span class="screen-reader-text sr-only"><?php esc_html_e( 'Search everything...', 'armadon' ); ?></span>
					</label>
					<input type="search" class="search-field form-control form-control-lg" placeholder="<?php esc_attr_e( 'Search everything...', 'armadon' ); ?>"  title="<?php esc_attr_e( 'Search everything...', 'armadon' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s"/>
					<button type="submit" class="search-submit"><i class="armadon-icon armadon-search-regular"></i></button>
				</div>
			</form><!-- .search-form -->
		</div>

		<div class="pt-4">
			<?php the_content(); ?>
		</div>

	</article><!-- #post-## -->

</div>
