<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new-generation
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

<?php
    $reply_class = isset($_GET['replytocom']) && $_GET['replytocom'] !== '' ? 'comments-area--reply' : '';
    $sort_class = 'comments-area--sort-' . (isset($_GET['sort_comments']) && $_GET['sort_comments'] !== '' ? $_GET['sort_comments'] : 'DESC');
?>
<div id="comments" class="comments-area <?= $reply_class; ?> <?= $sort_class; ?>">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
