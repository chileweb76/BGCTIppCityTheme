<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <section class="blog"> 
            <? the_archive_title( '<h1>', '</h1>'); ?>
            <div class="archive-description">
                <? the_archive_description('<p>', '</p>'); ?>
            </div>
                <div class="container">
                    <div class="archive-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                ?>
                                    <article>
                                        <h2 class="article-h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                        <div class="meta-info">
                                            <div class="date-by-cat">
                                                <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                            </div>
                                        </div>
                                        <div class="content"><?php the_excerpt(); ?> </div>
                                    </article>

                                <!-- css in blog under pagination -->
                                <?php 
                                endwhile;
                                the_posts_pagination();
                                endif; ?>             
                    </div>
                    <?php if ( is_active_sidebar( 'sidebar-blog' ) ){ ?>
                        <div class="sidebar" >
                            <?php get_search_form();?>
                            <?php get_sidebar(); ?>
                        </div>
                        <?php } ?>                     
                </div>
            </section>
    </main>
</div>

<?php get_footer(); ?>