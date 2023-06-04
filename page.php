<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <?php 
        $left_image = wp_get_attachment_url( get_theme_mod( 'set_left_image' ) );
        $right_image = wp_get_attachment_url( get_theme_mod( 'set_right_image' ) );
        $title1 = get_theme_mod( 'set_hero_title1', 'Add custom description' );
        $title2 = get_theme_mod( 'set_hero_title2', 'Add custom description' );
        $subtitle = get_theme_mod( 'set_hero_subtitle', 'Add custom description' );
        ?>
        <section class="hero">
            <img class="hero-image" src="<?php echo $left_image ?>" alt="Left side image"/>
            <div class="work-description"> 
                <h2><?php echo $title1; ?></h2>
                <h3><?php echo $title2; ?></h3>
                <p><?php echo nl2br( $subtitle ); ?></p>
            </div>
            <img class="hero-image" src="<?php echo $right_image ?>" alt="right side image" />
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