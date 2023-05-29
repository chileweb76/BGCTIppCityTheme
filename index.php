<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <section class="blog"> 
            <h1 class="blog-h1">Blog</h1>
                <div class="container">
                    <div class="blog-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                ?>
                                    <article>
                                        <h2 class="article-h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                        <div class="meta-info">
                                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                            <div class="date-by-cat">
                                                <p>Posted in <?php echo get_the_date(); ?> by<?php the_author_posts_link(); ?></p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                            </div>
                                        </div>
                                        <div class="content"><?php the_excerpt(); ?> </div>
                                    </article>
                                <?php 
                                endwhile;
                                endif; ?>
                        <div class="sidebar" >
                            <?php get_sidebar(); ?>
                        </div>                              
                    </div>    
                </div>
            </section>
    </main>
</div>

<?php get_footer(); ?>