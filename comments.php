<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage BGCTippCity
 * @since 1.0
 * @version 1.0
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
<div id="comments" class="comments-area">
<?php
$comment_args = array(
        'comment_notes_before'  => '<p class="required-message">'. __( 'Fields with ( * ) are required. Your email address will not be published', 'bgctippcity' ) .'</p>',
        'logged_in_as' => '<p></p>',
        'title_reply' => __( '<h4>Tell us what you think</h4>', 'bgctippcity'  ),
        'comment_field' => '<p class="comment-words">' .
            '<label for="comment">' . __( 'Comment:', 'bgctippcity' ) . '</label>' .
            '<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>' .
            '</p>',
        'comment_notes_after'       => '',
        );
?>
<?php comment_form( $comment_args ); ?>

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h4 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'bgctippcity' ), get_the_title() );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'bgctippcity'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h4>
        <ol class="comment-list">
        <?php
            // Show comments
            wp_list_comments( array(
                'callback' => 'not_default_comments'
            ) );
        ?>
        </ol>
        <?php the_comments_pagination( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'bgctippcity' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'bgctippcity' ) . '</span>',
        ) );
    endif; // Check for have_comments().
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'bgctippcity' ); ?></p>
    <?php
    endif;
    ?>
   
</div><!-- #comments -->
 
