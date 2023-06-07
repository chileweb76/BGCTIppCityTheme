<div class="content-area"> 
    <main class="site-main"> 
        <section class="blog"> 
            <h1>Blog</h1>
                <div class="container">
                    <div class="blog-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                get_template_part( 'parts/content');
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