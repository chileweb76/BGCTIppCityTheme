<?php

function bgctippcity_load_scripts(){
    wp_register_style('bgctippcity-style', get_template_directory_uri() . '/css/app.css', [], wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('bgctippcity-style');

    wp_register_script('app', get_template_directory_uri() . '/js/app.js', [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('app');
   
}

add_action( 'wp_enqueue_scripts', 'bgctippcity_load_scripts' );

register_nav_menus(
    array(
        'bgctippcity_main_menu' => 'Main Menu',
        'bgctippcity_footer_menu' => 'Footer Menu'
    )
);