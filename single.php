<?php get_header() ?>

<div id="primary">
    <div id="main">
        <div class="single-container">
            <?php 
                while( have_posts() ):
                    the_post();
                    ?>
                    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                        
                        <header>
                            <h1><?php the_title(); ?></h1>
                                <div class="post-image">
                                    <?php the_post_thumbnail() ?>
                                </div>
                            
                            <div class="meta-info">
                                <p>Posted on<?php echo get_the_date(); ?> by  <?php the_author_posts_link(); ?></p>
                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                            </div>
                        </header>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <!-- css in blog under pagination -->
                    <div class="bgctippcity-pagination">
                        <div class="pages next">
                            <?php next_post_link( '&laquo; %link' ); ?>
                        </div>
                        <div class="pages previous">
                            <?php previous_post_link( '%link &raquo;' ); ?>  
                        </div>
                    </div>
                <?php
                if( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer() ?>