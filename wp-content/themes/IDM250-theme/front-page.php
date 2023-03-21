<?php get_header(); ?>

<!-- THIS IS THE TARGET ECHO THE TITLE OF H1-->
<!--- <h1><?php //echo get_the_title(); //get title of call home ?></h1> -->

<!-- THIS IS SEARCH BAR PHP -->
<!-- <?php get_search_form(); ?> -->

<!-- THIS IS THE HERO IMAGE CODE -->
<div class="hero-image">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>

