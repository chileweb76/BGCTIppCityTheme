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
            <?php 
            $title1 = get_theme_mod( 'set_header_title1', 'Title of Site' );
            $title2 = get_theme_mod( 'set_header_title2', 'Header Location Title' );
            $phone_number = get_theme_mod( 'set_phone_number', 'Phone Number' );
            $email = get_theme_mod( 'set_email', 'Email' );
            ?>

            <div class="title"> 
                <h1><?php echo $title1; ?> </h1>
                <h2><?php echo $title2; ?></h2>
                <section class="contact-section"> 
                    <a class="contact" href="tel:<?php echo $phone_number; ?>"> <?php echo $phone_number; ?> </a>
                    <p class="contact"><?php echo $email; ?> </a>
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