<?php get_header(); ?>

<?php 
if(get_header_image()) {
?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php 
}
?>
<div class="content-area"> 
    <main class="site-main"> 
        <section class="blog"> 
            <h1 class="blog-h1" >Blog</h1>
                <div class="container">\
                    <div class="blog-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                ?>
                                    <article>
                                        <h2 class="article-h2"><?php the_title(); ?></h2>
                                        <div class="meta-info">
                                        <?php the_post_thumbnail( ); ?>
                                            <div class="date-by-cat">
                                                <p>Posted in <?php echo get_the_date(); ?> by<?php the_author_posts_link(); ?></p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                            </div>
                                        </div>
                                        <?php the_content(); ?>
                                    </article>
                                <?php
                                endwhile;
                            else: ?>
                                <p></p>
                        <?php endif; ?>
                        <div class="sidebar" >
                            <?php get_sidebar(); ?>
                        </div>                              
                    </div>    
                </div>
            </section>
    </main>
</div>

<?php get_footer(); ?>