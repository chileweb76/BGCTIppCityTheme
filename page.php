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
        <section class="hero">
            <img class="left-image" />
            <div> 
                <h2>1 </h2>
                <h3>2 </h3>
                <p> 3</p>
                <p> 4</p>
            </div>
            <img class="right-image" />
        </section>
        <section class="services">
            Services
        </section>
        <section class="blog"> 
            <div class="container">
                <div class="blog-items">
                    <?php 
                            while( have_posts() ) : the_post();
                            ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <img></img>
                                        <div class="date-by-cat">
                                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                            <p>Categories: <?php the_category( ' ' ); ?></p>
                                            <p>Tags: <?php the_tags( '', ', '); ?></p>
                                        </div>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                            <?php
                            endwhile;
                        ?>                                
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>