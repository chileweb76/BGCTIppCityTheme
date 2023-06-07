<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <section class="blog"> 
            <?php the_archive_title( '<h1>', '</h1>'); ?>
            <div class="archive-description">
                <?php the_archive_description('<p>', '</p>'); ?>
            </div>
                <div class="container">
                    <div class="archive-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                get_template_part( 'parts/content', 'archive'); 
                                //css in blog under pagination 
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