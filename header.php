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
            <img class="logo" />
            <div> 
                <h1>Barnes </h1>
                <h2>Tipp City </h2>
                <section class="contact-section"> 
                    <a class="contact"> phone </a>
                    <a class="contact"> email </a>
                </section>
                <nav class="nav-bar">
                    <?php wp_nav_menu( array( 'theme_location' => 'bgctippcity_main_menu', 'depth' => 2)); ?>
                </nav>
            </div>
        </div>
    </header>