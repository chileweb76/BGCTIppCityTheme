<?php get_header(); ?>

<div id="primary">
    <div class="main">
    <h1>Search results for: <?php echo get_search_query(); ?></h1>
        <div class="search-container">
            <div class="results">
                <?php 
                while( have_posts() ):
                    the_post();
                    get_template_part( 'parts/content', 'search'); 
                //css in blog under pagination 
                endwhile;
                the_posts_pagination();
                ?>
            </div>
                <?php if ( is_active_sidebar( 'sidebar-blog' ) ){ ?>
                    <div class="sidebar" >
                        <?php get_search_form();?>
                        <?php get_sidebar(); ?>
                    </div>
                <?php } ?>                     
        </div>
    </div>
</div>

<?php get_footer(); ?>