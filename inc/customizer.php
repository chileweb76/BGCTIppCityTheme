<?php

function bgctippcity_customizer( $wp_customize ){
    // 1 copyright section
    $wp_customize->add_section (
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => '© Copyright - All Rights Reserved',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Please, type your copyright information here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );

    // 2 Hero Section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section'
        )
    );

          // Left Image 
          $wp_customize->add_setting(
            'set_left_image',
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
            )
            );

            $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
            'set_left_image',
            array(
                'label' => 'Left Image',
                'section'   => 'sec_hero',
                'mime_type' => 'image'
            )));

            // Right Image 
          $wp_customize->add_setting(
            'set_right_image',
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
            )
            );

            $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
            'set_right_image',
            array(
                'label' => 'Right Image',
                'section'   => 'sec_hero',
                'mime_type' => 'image'
            )));

            // Title 1
            $wp_customize->add_setting(
                'set_hero_title1',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add custom description',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_title1',
                array(
                    'label' => 'Hero Subtitle',
                    'description' => 'Add custom description',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );

            // Title 2
            $wp_customize->add_setting(
                'set_hero_title2',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add custom description',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_title2',
                array(
                    'label' => 'Hero Subtitle',
                    'description' => 'Add custom description',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );

            // Subtitle
            $wp_customize->add_setting(
                'set_hero_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add custom description',
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_subtitle',
                array(
                    'label' => 'Hero Subtitle',
                    'description' => 'Add custom description',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
            );

     // 3 Header Section
     $wp_customize->add_section(
        'sec_header',
        array(
            'title' => 'Header Section'
        )
    );
            // Header Title
            $wp_customize->add_setting(
                'set_header_title1',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Title of site',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_header_title1',
                array(
                    'label' => 'Header Title',
                    'description' => 'Title of site',
                    'section' => 'sec_header',
                    'type' => 'text'
                )
            );

            // Header Location Title
            $wp_customize->add_setting(
                'set_header_title2',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Location title',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_header_title2',
                array(
                    'label' => 'Header Location Title',
                    'description' => 'Location title',
                    'section' => 'sec_header',
                    'type' => 'text'
                )
            );

            // Phone number
            $wp_customize->add_setting(
                'set_phone_number',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Phone number',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_phone_number',
                array(
                    'label' => 'Phone Number',
                    'description' => 'Phone Number',
                    'section' => 'sec_header',
                    'type' => 'text'
                )
            );

            // Header Title
            $wp_customize->add_setting(
                'set_email',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Email',
                    'sanitize_callback' => 'sanitize_email'
                )
            );

            $wp_customize->add_control(
                'set_email',
                array(
                    'label' => 'Email',
                    'description' => 'Email',
                    'section' => 'sec_header',
                    'type' => 'email'
                )
            );
}
add_action( 'customize_register', 'bgctippcity_customizer');