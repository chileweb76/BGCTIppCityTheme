<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
        <div class="post-image">
            <?php the_post_thumbnail() ?>
        </div>
            <div class="meta-info">
                <p>Posted on<?php echo esc_html(get_the_date()); ?> by  <?php the_author_posts_link(); ?></p>
                <p>Categories: <?php the_category( ' ' ); ?></p>
                <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
</article>