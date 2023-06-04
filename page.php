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
                        get_template_part( 'parts/content', 'page'); 
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>                               
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>