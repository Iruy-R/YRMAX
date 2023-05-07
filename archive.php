<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armadon
 */

get_header();
get_sidebar( 'left' ); ?>

	<div id="primary" class="content-area region__col region__col--2">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<header class="grimlock--page-header page-header">
					<?php do_action( 'armadon_breadcrumb' ); ?>
					<div>
						<?php if ( is_author() ): ?>
							<div class="page-header-author">
								<div class="row justify-content-center">
									<div class="page-header-author__avatar col-3 col-md-2 pr-0 pr-sm-2 mb-3 mb-md-0">
										<?php echo get_avatar( get_the_author_meta( 'ID' ), '150' ); ?>
									</div>
									<div class="page-header-author__text col-12 col-md-auto text-center text-md-left">
										<?php
										the_archive_title( '<h1 class="page-title h3">', '</h1>' );
										the_archive_description( '<div class="archive-description">', '</div>' );
										?>
									</div>
								</div>
							</div>
						<?php
						else:
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						endif; ?>
					</div>
				</header><!-- .grimlock--page-header -->

				<?php
				do_action( 'armadon_before_posts' );

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile; // End of the loop.

				do_action( 'armadon_after_posts' );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'right' );
get_footer();
