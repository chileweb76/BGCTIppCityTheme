<?php
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>

<?php 
if(get_header_image()) {
?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php 
}
?>

<?php get_footer(); ?>