<article>
    <h2 class="article-h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="meta-info">
            <div class="date-by-cat">
                <p>Posted on <?php echo esc_html(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
                <p>Categories: <?php the_category( ' ' ); ?></p>
                <p>Tags: <?php the_tags( '', ', '); ?></p>
            </div>
        </div>
            <div class="content"><?php the_excerpt(); ?> </div>
</article>
