<article class="latest-blog">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        <div class="post">
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <div class="meta-info">
                    <div class="date-by-cat">
                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                        <p>Categories: <?php the_category( ' ' ); ?></p>
                        <p>Tags: <?php the_tags( '', ', '); ?></p>
                    </div>
                </div>
                 <?php the_excerpt(); ?>
        </div>
</article>