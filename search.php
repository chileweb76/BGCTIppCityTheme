<?php get_header(); ?>

<div id="primary">
    <div class="main">
    <h1>Search results for: <?php echo get_search_query(); ?></h1>
        <div class="search-container">
            <div class="results">
                <?php 
                while( have_posts() ):
                    the_post();
                    ?>
                    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                        
                        <header>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="meta-info">
                                <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                            </div>
                        </header>
                        <div class="content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <!-- css in blog under pagination -->
                    <?php
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