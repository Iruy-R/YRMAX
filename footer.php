<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armadon
 */

?>

			<?php
			/**
			 * Functions hooked into armadon_footer action
			 *
			 * @hooked armadon_footer                 - 10
			 * @hooked armadon_grimlock_after_content - 10
			 * @hooked armadon_grimlock_footer        - 20
			 */
			do_action( 'armadon_footer' ); ?>

		</div><!-- #site -->

		<?php
		do_action( 'armadon_after_site' ); ?>

	</div><!-- #site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
