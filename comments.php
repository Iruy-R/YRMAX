<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armadon
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<div id="comments" class="comments-area">

		<div class="comment-toggle d-flex justify-content-center mb-5">
			<a class="btn btn-primary px-sm-5 py-sm-4 collapsed" data-toggle="collapse" href="#collapseComments" role="button" aria-expanded="false" aria-controls="collapseComments">
				<span class="px-sm-5">
					<?php if ( have_comments() ) : ?>
						<span class="collapsed-visible"><?php esc_html_e( 'Show Comments', 'armadon' ); ?></span>
						<span class="collapsed-hidden"><?php esc_html_e( 'Hide Comments', 'armadon' ); ?></span>
					<?php else: ?>
						<span class="collapsed-visible"><?php esc_html_e( 'Show Comment Form', 'armadon' ); ?></span>
						<span class="collapsed-hidden"><?php esc_html_e( 'Hide Comment Form', 'armadon' ); ?></span>
					<?php endif; ?>
				</span>
			</a>
		</div>

		<div class="collapse fade" id="collapseComments">

			<div class="container container--narrower py-5">

				<?php if ( have_comments() ) : ?>

					<h3 class="comments-subtitle h5 text-center text-letter-spacing-3 text-uppercase text-muted">
						<span class="small">
							<?php
							$comments_number = get_comments_number();
							if ( '1' === $comments_number ) :
								echo esc_html( _x( 'One thought on', 'comments title', 'armadon' ) );
							else :
								printf(
									/* translators: 1: Number of comments, 2: Post title */
									esc_html( _nx(
										'%1$s thought on',
										'%1$s thoughts on',
										$comments_number,
										'Button Comment Count',
										'armadon'
									) ),
									esc_html( number_format_i18n( $comments_number ) ),
									''
								); // WPCS: XSS OK.
							endif; ?>
						</span>
					</h3><!-- .comments-title -->

					<h2 class="comments-title h4 text-center pl-sm-5 pr-sm-5 ml-sm-5 mr-sm-5  pb-3">
						<?php echo esc_html( get_the_title() ); ?>
					</h2>

					<ul class="comment-list list-unstyled">
						<?php
						wp_list_comments( array(
							'style'       => 'ul',
							'short_ping'  => true,
							'avatar_size' => apply_filters( 'armadon_comment_avatar_size', 80 ),
							'callback'    => 'armadon_comment',
						) ); ?>
					</ul><!-- .comment-list -->

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
						<nav id="comment-nav-below" class="navigation comment-navigation">
							<h2 class="screen-reader-text sr-only"><?php esc_html_e( 'Comment navigation', 'armadon' ); ?></h2>
							<div class="nav-links">
								<ul class="pager">
									<?php if( get_previous_comments_link() ) : ?>
										<li class="nav-previous pager-prev"><?php previous_comments_link( esc_html__( 'Older Comments', 'armadon' ) ); ?></li>
									<?php endif; ?>
									<?php if( get_next_comments_link() ) : ?>
										<li class="nav-next pager-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'armadon' ) ); ?></li>
									<?php endif; ?>
								</ul><!-- .pager -->
							</div><!-- .nav-links -->
						</nav><!-- #comment-nav-below -->
					<?php endif;

				endif;

				if ( ! comments_open() ) : ?>
					<div class="no-comments mt-3 mb-3 text-center"><i class="armadon-icon armadon-comment-x-regular mr-1"></i> <?php esc_html_e( 'Comments are closed.', 'armadon' ); ?></div>
				<?php
				endif;

				if ( comments_open() && post_type_supports( get_post_type(), 'comments' ) ) :
					comment_form();
				endif; ?>

			</div><!-- .container -->

		</div><!-- .collapse -->

	</div><!-- #comments -->

<?php endif; ?>
