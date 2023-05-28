<?php

function bgctippcity_load_scripts(){
    wp_register_style('bgctippcity-style', get_template_directory_uri() . '/css/app.css', [], wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('bgctippcity-style');

    wp_register_script('app', get_template_directory_uri() . '/js/app.js', [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('app');
   
}

add_action( 'wp_enqueue_scripts', 'bgctippcity_load_scripts' );



function bgctippcity_config(){
    register_nav_menus(
        array(
            'bgctippcity_main_menu' => 'Main Menu',
            'bgctippcity_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo', array( 
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action( 'after_setup_theme', 'bgctippcity_config', 0 );

add_action( 'widgets_init', 'bgctippcity_sidebars' );
function bgctippcity_sidebars(){
    register_sidebar(
        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'sidebar-blog',
            'description'   => 'This is the Blog Sidebar. You can add your widgets here. Added h4 headings to each widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}