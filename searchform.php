<?php
/**
 * The template for displaying search forms
 *
 * @package armadon
 */

?>

<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="sr-only">
			<span class="screen-reader-text sr-only"><?php esc_html_e( 'Search everything...', 'armadon' ); ?></span>
		</label>
		<input type="search" class="search-field form-control" placeholder="<?php esc_attr_e( 'Search everything...', 'armadon' ); ?>"  title="<?php esc_attr_e( 'Search for:', 'armadon' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s"/>
		<button type="submit" class="search-submit"><i class="armadon-icon armadon-search-regular"></i></button>
	</div>
</form><!-- .search-form -->
