<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <section class="hero">
            <img class="left-image" />
            <div class="work-description"> 
                <h2>Fully Insured</h2>
                <h3>Handyman </h3>
                <p>Available for small jobs</p>
                <p>One or two day turnaround</p>
            </div>
            <img class="right-image" />
        </section>
        <section>
            <h2>Specialized in</h2>
                <div class="specialized"> 
                    <?php 
                       if( is_active_sidebar( 'specialized-one')) {
                            dynamic_sidebar( 'specialized-one');
                       }
                    ?>
                </div>
                <div class="specialized"> 
                    <?php 
                        if( is_active_sidebar( 'specialized-two')) {
                            dynamic_sidebar( 'specialized-two');
                       }
                    ?>
                </div>
                <div class="specialized"> 
                    <?php 
                        if( is_active_sidebar( 'specialized-three')) {
                            dynamic_sidebar( 'specialized-three');
                       }
                    ?>
                </div>
        </section>
        <section class="blog-home"> 
            <?php
            $args = array( 'numberposts' => 3 );
            $postslist = get_posts($args);
            $postslist = new WP_Query($args);
            if($postslist->have_posts() ):
            ?>
            <h2>Latest Posts</h2>
            <div class="container-home">
                    <?php 
                        while( $postslist->have_posts() ) : $postslist->the_post();
                            ?>
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
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>                               
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>