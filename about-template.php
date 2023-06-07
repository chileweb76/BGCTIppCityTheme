<?php
/*
Template Name: About Template
*/
?>

<?php get_header(); ?>

<main class="about-main">
    <h1>About</h1>
    <?php 
        $about = get_theme_mod( 'set_about', 'About Paragraph' );
    ?>
    <div class="about-container">
        <p class="about"><?php echo esc_html($about) ?></p> 
    </div>

<?php get_footer(); ?>