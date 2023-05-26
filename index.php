<?php get_header(); ?>

<div class="content-area"> 
    <main class="site-main"> 
        <section class="hero">
            <img class="left-image" />
            <div> 
                <h2>1 </h2>
                <h2>2 </h2>
                <p> 3</p>
                <p> 4</p>
            </div>
            <img class="right-image" />
        </section>
        <section class="services">
            Services
        </section>
        <section class="blog"> 
            <?php 
                if( have_posts() ):
                    while( have_posts() ) : the_post();
                    ?>
                        <article>
                            <h2> <?php the_title(); ?></h2>
                            <div class="meta-info">
                                <p>Posted in <?php echo get_the_date() ?> by: <?php the_author_posts_link(); ?> </p>
                                <p>Categories: <?php the_category( ' ' ); ?> </p>
                                <p>Tags: <?php the_tags( '', ','); ?></p> 
                            </div>
                        </article>
                    <?php
                endwhile;
            endif;
            ?>
        </section>
    </main>
</div>

<?php get_footer(); ?>