<?php

function bgctippcity_load_scripts(){
    wp_register_style('bgctippcity-style', get_template_directory_uri() . '/css/app.css', [], wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('bgctippcity-style');

    wp_register_script('app', get_template_directory_uri() . '/js/app.js', [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('app');
   
}

add_action( 'wp_enqueue_scripts', 'bgctippcity_load_scripts' );



function bgctippcity_config(){
    register_nav_menus(
        array(
            'bgctippcity_main_menu' => 'Main Menu',
            'bgctippcity_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo', array( 
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action( 'after_setup_theme', 'bgctippcity_config', 0 );

add_action( 'widgets_init', 'bgctippcity_sidebars' );
function bgctippcity_sidebars(){
    register_sidebar(
        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'sidebar-blog',
            'description'   => 'This is the Blog Sidebar. You can add your widgets here. Add h4 headings to each widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Spcialization One',
            'id'    => 'specialized-one',
            'description'   => 'This is the Spcialization Widget area.. You can add your widgets here. ',
            'before_widget' => '<div class="specialized-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Spcialization Two',
            'id'    => 'specialized-two',
            'description'   => 'This is the Spcialization Widget area.. You can add your widgets here. ',
            'before_widget' => '<div class="specialized-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Spcialization Three',
            'id'    => 'specialized-three',
            'description'   => 'This is the Spcialization Widget area.. You can add your widgets here. ',
            'before_widget' => '<div class="specialized-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

function wpdocs_remove_website_field( $fields ) {
	unset( $fields['url'] );
	return $fields;
}

add_filter( 'comment_form_default_fields', 'wpdocs_remove_website_field' );

// Remove comment time with at
function not_default_comments( $comment, $args, $depth ) {
    global $post;
    $author_id = $post->post_author;
    $GLOBALS['comment'] = $comment;
?>
    <li id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" <?php comment_class('clr'); ?>>
            <!-- .comment-author -->
            <div class="comment-details clr">
                <header class="comment-meta">
                    <cite class="fn"><?php comment_author_link(); ?></cite>
                    <span class="comment-date">
                    <?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                        esc_url( get_comment_link( $comment->comment_ID ) ),
                        get_comment_time( 'c' ),
                        sprintf( _x( '%1$s', '1: date', 'bgctippcity' ), get_comment_date() )
                    ); ?>
                    </span><!-- .comment-date -->
                </header><!-- .comment-meta -->
                <?php if ( '0' == $comment->comment_approved ) : ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'bgctippcity' ); ?></p>
                <?php endif; ?>
                <div class="comment-content entry clr">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->
                <div class="reply comment-reply-link">
                    <?php comment_reply_link( array_merge( $args, array(
                        'reply_text' => esc_html__( 'Reply', 'bgctippcity' ),
                        'depth'      => $depth,
                        'max_depth'  => $args['max_depth'] )
                    ) ); ?>
                </div><!-- .reply -->
            </div><!-- .comment-details -->
        </article><!-- #comment-## -->
    <?php
}

add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();

	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">'.__('Save my name and email for future comments on my computer.', 'textdomain').'</label></p>';
	return $fields;
}

//Reverse comment order
function smartwp_reverse_comment_order( $comments ) {
    return array_reverse( $comments );
   }
   add_filter ('comments_array', 'smartwp_reverse_comment_order');