<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <header> 
        <div class="header-container">
            <div class="logo">
                <?php 
                    if( has_custom_logo() ) {
                    the_custom_logo(); 
                    }else{
                        ?>
                            <a class="page-title" href="<?php echo home_url( '/' ); ?>"<span><?php bloginfo( 'name' ); ?></span></a>
                            <p><?php bloginfo( 'description'); ?></p>
                        <?php
                    }
                    ?>
            </div>
            <div class="title"> 
                <h1>Barnes </h1>
                <h2>Tipp City </h2>
                <section class="contact-section"> 
                    <a class="contact"> phone </a>
                    <a class="contact"> email </a>
                </section>
            </div>
        </div>
                <nav class="nav-bar">
                    <?php wp_nav_menu( array( 'theme_location' => 'bgctippcity_main_menu', 'depth' => 2)); ?>
                </nav>
            
        </div>
    </header>
    <?php 
        if(get_header_image()) {
        ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <?php 
        }
    ?>